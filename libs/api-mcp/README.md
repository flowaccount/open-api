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

## Tools

Read-only by default: 26 GET tools such as `list_tax_invoices`, `get_tax_invoice`,
`list_receipts`, `list_expenses`, `list_contacts`, `list_products`, `get_company_info`,
`get_bank_accounts`. Document lists take `currentPage`, `pageSize`, `sortBy`, `filter`, plus the v3
filters `searchString`, `startDate`, `endDate` (`YYYY-MM-DD`).

`--allow-write` (or `"allow_write": true` in the profile) also exposes create / edit / status /
payment / delete tools (`post_tax_invoices`, `put_tax_invoices_by_id`, ...). Those writes are real,
so try them on sandbox first. GET tools carry `readOnlyHint` and DELETE tools carry `destructiveHint`.

```bash
nx run api-mcp:list-tools   # or: uv run --script libs/api-mcp/src/server.py --list-tools [--allow-write]
nx run api-mcp:test         # offline selftest against a fake API
```

## How it works

- **Spec**: `spec/openapi-v1.yaml` is the published Open API spec (the one
  [flowaccount-openapi-sdk](https://github.com/flowaccount/flowaccount-openapi-sdk) is built from).
  Override it with `--spec <path|url>` or `FLOWACCOUNT_OPENAPI_SPEC`. When the script is run from a URL
  rather than a checkout, the spec is fetched from this repo and cached for a day.
- **Base URL**: `https://openapi.flowaccount.com/v1` (production) and `/test` (sandbox). `/v1` is the
  API Gateway stage. It routes to the v3 Open API service, so these are v3 endpoints.
  `libs/api-spec` is the older 2022 v3-alpha draft and is not used here.
- **Auth**: `client_credentials` grant at `{base}/token` (scope `flowaccount-api`). The token is cached
  until shortly before expiry and refreshed once on a 401. The model never sees or sets `Authorization`.
