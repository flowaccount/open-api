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
import contextlib
import io
import json
import os
import sys
import tempfile
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


async def rejected_client():
    """The gateway rejects bad credentials with HTTP 200 + {"error": "invalid_client"}."""
    bad = httpx.AsyncClient(
        base_url=BASE,
        auth=server.ClientCredentialsAuth(f"{BASE}/token", {"client_id": "x", "client_secret": "x"}),
        transport=httpx.MockTransport(lambda r: httpx.Response(200, json={"error": "invalid_client"})),
    )
    try:
        await bad.get("/company/info")
    except RuntimeError as e:
        assert "invalid_client" in str(e) and "client_id" in str(e), e
    else:
        raise AssertionError("bad credentials were not reported")


async def unreadable_token_reply():
    """A gateway error page (not JSON) is reported with its status, not a JSON traceback."""
    bad = httpx.AsyncClient(
        base_url=BASE,
        auth=server.ClientCredentialsAuth(f"{BASE}/token", {"client_id": "x", "client_secret": "x"}),
        transport=httpx.MockTransport(lambda r: httpx.Response(502, text="Bad Gateway")),
    )
    try:
        await bad.get("/company/info")
    except RuntimeError as e:
        assert "HTTP 502" in str(e), e
    else:
        raise AssertionError("gateway error was not reported")


def exits(fn, *args) -> bool:
    try:
        fn(*args)
    except SystemExit:
        return True
    return False


def credentials():
    tmp = Path(tempfile.mkdtemp())
    path = tmp / "openapi.json"
    path.write_text(json.dumps({
        "acme": {"client_id": "file-id", "client_secret": "s"},
        "no-secret": {"client_id": "x"},
        "staging": {"client_id": "x", "client_secret": "s", "environment": "staging"},
    }))
    saved = dict(os.environ)
    try:
        os.environ.update({"FLOWACCOUNT_CREDENTIALS": str(path), "FLOWACCOUNT_CLIENT_ID": "env-id",
                           "FLOWACCOUNT_CLIENT_SECRET": "env-s", "FLOWACCOUNT_BASE_URL": "https://example.test/v1"})
        creds = server.resolve_credentials("acme")
        assert creds["client_id"] == "file-id", "a stray env var must not override --profile"
        assert creds["environment"] == "production" and "base_url" not in creds, creds

        creds = server.resolve_credentials(None)
        assert creds["client_id"] == "env-id" and creds["base_url"] == "https://example.test/v1", creds

        assert exits(server.resolve_credentials, "missing"), "unknown profile accepted"
        assert exits(server.resolve_credentials, "no-secret"), "profile without a secret accepted"
        assert exits(server.resolve_credentials, "staging"), "unknown environment accepted"
        del os.environ["FLOWACCOUNT_CLIENT_SECRET"]
        assert exits(server.resolve_credentials, None), "env without a secret accepted"
        os.environ["FLOWACCOUNT_CREDENTIALS"] = str(tmp / "nope.json")
        assert exits(server.resolve_credentials, "acme"), "missing credentials file accepted"
    finally:
        os.environ.clear()
        os.environ.update(saved)
    print("ok: --profile wins over env, every bad credential setup exits")


def spec_loading():
    tmp = Path(tempfile.mkdtemp())
    saved_dir, saved_get = server.CACHE_DIR, server.httpx.get
    fetched = []

    def online(url, **kw):
        fetched.append(url)
        return httpx.Response(200, text="openapi: 3.0.0\ninfo: {title: live}\n", request=httpx.Request("GET", url))

    def offline(url, **kw):
        fetched.append(url)
        raise httpx.ConnectError("offline")

    try:
        server.CACHE_DIR = tmp / "cache"
        url = "https://example.test/spec.yml"
        server.httpx.get = online
        assert server.load_spec(url)["info"]["title"] == "live"
        server.httpx.get = offline
        assert server.load_spec(url)["info"]["title"] == "live" and len(fetched) == 1, "fresh cache not used"

        cached = next(server.CACHE_DIR.iterdir())
        os.utime(cached, (0, 0))  # make the cache a day old
        assert server.load_spec(url)["info"]["title"] == "live" and len(fetched) == 2, "stale cache not used"

        cached.unlink()
        assert exits(server.load_spec, url), "unreachable spec with no cache did not exit"
        snapshot = server.load_spec(server.SPEC_URL)
        assert len(snapshot["paths"]) > 50, "bundled snapshot not used when the live spec is unreachable"
    finally:
        server.CACHE_DIR, server.httpx.get = saved_dir, saved_get
    print("ok: spec fetch, fresh cache, stale cache, bundled snapshot, hard failure")


def naming():
    assert server.tool_name("post", "/tax-invoices", {}) == "post_tax_invoices"
    assert server.tool_name("put", "/tax-invoices/{id}", {}) == "put_tax_invoices_by_id"
    assert server.tool_name("get", "/boxes/{id}", {}) == "get_box"
    assert server.tool_name("get", "/company/info", {}) == "get_company_info"
    assert server.singular("info") == "info"

    spec = {
        "paths": {
            "/token": {"post": {}},
            "/things": {
                "parameters": [],  # path-level key, not an operation
                "get": {"parameters": [{"name": "Authorization", "in": "header"}, {"name": "q", "in": "query"}]},
                "post": {},
            },
            "/things/": {"get": {}},  # same tool name as /things -> must get a suffix
        },
        "security": [{"bearer": []}],
        "components": {"schemas": {"T": {"properties": {"a": {"type": "string", "required": True}}}},
                       "parameters": {"P": {"name": "p", "in": "query", "required": True}}},
    }
    out = server.prepare_spec(spec, allow_write=True)
    assert "/token" not in out["paths"] and "security" not in out
    names = [out["paths"][p][m]["operationId"] for p in out["paths"] for m in ("get", "post") if m in out["paths"][p]]
    assert names == ["get_things", "post_things", "get_things_"], names
    assert [p["name"] for p in out["paths"]["/things"]["get"]["parameters"]] == ["q"]
    assert "required" not in out["components"]["schemas"]["T"]["properties"]["a"]
    assert out["components"]["parameters"]["P"]["required"] is True, "parameter `required` must stay"

    full = server.prepare_spec(server.load_spec(str(server.LOCAL_SPEC)), allow_write=True)
    ops = [op for item in full["paths"].values() for m, op in item.items() if m in server.HTTP_METHODS]
    assert len(ops) == 166 and len({op["operationId"] for op in ops}) == 166, len(ops)
    print("ok: write names, duplicate names, auth header and boolean required dropped, 166 unique write-mode tools")


def entrypoint():
    saved_argv, saved_build, saved_env = sys.argv, server.build_server, dict(os.environ)
    ran = {}

    class FakeServer:
        def run(self, **kw):
            ran["run"] = True

    def fake_build(spec, client, name):
        ran.update(base=str(client.base_url), name=name,  # httpx always ends base_url with "/"
                   writes=any("post" in item for item in spec["paths"].values()))
        return FakeServer()

    tmp = Path(tempfile.mkdtemp())
    (tmp / "c.json").write_text(json.dumps({"acme": {
        "client_id": "i", "client_secret": "s", "environment": "sandbox",
        "allow_write": True, "base_url": "https://example.test/v1/"}}))
    try:
        sys.argv = ["server.py", "--list-tools", "--spec", str(server.LOCAL_SPEC)]
        out = io.StringIO()
        with contextlib.redirect_stdout(out):
            server.main()
        assert len(out.getvalue().splitlines()) == 34, out.getvalue()[:200]

        os.environ["FLOWACCOUNT_CREDENTIALS"] = str(tmp / "c.json")
        server.build_server = fake_build
        sys.argv = ["server.py", "--profile", "acme", "--spec", str(server.LOCAL_SPEC)]
        with contextlib.redirect_stderr(io.StringIO()):
            server.main()
        assert ran == {"base": "https://example.test/v1/", "name": "FlowAccount Open API (acme)",
                       "writes": True, "run": True}, ran
    finally:
        sys.argv, server.build_server = saved_argv, saved_build
        os.environ.clear()
        os.environ.update(saved_env)
    print("ok: --list-tools prints 34 tools; profile allow_write and base_url override reach the server")


asyncio.run(main())
asyncio.run(rejected_client())
asyncio.run(unreadable_token_reply())
print("ok: rejected credentials and gateway errors give a clear error")
credentials()
spec_loading()
naming()
entrypoint()
