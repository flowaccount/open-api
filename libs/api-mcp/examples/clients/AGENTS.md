## FlowAccount companies available to you

Each MCP server below is the FlowAccount AI Connector logged into ONE company.
Tools are namespaced by server name (for example `mcp__flowaccount-acme__sales__list_tax_invoices`).
Pick the server whose company the user means. If the user does not say which company,
ask, unless the request obviously spans all of them (for example "compare AR aging across companies").

| Server name | Company | Note |
|---|---|---|
| `flowaccount-acme` | Acme Trading Co., Ltd. | Main operating company (VAT registered) |
| `flowaccount-acme-holding` | Acme Holding Co., Ltd. | Holding company, accrual basis |
| `flowaccount-sandbox` | Acme Trading (sandbox copy) | Sandbox company; add "url" here to override the server URL for one company |

Rules:
- Never mix numbers from two companies in one figure unless the user asked for a comparison.
- Always say which company a number came from.
- If a server reports it is not authenticated, tell the user to log that server in; do not fall back to another company.

## FlowAccount Open API servers

These are local servers built from the public FlowAccount Open API, one per company,
using that company's API credentials. Tool names are plain verbs on documents
(`list_tax_invoices`, `get_tax_invoice`, `list_contacts`, `get_company_info`).
Same rules as above: one server is one company.

| Server name | Company | Environment | Mode |
|---|---|---|---|
| `flowaccount-acme-api` | Acme Trading Co., Ltd. | production | read-only |
| `flowaccount-sandbox-api` | Acme Trading (sandbox copy) | sandbox | read-write |

Prefer the AI Connector server for questions it covers; use the `-api` server when the user
asks for raw documents or when the connector is not logged in. Never create, edit or delete
documents unless the user asked for that specific change.
