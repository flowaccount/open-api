# api-mcp: FlowAccount Open API as an MCP server

A local [MCP](https://modelcontextprotocol.io) server (stdio) that turns the FlowAccount Open API
into tools, so Claude, Cursor, VS Code, Codex, Gemini CLI or any other MCP client can read
(and optionally write) your FlowAccount data using Open API `client_id` / `client_secret`.

One process = one company. To use several companies, add one server entry per company, each
with its own `--profile`.

> Looking for the no-setup option? FlowAccount's hosted AI Connector
> (`https://mcp.flowaccount.com/mcp`) logs in with OAuth in the browser. Use this server when
> you have Open API credentials, need sandbox access, or run headless agents.

## Requirements

- [uv](https://docs.astral.sh/uv/). The script declares its own dependencies (`fastmcp`, `httpx`, `pyyaml`); there is nothing to install.
- Open API credentials per company (production and sandbox are different).

## Credentials

```bash
mkdir -p ~/.config/flowaccount
cp libs/api-mcp/credentials.example.json ~/.config/flowaccount/openapi.json
chmod 600 ~/.config/flowaccount/openapi.json   # then fill in client_id / client_secret
```

Each key is a profile name. Keys per profile: `client_id`, `client_secret`, `environment`
(`production` | `sandbox`), optional `allow_write`, `base_url`, `scope`.

Without `--profile`, the server reads `FLOWACCOUNT_CLIENT_ID`, `FLOWACCOUNT_CLIENT_SECRET`,
`FLOWACCOUNT_ENVIRONMENT` and `FLOWACCOUNT_BASE_URL`. `--profile` always wins, so a leftover
variable can't point every entry at the same company. Secrets never go in client config files.

## Add it to a client

```json
{
  "mcpServers": {
    "flowaccount-acme-api": {
      "command": "uv",
      "args": ["run", "--script", "/path/to/open-api/libs/api-mcp/src/server.py", "--profile", "flowaccount-acme-api"]
    }
  }
}
```

Claude Code:

```bash
claude mcp add flowaccount-acme-api -- uv run --script /path/to/open-api/libs/api-mcp/src/server.py --profile flowaccount-acme-api
```

Several companies, or a client other than Claude? [`examples/`](examples/README.md) generates
the config for Claude Code, Cursor, VS Code, Windsurf, Gemini CLI, Codex, Claude Desktop and
any stdio host from one `companies.json`. It covers the hosted AI Connector too: an
`"openapi": {}` block on a company adds its `<name>-api` entry for this server.

## Tools

Read-only by default: 34 GET tools such as `list_tax_invoices`, `get_tax_invoice`,
`list_receipts`, `list_expenses`, `list_contacts`, `list_product_masters`, `get_company_info`,
`get_chart_of_accounts_accounts`, `get_bank_channel_bank_accounts`. Document lists take
`currentPage`, `pageSize`, `searchString`, `startDate` / `endDate` (`YYYY-MM-DD`), `month`, `year`, `range`.

`--allow-write` (or `"allow_write": true` in the profile) also exposes create / edit / status /
payment / journal-entry / delete tools, 166 in total (`post_tax_invoices`, `put_tax_invoices_by_id`, ...). Those writes are real,
so try them on sandbox first. GET tools carry `readOnlyHint` and DELETE tools carry `destructiveHint`.

```bash
nx run api-mcp:list-tools   # or: uv run --script libs/api-mcp/src/server.py --list-tools [--allow-write]
nx run api-mcp:test         # offline: server against a fake API, plus examples/generate.py
```

## How it works

- **Spec**: the live spec behind the [API reference](https://developers.flowaccount.com/api-reference)
  (`https://developers.flowaccount.com/swagger.yml`), cached for a day, so new endpoints show up
  without a release. `spec/openapi.yaml` is a snapshot used offline and by the selftest. Override
  with `--spec <path|url>` or `FLOWACCOUNT_OPENAPI_SPEC`. Two known spec quirks are handled:
  Swagger-2 style `required: true` on properties is dropped, and response schemas are not
  enforced (some documented types differ from real responses).
- **Base URL**: `https://openapi.flowaccount.com/v1` (production) and `/test` (sandbox). `/v1` is the
  API Gateway stage. It routes to the v3 Open API service, so these are v3 endpoints.
  `libs/api-spec` is the older 2022 v3-alpha draft and is not used here.
- **Auth**: `client_credentials` grant at `{base}/token` (scope `flowaccount-api`). The token is cached
  until shortly before expiry and refreshed once on a 401. The model never sees or sets `Authorization`.
