#!/usr/bin/env -S uv run --script
# /// script
# requires-python = ">=3.10"
# dependencies = ["httpx", "pyyaml"]
# ///
"""
Offline check of spec_drift.py: comparison, snapshot redaction, report and CLI exit codes.
No network (httpx.get is replaced), no writes outside a temp dir.

  uv run --script libs/api-mcp/src/test_spec_drift.py
"""
import contextlib
import io
import json
import os
import sys
import tempfile
from pathlib import Path

import httpx
import yaml

sys.path.insert(0, str(Path(__file__).parent))
import spec_drift  # noqa: E402

LIVE = {
    "paths": {
        "/tax-invoices/{documentId}": {"get": {"summary": "a"}, "parameters": [{"name": "documentId"}]},
        "/contacts/": {"post": {"summary": "b"}, "get": {"summary": "c"}},
        "/": {"get": {"summary": "root"}},
    },
    "components": {"schemas": {"Contact": {"type": "object"}, "Date": {"example": "2024-01-01"}}},
}


def run(*argv, env=None) -> tuple[int, str]:
    saved_argv, saved_env = sys.argv, dict(os.environ)
    sys.argv = ["spec_drift.py", *argv]
    os.environ.pop("GITHUB_STEP_SUMMARY", None)
    os.environ.update(env or {})
    out, code = io.StringIO(), 0
    try:
        with contextlib.redirect_stdout(out):
            spec_drift.main()
    except SystemExit as e:
        code = e.code
    finally:
        sys.argv = saved_argv
        os.environ.clear()
        os.environ.update(saved_env)
    return code, out.getvalue()


def operations():
    ops = spec_drift.operations(LIVE)
    assert sorted(ops) == ["GET /", "GET /contacts", "GET /tax-invoices/{}", "POST /contacts"], ops
    assert spec_drift.operations({}) == {} and spec_drift.operations({"paths": None}) == {}
    # parameter names are ignored, the path shape is not
    other = {"paths": {"/tax-invoices/{id}": {"get": {"summary": "a"}}}}
    assert list(spec_drift.operations(other)) == ["GET /tax-invoices/{}"]
    print("ok: operations normalise parameter names and trailing slashes, skip non-method keys")


def compare():
    same = spec_drift.compare(LIVE, json.loads(json.dumps(LIVE)), deep=True)
    assert not same["drifted"] and same["common"] == 4, same

    ours = json.loads(json.dumps(LIVE))
    del ours["paths"]["/contacts/"]["post"]
    ours["paths"]["/old"] = {"delete": {}}
    ours["paths"]["/"]["get"]["summary"] = "changed"
    ours["components"]["schemas"]["Contact"]["type"] = "string"
    ours["components"]["responses"] = {"Gone": {}}
    deep = spec_drift.compare(LIVE, ours, deep=True)
    assert deep["missing"] == ["POST /contacts"] and deep["extra"] == ["DELETE /old"], deep
    assert deep["changed"] == ["GET /"], deep
    assert deep["components"] == ["responses/Gone", "schemas/Contact"], deep
    assert deep["common"] == 3 and deep["drifted"]

    # shallow (api-spec): only which operations exist matters
    shallow = spec_drift.compare(LIVE, ours, deep=False)
    assert shallow["changed"] == [] and shallow["components"] == [] and shallow["drifted"], shallow
    content_only = json.loads(json.dumps(LIVE))
    content_only["paths"]["/"]["get"]["summary"] = "changed"
    assert not spec_drift.compare(LIVE, content_only, deep=False)["drifted"]

    # YAML dates are not JSON serialisable; they must still compare
    dated = yaml.safe_load("components: {schemas: {D: {example: 2024-01-01}}}\npaths: {}")
    assert not spec_drift.compare(dated, yaml.safe_load(yaml.safe_dump(dated)), deep=True)["drifted"]
    print("ok: compare reports missing / extra / changed / components; shallow ignores content")


def snapshot_text():
    live = "info:\n  description: |\n    PostMan Collection\n    https://x/?access_key=PMAT-secret\n    Rest\n"
    out = spec_drift.snapshot_text(live)
    assert "access_key" not in out and "PostMan" not in out, out
    assert out == f"info:\n  description: |\n{spec_drift.SNAPSHOT_NOTE}\n    Rest\n", out
    # a PostMan line without a key right after it keeps the next line
    assert spec_drift.snapshot_text("PostMan Collection\nnext") == f"{spec_drift.SNAPSHOT_NOTE}\nnext\n"
    # a key anywhere else is refused, never written
    try:
        spec_drift.snapshot_text("a\n  url: https://x/?access_key=PMAT-other\n")
        raise AssertionError("expected refusal")
    except SystemExit as e:
        assert "access_key" in str(e.code)
    print("ok: snapshot drops the Postman link and refuses any other access_key")


def listing_and_report():
    assert spec_drift.listing("t", []) == ""
    assert spec_drift.listing("t", ["a"]) == "- t (1):\n  - `a`\n"
    long = spec_drift.listing("t", [str(i) for i in range(20)], limit=3)
    assert long.count("  - `") == 3 and "...and 17 more" in long, long

    sync = {"missing": [], "extra": [], "changed": [], "components": [], "common": 4, "drifted": False}
    drift = {**sync, "missing": ["GET /x"], "common": 3, "drifted": True}
    md = spec_drift.report(4, {"snapshot": drift, "api-spec": sync})
    assert "Live spec: 4 operations." in md and "⚠️ `libs/api-mcp/spec/openapi.yaml`: drifted" in md, md
    assert "✅ `libs/api-spec/src/api-spec.openapi.json`: in sync" in md and "Fix: `uv run" in md, md
    assert "Fix:" not in spec_drift.report(4, {"api-spec": drift}), "fix hint is for the snapshot only"
    print("ok: report lists drift per spec, with the fix hint on the snapshot")


def cli():
    tmp = Path(tempfile.mkdtemp())
    saved = spec_drift.ROOT, dict(spec_drift.SPECS), spec_drift.httpx.get
    try:
        spec_drift.ROOT = tmp
        spec_drift.SPECS.update(snapshot=tmp / "libs/api-mcp/spec/openapi.yaml",
                                **{"api-spec": tmp / "libs/api-spec/src/api-spec.openapi.json"})
        for p in spec_drift.SPECS.values():
            p.parent.mkdir(parents=True, exist_ok=True)
        # as in the real spec: the Postman link sits in info.description
        live_text = "info:\n  description: |\n    PostMan Collection\n    https://x/?access_key=PMAT-x\n" + yaml.safe_dump(LIVE)
        (tmp / "live.yaml").write_text(live_text)
        spec_drift.SPECS["snapshot"].write_text(yaml.safe_dump(LIVE))
        old = json.loads(json.dumps(LIVE))
        del old["paths"]["/"]
        spec_drift.SPECS["api-spec"].write_text(json.dumps(old))
        live = ["--live", str(tmp / "live.yaml")]

        summary = tmp / "summary.md"
        code, out = run(*live, env={"GITHUB_STEP_SUMMARY": str(summary)})
        assert code == 1 and "api-spec.openapi.json`: drifted" in out, (code, out)
        assert summary.read_text() == out, "job summary gets the same report"
        assert run(*live, "--fail-on", "snapshot")[0] == 0
        assert run(*live, "--fail-on")[0] == 0, "empty --fail-on only reports"
        assert run(*live, "--fail-on", "api-spec")[0] == 1

        spec_drift.SPECS["snapshot"].write_text(yaml.safe_dump({"paths": {}}))
        assert run(*live, "--fail-on", "snapshot")[0] == 1
        code, out = run(*live, "--update", "--fail-on", "snapshot")
        assert code == 0 and out.startswith("updated libs/api-mcp/spec/openapi.yaml"), (code, out)
        written = spec_drift.SPECS["snapshot"].read_text()
        assert "access_key" not in written and spec_drift.SNAPSHOT_NOTE in written, written

        spec_drift.httpx.get = lambda url, **kw: httpx.Response(200, text=live_text, request=httpx.Request("GET", url))
        assert run("--live", "https://example.test/swagger.yml", "--fail-on", "snapshot")[0] == 0

        def down(url, **kw):
            raise httpx.ConnectError("no route", request=httpx.Request("GET", url))
        spec_drift.httpx.get = down
        code, out = run("--fail-on", "snapshot")
        assert code == 2 and out.startswith("::warning::could not fetch"), (code, out)
        spec_drift.httpx.get = lambda url, **kw: httpx.Response(503, request=httpx.Request("GET", url))
        assert run()[0] == 2, "HTTP errors are 'unreachable', not drift"
    finally:
        spec_drift.ROOT, spec_drift.httpx.get = saved[0], saved[2]
        spec_drift.SPECS.clear()
        spec_drift.SPECS.update(saved[1])
    print("ok: exit 1 on drift, 0 when --fail-on excludes it, 2 when live is unreachable; --update redacts")


def repo_files():
    for name, path in spec_drift.SPECS.items():
        assert path.is_file(), f"{name}: {path} missing"
    snapshot = spec_drift.SPECS["snapshot"].read_text(encoding="utf-8")
    assert "access_key=" not in snapshot and spec_drift.SNAPSHOT_NOTE in snapshot
    assert len(spec_drift.operations(yaml.safe_load(snapshot))) == 167
    print("ok: the committed snapshot has 167 operations and no access key")


operations()
compare()
snapshot_text()
listing_and_report()
cli()
repo_files()
