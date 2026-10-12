# How multi-company works

## The constraint

The FlowAccount AI Connector issues an OAuth token that is scoped to **one company**,
chosen on the login screen. Its own `company__list` tool says so: switching company
means disconnecting and reconnecting. There is no "switch company" parameter on the
tools, and there will not be one until the gateway ships the `switch_url` flow.

## The trick

Every MCP client keys its OAuth token store by **server name**, not by URL.
So this is legal and works today:

```json
{
  "mcpServers": {
    "flowaccount-acme":         { "type": "http", "url": "https://mcp.flowaccount.com/mcp" },
    "flowaccount-acme-holding": { "type": "http", "url": "https://mcp.flowaccount.com/mcp" }
  }
}
```

Two names, same URL, two logins, two companies, one session. Tools arrive namespaced,
so the model can call `flowaccount-acme`'s `sales__list_tax_invoices` and then
`flowaccount-acme-holding`'s, and compare.

## Verified behaviour per client

| Client | Token store keyed by name | Notes |
|---|---|---|
| Claude Code | yes | `.mcp.json` (project) or `claude mcp add`. Login with `/mcp`. |
| Grok CLI | yes (`~/.grok/mcp_credentials.json`) | Reads the same `.mcp.json`. |
| pi (pi-mcp-adapter) | yes | Reads `.mcp.json` and `~/.pi/agent/mcp.json`. |
| Cursor | yes | `.cursor/mcp.json`, key `url`. |
| VS Code | yes | `.vscode/mcp.json`, top key is `servers`, not `mcpServers`. |
| Codex CLI | yes | `config.toml`, then `codex mcp login <name>` per company. |
| Gemini CLI | yes | `settings.json`, key `httpUrl`, `"oauth": {"enabled": true}`. |
| Windsurf | yes | `mcp_config.json`, key `serverUrl`. |
| claude.ai / Claude Desktop connectors | yes | UI only. Add the custom connector N times with N names. |
| ChatGPT | yes | UI only. Developer mode > Connectors > Create, N times. |
| Any stdio-only client | **no, by default** | See the mcp-remote gotcha below. |

## Gotcha 1: stdio bridges share tokens by URL

Clients that only launch local processes (the Claude Desktop config file, older
hosts) reach a remote server through `mcp-remote`. `mcp-remote` caches tokens in
`~/.mcp-auth` **keyed by URL**. Two entries with the same URL silently share one
token, so both "companies" would be the same company.

Fix: give each entry its own cache directory.

```json
"flowaccount-acme": {
  "command": "npx",
  "args": ["-y", "mcp-remote", "https://mcp.flowaccount.com/mcp"],
  "env": { "MCP_REMOTE_CONFIG_DIR": "~/.mcp-auth/flowaccount-acme" }
}
```

`generate.py` already does this in `claude-desktop/` and `generic-stdio/`.

## Gotcha 2: the model does not know which name is which company

A server name is just a label you typed. The token decides the company. Two things
keep them honest:

1. **Log in carefully.** When the picker appears for `flowaccount-acme`, choose Acme.
2. **Tell the agent.** The generated `AGENTS.md` maps names to companies and tells the
   agent to say which company each number came from, and to ask when the user is
   ambiguous. Every major agent reads `AGENTS.md` (Claude Code also reads `CLAUDE.md`).

To double check after login, ask: *"For each FlowAccount server, call company__list
and tell me the current company."* The `is_current` field is the truth.

## Gotcha 3: tool-name budget

Each company adds ~60 tools to the session. Three companies is fine. Ten is not:
most clients start truncating or the model gets slower at picking tools. Keep only
the companies you are working on today enabled; Claude Code's `/mcp` and Cursor's
toggle switch them off without deleting the login.

## Gotcha 4: one login per client, per name

Tokens do not travel between clients. Logging `flowaccount-acme` into Claude Code
does not log it into Cursor. Expect N logins per client you use. They persist, so
this is a one-time cost per machine.
