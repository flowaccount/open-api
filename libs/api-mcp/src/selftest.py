#!/usr/bin/env -S uv run --script
# /// script
# requires-python = ">=3.10"
# dependencies = ["fastmcp>=3,<4", "httpx", "pyyaml"]
# ///
"""
Offline check of server.py against a fake FlowAccount API. No credentials, no network
needed (uses the bundled snapshot spec/openapi.yaml).

  uv run --script libs/api-mcp/src/selftest.py
"""
import asyncio
import sys
from pathlib import Path

import httpx

sys.path.insert(0, str(Path(__file__).parent))
import server  # noqa: E402

BASE = server.BASE_URLS["sandbox"]
calls = {"token": 0, "api": []}


def fake_flowaccount(request: httpx.Request) -> httpx.Response:
    if request.url.path.endswith("/token"):
        calls["token"] += 1
        form = dict(x.split("=", 1) for x in request.content.decode().split("&"))
        assert form["grant_type"] == "client_credentials", form
        assert form["client_id"] == "id-acme", form
        return httpx.Response(200, json={"access_token": f"tok{calls['token']}", "expires_in": 3600})
    auth = request.headers.get("authorization")
    calls["api"].append((request.method, request.url.path, auth))
    calls.setdefault("query", []).append(dict(request.url.params))
    if auth == "Bearer tok1" and request.url.path.endswith("/company/info"):
        return httpx.Response(401)  # simulate an expired token once
    return httpx.Response(200, json={"status": True, "data": {"path": request.url.path}})


async def main():
    from fastmcp import Client

    creds = {"client_id": "id-acme", "client_secret": "s", "environment": "sandbox"}
    http = httpx.AsyncClient(
        base_url=BASE,
        auth=server.ClientCredentialsAuth(f"{BASE}/token", creds),
        transport=httpx.MockTransport(fake_flowaccount),
    )
    spec = server.prepare_spec(server.load_spec(str(server.LOCAL_SPEC)), allow_write=False)
    mcp = server.build_server(spec, http, name="selftest")

    async with Client(mcp) as c:
        tools = {t.name: t for t in await c.list_tools()}
        assert "list_tax_invoices" in tools and "get_company_info" in tools
        assert not any(n.startswith(("post_", "put_", "delete_")) for n in tools), "writes leaked"
        assert all("Authorization" not in str(t.inputSchema) for t in tools.values()), "auth param leaked"
        assert tools["list_tax_invoices"].annotations.readOnlyHint is True
        assert "startDate" in str(tools["list_tax_invoices"].inputSchema), "document list filters missing"
        assert "startDate" not in str(tools["list_contacts"].inputSchema), "filters on a non-document list"

        await c.call_tool("list_tax_invoices", {"currentPage": 1, "pageSize": 5, "startDate": "2026-08-01"})
        await c.call_tool("get_company_info", {})  # 401 -> refresh -> retry

    assert calls["token"] == 2, calls
    assert calls["api"][0] == ("GET", "/test/tax-invoices", "Bearer tok1"), calls["api"]
    assert calls["query"][0].get("startDate") == "2026-08-01", calls["query"]
    assert calls["api"][-1] == ("GET", "/test/company/info", "Bearer tok2"), calls["api"]
    print(f"ok: {len(tools)} read-only tools, bearer injected, date filters, 401 refresh works")


asyncio.run(main())
