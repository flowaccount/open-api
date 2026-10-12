#!/usr/bin/env -S uv run --script
# /// script
# requires-python = ">=3.10"
# dependencies = ["httpx", "pyyaml"]
# ///
"""
Compare the specs kept in this repo with the live spec served by the developer portal.

  uv run --script libs/api-mcp/src/spec_drift.py                      # report, exit 1 on any drift, 2 if live is unreachable
  uv run --script libs/api-mcp/src/spec_drift.py --fail-on snapshot   # only the snapshot fails
  uv run --script libs/api-mcp/src/spec_drift.py --update             # refresh the snapshot from live

Operations are compared as METHOD + path with parameter names ignored
(/tax-invoices/{id} == /tax-invoices/{documentId}). The api-mcp snapshot is also compared
operation by operation and component by component. The report is Markdown; in GitHub
Actions it is also written to the job summary.
"""
import argparse
import json
import os
import re
import sys
from pathlib import Path

import httpx
import yaml

LIVE_URL = "https://developers.flowaccount.com/swagger.yml"
ROOT = Path(__file__).resolve().parents[3]
SPECS = {
    "snapshot": ROOT / "libs/api-mcp/spec/openapi.yaml",
    "api-spec": ROOT / "libs/api-spec/src/api-spec.openapi.json",
}
HTTP_METHODS = {"get", "put", "post", "delete", "patch", "head", "options", "trace"}
SNAPSHOT_NOTE = f"    Snapshot of {LIVE_URL} (Postman link removed)."


def operations(spec: dict) -> dict:
    ops = {}
    for path, item in (spec.get("paths") or {}).items():
        norm = re.sub(r"\{[^}]+\}", "{}", path.rstrip("/") or "/")
        for method, op in item.items():
            if method in HTTP_METHODS:
                ops[f"{method.upper()} {norm}"] = op
    return ops


def compare(live: dict, ours: dict, deep: bool) -> dict:
    lo, oo = operations(live), operations(ours)
    diff = {
        "missing": sorted(lo.keys() - oo.keys()),  # live has it, the repo does not
        "extra": sorted(oo.keys() - lo.keys()),  # the repo has it, live does not
        "changed": [],
        "components": [],
    }
    if deep:
        dump = lambda o: json.dumps(o, sort_keys=True, default=str)  # noqa: E731  (YAML dates)
        diff["changed"] = sorted(k for k in lo.keys() & oo.keys() if dump(lo[k]) != dump(oo[k]))
        for kind in sorted(set(live.get("components") or {}) | set(ours.get("components") or {})):
            a = (live.get("components") or {}).get(kind) or {}
            b = (ours.get("components") or {}).get(kind) or {}
            diff["components"] += sorted(f"{kind}/{n}" for n in a.keys() | b.keys() if dump(a.get(n)) != dump(b.get(n)))
    diff["common"] = len(lo.keys() & oo.keys())
    diff["drifted"] = any(diff[k] for k in ("missing", "extra", "changed", "components"))
    return diff


def snapshot_text(live_text: str) -> str:
    """The live spec with its Postman link (which embeds an access key) replaced by a note."""
    lines, out, skip = live_text.splitlines(), [], False
    for line in lines:
        if "PostMan Collection" in line:
            out.append(SNAPSHOT_NOTE)
            skip = True
            continue
        if skip and "access_key=" in line:
            skip = False
            continue
        skip = False
        if "access_key=" in line:
            sys.exit("refusing to write a snapshot that still contains an access_key")
        out.append(line)
    return "\n".join(out) + "\n"


def listing(title: str, items: list, limit: int = 15) -> str:
    if not items:
        return ""
    shown = "\n".join(f"  - `{i}`" for i in items[:limit])
    more = f"\n  - ...and {len(items) - limit} more" if len(items) > limit else ""
    return f"- {title} ({len(items)}):\n{shown}{more}\n"


def report(live_ops: int, results: dict) -> str:
    out = [f"## Spec drift vs [{LIVE_URL}]({LIVE_URL})\n", f"Live spec: {live_ops} operations.\n"]
    for name, d in results.items():
        status = "drifted" if d["drifted"] else "in sync"
        icon = "⚠️" if d["drifted"] else "✅"
        out.append(f"### {icon} `{SPECS[name].relative_to(ROOT)}`: {status}\n")
        out.append(f"{d['common']} of {live_ops} live operations present.\n")
        out.append(listing("In live, missing here", d["missing"]))
        out.append(listing("Here, gone from live", d["extra"]))
        out.append(listing("Operations that differ", d["changed"]))
        out.append(listing("Components that differ", d["components"]))
        if name == "snapshot" and d["drifted"]:
            out.append("Fix: `uv run --script libs/api-mcp/src/spec_drift.py --update`, review the diff, commit.\n")
    return "\n".join(x for x in out if x)


def main():
    ap = argparse.ArgumentParser(description=__doc__, formatter_class=argparse.RawDescriptionHelpFormatter)
    ap.add_argument("--live", default=LIVE_URL, help="live spec URL or local file")
    ap.add_argument("--fail-on", nargs="*", choices=sorted(SPECS), default=sorted(SPECS),
                    help="specs whose drift makes the exit code 1 (default: all)")
    ap.add_argument("--update", action="store_true", help="rewrite the api-mcp snapshot from the live spec")
    args = ap.parse_args()

    if args.live.startswith(("http://", "https://")):
        try:
            r = httpx.get(args.live, timeout=30, follow_redirects=True)
            r.raise_for_status()
        except httpx.HTTPError as e:
            # The portal being down is not drift. Exit 2 so CI can warn instead of failing.
            print(f"::warning::could not fetch {args.live}: {e}")
            sys.exit(2)
        live_text = r.text
    else:
        live_text = Path(args.live).read_text(encoding="utf-8")
    live = yaml.safe_load(live_text)

    if args.update:
        SPECS["snapshot"].write_text(snapshot_text(live_text), encoding="utf-8")
        print(f"updated {SPECS['snapshot'].relative_to(ROOT)}")

    results = {}
    for name, path in SPECS.items():
        text = path.read_text(encoding="utf-8")
        ours = json.loads(text) if path.suffix == ".json" else yaml.safe_load(text)
        results[name] = compare(live, ours, deep=name == "snapshot")

    md = report(len(operations(live)), results)
    print(md)
    if os.environ.get("GITHUB_STEP_SUMMARY"):
        with open(os.environ["GITHUB_STEP_SUMMARY"], "a", encoding="utf-8") as f:
            f.write(md + "\n")
    if any(results[n]["drifted"] for n in args.fail_on or []):
        sys.exit(1)


if __name__ == "__main__":
    main()
