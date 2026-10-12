#!/usr/bin/env python3
"""
Generate MCP client configs for multiple FlowAccount companies from ONE source file.

  python3 generate.py                      # reads companies.json, writes ./out
  python3 generate.py --config companies.example.json --out clients
  python3 generate.py --check              # validate only

Zero dependencies. Python 3.8+.

Why this exists
---------------
The FlowAccount AI Connector (MCP) binds ONE company to each OAuth login.
Every MCP client lets you register the same server URL more than once under
different names, and each name gets its own login. So "one company per name"
is the whole trick. This script just spells that out in every client's dialect.

Companies with an "openapi" block also get a second, local entry
(<name>-api) that runs ../src/server.py (libs/api-mcp) with that company's Open API
client_id / client_secret. See ../README.md.
"""
import argparse
import json
import re
import sys
from pathlib import Path

SLUG_RE = re.compile(r"^[a-z0-9][a-z0-9-]{0,40}$")
DEFAULT_OPENAPI_SERVER = str((Path(__file__).resolve().parents[1] / "src" / "server.py"))


# ----------------------------------------------------------------------------
# Model
# ----------------------------------------------------------------------------
def load(config_path: Path, openapi_server: str = DEFAULT_OPENAPI_SERVER) -> dict:
    data = json.loads(config_path.read_text(encoding="utf-8"))
    server = data.get("server") or {}
    prefix = data.get("prefix") or "flowaccount"
    companies = data.get("companies") or []
    problems = []

    default_url = server.get("url")
    if not default_url or not default_url.startswith("https://"):
        problems.append("server.url must be an https:// URL")
    if not SLUG_RE.match(prefix):
        problems.append(f"prefix {prefix!r} must match {SLUG_RE.pattern}")
    if not companies:
        problems.append("companies[] is empty")

    seen = set()
    resolved = []
    apis = []
    for i, c in enumerate(companies):
        slug = c.get("slug", "")
        if not SLUG_RE.match(slug):
            problems.append(f"companies[{i}].slug {slug!r} must match {SLUG_RE.pattern}")
        if slug in seen:
            problems.append(f"duplicate slug {slug!r}")
        seen.add(slug)
        url = c.get("url") or default_url
        if url and not url.startswith("https://"):
            problems.append(f"companies[{i}].url must be https://")
        resolved.append(
            {
                "slug": slug,
                "server_name": f"{prefix}-{slug}",
                "name": c.get("name") or slug,
                "note": c.get("note", ""),
                "url": url,
            }
        )
        api = c.get("openapi")
        if api:
            api = {} if api is True else api
            api_name = f"{prefix}-{slug}-api"
            args = ["run", "--script", openapi_server, "--profile", api.get("profile") or api_name]
            if api.get("allow_write"):
                args.append("--allow-write")
            apis.append(
                {
                    "server_name": api_name,
                    "name": c.get("name") or slug,
                    "environment": api.get("environment", "production"),
                    "allow_write": bool(api.get("allow_write")),
                    "profile": api.get("profile") or api_name,
                    "command": "uv",
                    "args": args,
                }
            )

    if problems:
        for p in problems:
            print(f"error: {p}", file=sys.stderr)
        sys.exit(1)

    return {
        "label": server.get("label", "FlowAccount AI Connector"),
        "companies": resolved,
        "openapi": apis,
    }


# ----------------------------------------------------------------------------
# Emitters. Each returns {relative_path: text}.
# ----------------------------------------------------------------------------
def jdump(obj) -> str:
    return json.dumps(obj, indent=2, ensure_ascii=False) + "\n"


def stdio(a, **extra):
    """Local Open API server entry. Same shape in almost every client."""
    return {**extra, "command": a["command"], "args": a["args"]}


def shell_line(a) -> str:
    return " ".join([a["command"], *a["args"]])


def emit_mcp_json(m):
    """Claude Code, Grok CLI, pi (pi-mcp-adapter) all read this shape."""
    servers = {c["server_name"]: {"type": "http", "url": c["url"]} for c in m["companies"]}
    servers.update({a["server_name"]: stdio(a, type="stdio") for a in m["openapi"]})
    return {"claude-code/.mcp.json": jdump({"mcpServers": servers})}


def emit_cursor(m):
    servers = {c["server_name"]: {"url": c["url"]} for c in m["companies"]}
    servers.update({a["server_name"]: stdio(a) for a in m["openapi"]})
    return {"cursor/.cursor/mcp.json": jdump({"mcpServers": servers})}


def emit_vscode(m):
    servers = {c["server_name"]: {"type": "http", "url": c["url"]} for c in m["companies"]}
    servers.update({a["server_name"]: stdio(a, type="stdio") for a in m["openapi"]})
    return {"vscode/.vscode/mcp.json": jdump({"servers": servers})}


def emit_windsurf(m):
    servers = {c["server_name"]: {"serverUrl": c["url"]} for c in m["companies"]}
    servers.update({a["server_name"]: stdio(a) for a in m["openapi"]})
    return {"windsurf/mcp_config.json": jdump({"mcpServers": servers})}


def emit_gemini(m):
    servers = {
        c["server_name"]: {"httpUrl": c["url"], "oauth": {"enabled": True}} for c in m["companies"]
    }
    servers.update({a["server_name"]: stdio(a) for a in m["openapi"]})
    return {"gemini-cli/settings.json": jdump({"mcpServers": servers})}


def emit_codex(m):
    lines = ["# Append to ~/.codex/config.toml (or .codex/config.toml in a project).",
             "# Then run once per company:  codex mcp login <name>", ""]
    for c in m["companies"]:
        lines += [f"[mcp_servers.{c['server_name']}]", f'url = "{c["url"]}"',
                  f"# {c['name']}" + (f" - {c['note']}" if c["note"] else ""), ""]
    for a in m["openapi"]:
        lines += [f"[mcp_servers.{a['server_name']}]", f'command = "{a["command"]}"',
                  f"args = {json.dumps(a['args'])}", f"# {a['name']} via Open API (no login step)", ""]
    return {"codex/config.toml": "\n".join(lines)}


def emit_stdio_bridge(m):
    """For clients that only speak stdio (Claude Desktop config file, older hosts).

    mcp-remote caches OAuth tokens per URL under ~/.mcp-auth. Two entries with the
    same URL would SHARE a token, i.e. the same company. MCP_REMOTE_CONFIG_DIR gives
    each company its own cache so each entry logs in separately.
    """
    servers = {}
    for c in m["companies"]:
        servers[c["server_name"]] = {
            "command": "npx",
            "args": ["-y", "mcp-remote", c["url"]],
            "env": {"MCP_REMOTE_CONFIG_DIR": f"~/.mcp-auth/{c['server_name']}"},
        }
    servers.update({a["server_name"]: stdio(a) for a in m["openapi"]})
    return {
        "claude-desktop/claude_desktop_config.json": jdump({"mcpServers": servers}),
        "generic-stdio/mcp.json": jdump({"mcpServers": servers}),
    }


def emit_commands(m):
    lines = ["#!/usr/bin/env bash",
             "# One-liners per client. Run the block for the client you use.",
             "# After adding, each entry needs its own OAuth login, where you pick the company.",
             "set -e", ""]
    lines.append("# --- Claude Code (project scope; use -s user for global) ---")
    for c in m["companies"]:
        lines.append(f"claude mcp add --transport http {c['server_name']} {c['url']}   # {c['name']}")
    lines += ["", "# --- Grok CLI ---"]
    for c in m["companies"]:
        lines.append(f"grok mcp add --transport http {c['server_name']} {c['url']}   # {c['name']}")
    lines += ["", "# --- OpenAI Codex CLI ---"]
    for c in m["companies"]:
        lines.append(f"codex mcp add {c['server_name']} --url {c['url']}   # {c['name']}")
    for c in m["companies"]:
        lines.append(f"codex mcp login {c['server_name']}")
    lines += ["", "# --- Gemini CLI ---"]
    for c in m["companies"]:
        lines.append(f"gemini mcp add --transport http {c['server_name']} {c['url']}   # {c['name']}")
    if m["openapi"]:
        lines += ["", "# --- Open API servers (local stdio, credentials from ~/.config/flowaccount/openapi.json) ---",
                  "# Gemini CLI, Grok CLI, pi: use their config file instead (see libs/api-mcp/README.md)."]
        for a in m["openapi"]:
            lines.append(f"claude mcp add {a['server_name']} -- {shell_line(a)}")
            lines.append(f"codex mcp add {a['server_name']} -- {shell_line(a)}")
    lines.append("")
    return {"commands.sh": "\n".join(lines)}


def emit_openapi_credentials(m):
    if not m["openapi"]:
        return {}
    creds = {
        a["profile"]: {
            "client_id": "<client_id from FlowAccount developer settings>",
            "client_secret": "<client_secret>",
            "environment": a["environment"],
        }
        for a in m["openapi"]
    }
    return {"openapi/credentials.template.json": jdump(creds)}


def emit_agents_md(m):
    rows = "\n".join(
        f"| `{c['server_name']}` | {c['name']} | {c['note'] or ''} |" for c in m["companies"]
    )
    text = f"""## FlowAccount companies available to you

Each MCP server below is the {m['label']} logged into ONE company.
Tools are namespaced by server name (for example `mcp__{m['companies'][0]['server_name']}__sales__list_tax_invoices`).
Pick the server whose company the user means. If the user does not say which company,
ask, unless the request obviously spans all of them (for example "compare AR aging across companies").

| Server name | Company | Note |
|---|---|---|
{rows}

Rules:
- Never mix numbers from two companies in one figure unless the user asked for a comparison.
- Always say which company a number came from.
- If a server reports it is not authenticated, tell the user to log that server in; do not fall back to another company.
"""
    if m["openapi"]:
        api_rows = "\n".join(
            f"| `{a['server_name']}` | {a['name']} | {a['environment']} | {'read-write' if a['allow_write'] else 'read-only'} |"
            for a in m["openapi"]
        )
        text += f"""
## FlowAccount Open API servers

These are local servers built from the public FlowAccount Open API, one per company,
using that company's API credentials. Tool names are plain verbs on documents
(`list_tax_invoices`, `get_tax_invoice`, `list_contacts`, `get_company_info`).
Same rules as above: one server is one company.

| Server name | Company | Environment | Mode |
|---|---|---|---|
{api_rows}

Prefer the AI Connector server for questions it covers; use the `-api` server when the user
asks for raw documents or when the connector is not logged in. Never create, edit or delete
documents unless the user asked for that specific change.
"""
    return {"AGENTS.md": text}


EMITTERS = [
    emit_mcp_json,
    emit_cursor,
    emit_vscode,
    emit_windsurf,
    emit_gemini,
    emit_codex,
    emit_stdio_bridge,
    emit_commands,
    emit_openapi_credentials,
    emit_agents_md,
]


# ----------------------------------------------------------------------------
def main():
    ap = argparse.ArgumentParser(description=__doc__, formatter_class=argparse.RawDescriptionHelpFormatter)
    ap.add_argument("--config", default="companies.json", help="source file (default: companies.json)")
    ap.add_argument("--out", default="out", help="output directory (default: out)")
    ap.add_argument("--check", action="store_true", help="validate the config and exit")
    ap.add_argument("--openapi-server", default=DEFAULT_OPENAPI_SERVER,
                    help="path written into configs for the Open API server (default: ../src/server.py, absolute)")
    args = ap.parse_args()

    cfg = Path(args.config)
    if not cfg.exists():
        print(f"error: {cfg} not found. Copy companies.example.json to companies.json first.", file=sys.stderr)
        sys.exit(1)

    model = load(cfg, args.openapi_server)
    names = ", ".join(c["server_name"] for c in model["companies"] + model["openapi"])
    print(f"ok: {len(model['companies'])} companies -> {names}")
    if args.check:
        return

    out = Path(args.out)
    written = 0
    for emit in EMITTERS:
        for rel, text in emit(model).items():
            p = out / rel
            p.parent.mkdir(parents=True, exist_ok=True)
            p.write_text(text, encoding="utf-8")
            if rel.endswith(".sh"):
                p.chmod(0o755)
            written += 1
            print(f"  wrote {p}")
    print(f"done: {written} files in {out}/")


if __name__ == "__main__":
    main()
