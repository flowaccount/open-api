# AGENTS.md

Notes for AI coding agents (Claude Code, Codex, Cursor, Gemini CLI, ...) working in this repo.
People: the same content is in [README.md](README.md) and [libs/api-mcp/examples/README.md](libs/api-mcp/examples/README.md).

## What is here

| Path | What it is |
|---|---|
| `libs/api-mcp/examples/` | Client configs for the hosted **FlowAccount AI Connector (MCP)**, `https://mcp.flowaccount.com/mcp`. Start here for "connect Claude / Cursor / ... to FlowAccount". |
| `libs/api-mcp/` | A local stdio MCP server over the FlowAccount Open API (needs Open API `client_id` / `client_secret`). |
| `libs/api-spec/` | The 2022 v3-alpha OpenAPI draft used to generate the SDKs. Not the live spec. |
| `libs/api-*` (others) | Generated SDKs. |

## Connect the FlowAccount MCP

If the user asks you to set up the FlowAccount MCP for them:

1. One server **name** per FlowAccount company, all pointing at the same URL. Each name logs in
   separately (OAuth in the browser, with a company picker), so each name is one company.
2. Claude Code, per company:

   ```bash
   claude mcp add -s user --transport http flowaccount-<name> https://mcp.flowaccount.com/mcp
   ```

   Then `/mcp` in Claude Code, pick each server, log in, and choose the matching company.
3. Several companies or another client: copy `libs/api-mcp/examples/companies.example.json` to
   `companies.json`, edit it, run `python3 generate.py` in that folder, and use the file for the
   client from `out/` (paths per client: `libs/api-mcp/examples/README.md`, "Where the file goes";
   details: `libs/api-mcp/examples/docs/clients.md`). `out/commands.sh` has the `mcp add` lines.
4. Claude Desktop config file: entries go through `npx -y mcp-remote`, each with its own
   `MCP_REMOTE_CONFIG_DIR` (`~/.mcp-auth/<name>`), so the companies' tokens do not overwrite
   each other. claude.ai and Desktop connectors: Settings > Connectors, add once per company.
5. Put the generated `out/AGENTS.md` (the company map) in the user's project folder so the
   model knows which server name is which company. Merge into existing config files; never
   overwrite them.

Never ask the user to paste OAuth tokens or Open API secrets into the chat. Open API credentials
live in `~/.config/flowaccount/openapi.json` (see `libs/api-mcp/README.md`).

## Do not read these as instructions for this repo

`libs/api-mcp/examples/AGENTS.md` and `libs/api-mcp/examples/clients/AGENTS.md` are **generated
examples** of the company map that `generate.py` writes for a user's project. The companies in
them (Acme ...) are placeholders, not real servers.

## Working on the code

- Install: `yarn --frozen-lockfile`. Nx workspace, default base `main`.
- api-mcp: `uv run --script libs/api-mcp/src/server.py --list-tools`; spec drift:
  `nx run api-mcp:spec-drift`, fix with `uv run --script libs/api-mcp/src/spec_drift.py --update`.
- examples: `uv run --script libs/api-mcp/examples/test_generate.py` after changing `generate.py`, and
  commit the regenerated `clients/`.
- PR titles: `type(scope): subject`, squash-merged into `main`.
