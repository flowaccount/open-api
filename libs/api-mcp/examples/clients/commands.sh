#!/usr/bin/env bash
# One-liners per client. Run the block for the client you use.
# After adding, each entry needs its own OAuth login, where you pick the company.
set -e

# --- Claude Code (project scope; use -s user for global) ---
claude mcp add --transport http flowaccount-acme https://mcp.flowaccount.com/mcp   # Acme Trading Co., Ltd.
claude mcp add --transport http flowaccount-acme-holding https://mcp.flowaccount.com/mcp   # Acme Holding Co., Ltd.
claude mcp add --transport http flowaccount-sandbox https://mcp.flowaccount.com/mcp   # Acme Trading (sandbox copy)

# --- Grok CLI ---
grok mcp add --transport http flowaccount-acme https://mcp.flowaccount.com/mcp   # Acme Trading Co., Ltd.
grok mcp add --transport http flowaccount-acme-holding https://mcp.flowaccount.com/mcp   # Acme Holding Co., Ltd.
grok mcp add --transport http flowaccount-sandbox https://mcp.flowaccount.com/mcp   # Acme Trading (sandbox copy)

# --- OpenAI Codex CLI ---
codex mcp add flowaccount-acme --url https://mcp.flowaccount.com/mcp   # Acme Trading Co., Ltd.
codex mcp add flowaccount-acme-holding --url https://mcp.flowaccount.com/mcp   # Acme Holding Co., Ltd.
codex mcp add flowaccount-sandbox --url https://mcp.flowaccount.com/mcp   # Acme Trading (sandbox copy)
codex mcp login flowaccount-acme
codex mcp login flowaccount-acme-holding
codex mcp login flowaccount-sandbox

# --- Gemini CLI ---
gemini mcp add --transport http flowaccount-acme https://mcp.flowaccount.com/mcp   # Acme Trading Co., Ltd.
gemini mcp add --transport http flowaccount-acme-holding https://mcp.flowaccount.com/mcp   # Acme Holding Co., Ltd.
gemini mcp add --transport http flowaccount-sandbox https://mcp.flowaccount.com/mcp   # Acme Trading (sandbox copy)

# --- Open API servers (local stdio, credentials from ~/.config/flowaccount/openapi.json) ---
# Gemini CLI, Grok CLI, pi: use their config file instead (see libs/api-mcp/README.md).
claude mcp add flowaccount-acme-api -- uv run --script /path/to/open-api/libs/api-mcp/src/server.py --profile flowaccount-acme-api
codex mcp add flowaccount-acme-api -- uv run --script /path/to/open-api/libs/api-mcp/src/server.py --profile flowaccount-acme-api
claude mcp add flowaccount-sandbox-api -- uv run --script /path/to/open-api/libs/api-mcp/src/server.py --profile flowaccount-sandbox-api --allow-write
codex mcp add flowaccount-sandbox-api -- uv run --script /path/to/open-api/libs/api-mcp/src/server.py --profile flowaccount-sandbox-api --allow-write
