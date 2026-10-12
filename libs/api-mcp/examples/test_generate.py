#!/usr/bin/env -S uv run --script
# /// script
# requires-python = ">=3.11"
# ///
"""
Offline check of generate.py: validation, every emitter's output parses, and the committed
clients/ folder matches what generate.py produces from companies.example.json.

  uv run --script libs/api-mcp/examples/test_generate.py
"""
import contextlib
import io
import json
import os
import subprocess
import sys
import tempfile
import tomllib
from pathlib import Path

HERE = Path(__file__).resolve().parent
sys.path.insert(0, str(HERE))
import generate  # noqa: E402

COMMITTED_SERVER = "/path/to/open-api/libs/api-mcp/src/server.py"
URL = "https://mcp.flowaccount.com/mcp"
TMP = Path(tempfile.mkdtemp())


def config(**data) -> Path:
    path = TMP / f"c{len(list(TMP.iterdir()))}.json"
    path.write_text(json.dumps(data))
    return path


def errors(cfg: Path) -> str:
    """Run load() and return what it printed to stderr; fail if it did not exit."""
    err = io.StringIO()
    with contextlib.redirect_stderr(err):
        try:
            generate.load(cfg)
        except SystemExit:
            return err.getvalue()
    raise AssertionError(f"{cfg.read_text()} was accepted")


def run(*argv) -> str:
    saved = sys.argv
    sys.argv = ["generate.py", *argv]
    out = io.StringIO()
    try:
        with contextlib.redirect_stdout(out), contextlib.redirect_stderr(out):
            generate.main()
    except SystemExit as e:
        out.write(f"exit {e.code}")
    finally:
        sys.argv = saved
    return out.getvalue()


def validation():
    ok = {"slug": "acme"}
    assert "server.url" in errors(config(companies=[ok]))
    assert "server.url" in errors(config(server={"url": "http://x"}, companies=[ok]))
    assert "prefix" in errors(config(server={"url": URL}, prefix="Bad Prefix", companies=[ok]))
    assert "empty" in errors(config(server={"url": URL}, companies=[]))
    assert "slug" in errors(config(server={"url": URL}, companies=[{"slug": "Acme Co"}]))
    assert "duplicate" in errors(config(server={"url": URL}, companies=[ok, ok]))
    assert "companies[0].url" in errors(config(server={"url": URL}, companies=[{"slug": "a", "url": "http://x"}]))

    msg = errors(config(companies=[{"slug": "A"}, {"slug": "A"}]))
    assert msg.count("error:") == 4, f"every problem should be reported at once:\n{msg}"
    print("ok: bad url, prefix, slug, duplicate, per-company url rejected, all problems reported together")


def model():
    m = generate.load(config(server={"url": URL}, prefix="fa", companies=[
        {"slug": "a", "openapi": True},
        {"slug": "b", "name": "B Co", "url": "https://other.example/mcp",
         "openapi": {"profile": "mine", "environment": "sandbox", "allow_write": True}},
        {"slug": "c", "openapi": False},
    ]), "/srv/server.py")
    a, b = m["openapi"]
    assert [c["server_name"] for c in m["companies"]] == ["fa-a", "fa-b", "fa-c"]
    assert m["companies"][0]["name"] == "a" and m["companies"][1]["url"] == "https://other.example/mcp"
    assert m["label"] == "FlowAccount AI Connector"
    assert a["args"] == ["run", "--script", "/srv/server.py", "--profile", "fa-a-api"], a
    assert a["environment"] == "production" and not a["allow_write"]
    assert b["args"][-3:] == ["--profile", "mine", "--allow-write"] and b["environment"] == "sandbox", b
    print('ok: "openapi": true shorthand, profile override, --allow-write, per-company url, openapi false skipped')
    return m


def emitters(m):
    files = {}
    for emit in generate.EMITTERS:
        files.update(emit(m))
    for rel, text in files.items():
        if rel.endswith(".json"):
            json.loads(text)
        elif rel.endswith(".toml"):
            tomllib.loads(text)
        elif rel.endswith(".sh"):
            subprocess.run(["bash", "-n"], input=text, text=True, check=True)
    names = {"fa-a", "fa-b", "fa-c", "fa-a-api", "fa-b-api"}
    for rel in ("claude-code/.mcp.json", "cursor/.cursor/mcp.json", "windsurf/mcp_config.json",
                "gemini-cli/settings.json", "claude-desktop/claude_desktop_config.json"):
        assert set(json.loads(files[rel])["mcpServers"]) == names, rel
    assert set(json.loads(files["vscode/.vscode/mcp.json"])["servers"]) == names
    assert set(tomllib.loads(files["codex/config.toml"])["mcp_servers"]) == names
    assert json.loads(files["openapi/credentials.template.json"]).keys() == {"fa-a-api", "mine"}

    desktop = json.loads(files["claude-desktop/claude_desktop_config.json"])["mcpServers"]
    dirs = {v["env"]["MCP_REMOTE_CONFIG_DIR"] for k, v in desktop.items() if "env" in v}
    assert len(dirs) == 3, "each company needs its own mcp-remote token cache"
    assert "secret" not in json.dumps(desktop).lower(), "no credentials in client config files"
    assert "read-write" in files["AGENTS.md"] and "read-only" in files["AGENTS.md"]

    plain = {"label": "L", "companies": m["companies"][:1], "openapi": []}
    assert generate.emit_openapi_credentials(plain) == {}
    assert "Open API" not in generate.emit_agents_md(plain)["AGENTS.md"]
    assert "Open API servers" not in generate.emit_commands(plain)["commands.sh"]
    print(f"ok: {len(files)} files parse (json, toml, bash -n), every client lists every server, no secrets")


def cli():
    log = run("--config", str(TMP / "missing.json"))
    assert "not found" in log and log.endswith("exit 1"), log

    out = TMP / "out"
    example = str(HERE / "companies.example.json")
    assert "ok: 3 companies" in run("--config", example, "--out", str(out), "--check")
    assert not out.exists(), "--check must not write"

    log = run("--config", example, "--out", str(out), "--openapi-server", COMMITTED_SERVER)
    assert "done: 11 files" in log, log
    assert os.access(out / "commands.sh", os.X_OK), "commands.sh not executable"

    committed = HERE / "clients"
    generated = {p.relative_to(out) for p in out.rglob("*") if p.is_file()}
    stale = [str(p) for p in sorted(generated) if (committed / p).read_text() != (out / p).read_text()]
    assert generated == {p.relative_to(committed) for p in committed.rglob("*") if p.is_file()}
    assert not stale, f"clients/ is out of date, regenerate it: {stale}"
    print("ok: missing config, --check writes nothing, 11 files written, commands.sh executable, clients/ up to date")


validation()
emitters(model())
cli()
