# Per-client steps

All examples below use the committed output in `clients/`, generated from
`companies.example.json`. Run `python3 generate.py` to get the same files for your
own company list in `out/`.

Every client follows the same three steps:

1. put the config in place,
2. trigger the login for **each** server name,
3. pick the matching company in the FlowAccount picker.

---

## Claude Code

```bash
cp clients/claude-code/.mcp.json ./.mcp.json      # project scope, commit it if you like
claude                                            # approve the servers when asked
/mcp                                              # log in to each one; pick the company
```

Or user scope without a file:

```bash
claude mcp add -s user --transport http flowaccount-acme https://mcp.flowaccount.com/mcp
claude mcp add -s user --transport http flowaccount-acme-holding https://mcp.flowaccount.com/mcp
```

Drop `clients/AGENTS.md` (or its content into `CLAUDE.md`) next to it so the agent
knows the mapping.

## Grok CLI

Grok CLI reads the project `.mcp.json` directly, so the Claude Code file works as is.

```bash
cp clients/claude-code/.mcp.json ./.mcp.json
grok                     # then authenticate each server when prompted
```

Or: `grok mcp add --transport http flowaccount-acme https://mcp.flowaccount.com/mcp`.
Tokens live in `~/.grok/mcp_credentials.json`, one per server name.

## pi (pi.dev)

Install the adapter once, then it picks up `.mcp.json` in the project or the
per-user file.

```bash
pi install npm:pi-mcp-adapter
cp clients/claude-code/.mcp.json ./.mcp.json         # project
# or
cp clients/claude-code/.mcp.json ~/.pi/agent/mcp.json # global
```

Run `/mcp setup` inside pi the first time. The adapter exposes one proxy tool per
server, which keeps the token cost low even with several companies.

## Cursor

```bash
mkdir -p .cursor && cp clients/cursor/.cursor/mcp.json .cursor/mcp.json
```

Cursor Settings > MCP shows each server with a "Needs login" state. Click each one.

## VS Code (Copilot agent mode)

```bash
mkdir -p .vscode && cp clients/vscode/.vscode/mcp.json .vscode/mcp.json
```

Note the top-level key is `servers`. VS Code prompts for OAuth per server the first
time a tool is used.

## OpenAI Codex CLI

```bash
cat clients/codex/config.toml >> ~/.codex/config.toml
codex mcp login flowaccount-acme
codex mcp login flowaccount-acme-holding
```

## Gemini CLI

Merge `clients/gemini-cli/settings.json` into `~/.gemini/settings.json` (or
`.gemini/settings.json` in the project). Then `/mcp auth flowaccount-acme` and so on.
The `oauth.enabled` flag makes Gemini discover the FlowAccount auth server itself.

## Windsurf

Merge `clients/windsurf/mcp_config.json` into `~/.codeium/windsurf/mcp_config.json`.

## Claude Desktop (config file) and any stdio-only client

Claude Desktop's `claude_desktop_config.json` only launches local processes, so the
example bridges through `mcp-remote` with a **separate token directory per company**
(see docs/how-it-works.md, gotcha 1).

```bash
cp clients/claude-desktop/claude_desktop_config.json \
   ~/Library/Application\ Support/Claude/claude_desktop_config.json
```

Restart Claude Desktop. A browser tab opens once per company for login.

If you use the in-app **Connectors** UI instead, follow the claude.ai steps below;
that path does not need `mcp-remote`.

## claude.ai and Claude Desktop connectors (UI only)

1. Settings > Connectors > **Add custom connector**.
2. Name: `flowaccount-acme`. URL: `https://mcp.flowaccount.com/mcp`. Add.
3. Log in, pick **Acme** in the company picker.
4. Repeat from step 1 with the next name and company.

All connectors can be enabled in one chat. Paste the table from `clients/AGENTS.md`
into the project instructions so the model knows which is which.

## ChatGPT (UI only)

1. Settings > Connectors > Advanced > enable **Developer mode**.
2. Connectors > **Create**. Name: `flowaccount-acme`. URL: `https://mcp.flowaccount.com/mcp`. Auth: OAuth.
3. Log in, pick the company.
4. Repeat with the next name. Enable both in the chat's tools menu.

## Adding a client the generator does not know

Add one function to `generate.py` that returns `{relative_path: text}` and append it
to `EMITTERS`. The `emit_cursor` function is a complete template at five lines.
