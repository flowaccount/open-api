# FlowAccount MCP: multi-company client configs

Example configurations for the **FlowAccount AI Connector (MCP)**, with one goal:

> Talk to **several FlowAccount companies in the same AI session**, from **any MCP client**.

The connector binds one company to each login. People hit that wall and assume
"one company per chat". The fix is simple and works everywhere: register the same
server URL once **per company**, under a different **name**, and log each name in
separately. This folder turns that into a one-file config and a generator that emits
every client's dialect.

```
companies.json  ──▶  python3 generate.py  ──▶  out/<client>/...
   (one file)          (no dependencies)        Claude Code, Cursor, VS Code, Codex,
                                                Gemini CLI, Grok CLI, pi, Windsurf,
                                                Claude Desktop, any stdio client
```

## 60-second start

```bash
git clone https://github.com/flowaccount/open-api && cd open-api/libs/api-mcp/examples
cp companies.example.json companies.json     # edit: one entry per company
python3 generate.py                          # writes ./out
```

Then copy the file for your client from `out/` (see [docs/clients.md](docs/clients.md)),
and log in once per company. During each login FlowAccount shows a company picker.
Pick the company that matches the name. Done.

Prefer commands over files? `out/commands.sh` has the `claude mcp add`, `grok mcp add`,
`codex mcp add`, `gemini mcp add` lines for every company.

## Also: the FlowAccount Open API as MCP

Have Open API credentials (`client_id` / `client_secret`)? [`libs/api-mcp`](../README.md) turns the
[FlowAccount Open API](https://developers.flowaccount.com/api-reference) into a local MCP server, one per
company, read-only by default. Add `"openapi": {}` to a company in `companies.json` and
`generate.py` emits a `<name>-api` entry next to the hosted one, for every client.

```bash
uv run --script ../src/server.py --list-tools   # the 34 read tools, no credentials needed
```

Credentials file, write mode and safety notes: [libs/api-mcp/README.md](../README.md).

## Where the file goes on your machine

Pick the row for your client. "Project" means the folder you open the AI tool in
(commit it so teammates get the same servers). "User" means it applies everywhere.

| Client | Project scope | User scope (macOS / Linux) | User scope (Windows) |
|---|---|---|---|
| Claude Code | `./.mcp.json` | `~/.claude.json` via `claude mcp add -s user ...` | `%USERPROFILE%\.claude.json` |
| Grok CLI | `./.mcp.json` (same file) | `grok mcp add ...` | same |
| pi | `./.mcp.json` (same file) | `~/.pi/agent/mcp.json` | `%USERPROFILE%\.pi\agent\mcp.json` |
| Cursor | `./.cursor/mcp.json` | `~/.cursor/mcp.json` | `%USERPROFILE%\.cursor\mcp.json` |
| VS Code | `./.vscode/mcp.json` | `~/Library/Application Support/Code/User/mcp.json` (Linux: `~/.config/Code/User/mcp.json`) | `%APPDATA%\Code\User\mcp.json` |
| Windsurf | n/a | `~/.codeium/windsurf/mcp_config.json` | `%USERPROFILE%\.codeium\windsurf\mcp_config.json` |
| Gemini CLI | `./.gemini/settings.json` | `~/.gemini/settings.json` | `%USERPROFILE%\.gemini\settings.json` |
| Codex CLI | n/a | `~/.codex/config.toml` | `%USERPROFILE%\.codex\config.toml` |
| Claude Desktop (file) | n/a | `~/Library/Application Support/Claude/claude_desktop_config.json` | `%APPDATA%\Claude\claude_desktop_config.json` |
| claude.ai, Claude Desktop connectors, ChatGPT | no file | Settings > Connectors, add once per company | same |

Put `AGENTS.md` (or its table pasted into `CLAUDE.md` / project instructions) in the
same project folder so the model knows which server name is which company.

If the target file already exists, merge the `mcpServers` (or `servers`) entries
into it instead of overwriting; every example only adds keys, it never needs to
remove any.

## What "AI agnostic" means here

| Layer | Owned by | Agnostic? |
|---|---|---|
| `companies.json` | you | yes, one file, no client vocabulary |
| `generate.py` | this folder | emits each client's format; add an emitter for a new client in ~10 lines |
| `AGENTS.md` | generated | plain-markdown company map any agent can read (Claude Code, Codex, Cursor, Gemini, pi all pick up `AGENTS.md`/`CLAUDE.md`) |
| OAuth login | the client | every client does per-name token storage, so each name is its own company |

The server URL is the public one from the [FlowAccount blog](https://flowaccount.com/blog/flowaccount-ai-connector-mcp/):
`https://mcp.flowaccount.com/mcp`. Nothing here is specific to Claude.

## Live demo in this folder

This folder ships a root `.mcp.json` and `AGENTS.md` generated from
`companies.example.json`. Open the folder in Claude Code, Grok CLI or pi and you
will be offered three FlowAccount servers (plus two `-api` servers, which need
`~/.config/flowaccount/openapi.json` first, see [../README.md](../README.md)). Log each one into a different company
and try:

```
Compare this month's sales for flowaccount-acme and flowaccount-acme-holding.
Which company has the older AR aging?
```

## Layout

```
companies.example.json   canonical source of truth (copy to companies.json)
generate.py              emitter for every client, zero deps
clients/                 committed output of generate.py on the example file
docs/how-it-works.md     why one-name-per-company works, and the gotchas
docs/clients.md          per-client steps, including UI-only clients (claude.ai, ChatGPT)
../src/server.py         the Open API server these configs run (libs/api-mcp)
.mcp.json, AGENTS.md     live demo copies of clients/claude-code/.mcp.json and clients/AGENTS.md
```

Regenerate the committed examples after changing the generator:

```bash
python3 generate.py --config companies.example.json --out clients \
  --openapi-server /path/to/open-api/libs/api-mcp/src/server.py
python3 generate.py --config companies.example.json --out /tmp/demo --openapi-server ../src/server.py
cp /tmp/demo/claude-code/.mcp.json .mcp.json && cp clients/AGENTS.md AGENTS.md
```

## Naming convention

`<prefix>-<slug>` where prefix defaults to `flowaccount`. Keep slugs short and
lowercase, because they become part of every tool name the model sees
(`mcp__flowaccount-acme__sales__list_tax_invoices`). Long names cost tokens on
every call.
