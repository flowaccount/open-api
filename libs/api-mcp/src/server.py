#!/usr/bin/env -S uv run --script
# /// script
# requires-python = ">=3.10"
# dependencies = ["fastmcp>=3,<4", "httpx", "pyyaml"]
# ///
"""
FlowAccount Open API as a local MCP server (stdio). One process = one company.

  uv run --script libs/api-mcp/src/server.py --profile flowaccount-acme-api
  uv run --script libs/api-mcp/src/server.py --list-tools        # no credentials needed

Why this exists
---------------
The hosted AI Connector (https://mcp.flowaccount.com/mcp) logs in with OAuth.
The FlowAccount Open API (https://openapi.flowaccount.com) uses a client_id /
client_secret pair that is issued per company. This server wraps that API
(spec: developers.flowaccount.com/swagger.yml) as MCP tools, so any MCP client can use those
credentials too. One process (one MCP server name in the client) per company.

"/v1" is the public gateway stage; behind it every call is served by the v3 Open API.

Credentials (first match wins)
------------------------------
1. --profile NAME   -> entry NAME in the credentials file
                       ($FLOWACCOUNT_CREDENTIALS, default ~/.config/flowaccount/openapi.json)
2. environment      -> FLOWACCOUNT_CLIENT_ID, FLOWACCOUNT_CLIENT_SECRET,
                       FLOWACCOUNT_ENVIRONMENT (production | sandbox), FLOWACCOUNT_BASE_URL

--profile wins over the environment on purpose: a stray global env var must
never make every company entry silently log into the same company.

Safety
------
Read-only by default: only GET operations become tools. Pass --allow-write
(or set "allow_write": true in the profile) to expose create / edit / status /
delete operations as well.
"""
from __future__ import annotations

import argparse
import json
import os
import re
import sys
import time
from pathlib import Path

import httpx
import yaml

# The live spec behind https://developers.flowaccount.com/api-reference. Its paths are the v3
# service's routes as the gateway exposes them. libs/api-spec is the 2022 v3-alpha draft
# (/{culture}/..., simple-document, status-key) and no longer matches.
SPEC_URL = "https://developers.flowaccount.com/swagger.yml"
# Snapshot of SPEC_URL, used when it can't be fetched and nothing is cached (and by selftest.py).
LOCAL_SPEC = Path(__file__).resolve().parents[1] / "spec" / "openapi.yaml"
# The spec's own servers list is not used: these match the published developer docs.
BASE_URLS = {
    "production": "https://openapi.flowaccount.com/v1",
    "sandbox": "https://openapi.flowaccount.com/test",
}
DEFAULT_CREDENTIALS = Path.home() / ".config" / "flowaccount" / "openapi.json"
CACHE_DIR = Path(os.environ.get("XDG_CACHE_HOME", Path.home() / ".cache")) / "flowaccount-mcp"
CACHE_TTL = 24 * 3600
HTTP_METHODS = ("get", "post", "put", "patch", "delete")


def die(msg: str) -> None:
    # stdout belongs to the MCP protocol; diagnostics go to stderr.
    print(f"flowaccount-openapi: {msg}", file=sys.stderr)
    sys.exit(1)


# ----------------------------------------------------------------------------
# Spec
# ----------------------------------------------------------------------------
def load_spec(source: str) -> dict:
    """Local path, or URL cached for a day (offline: stale cache, then the bundled snapshot)."""
    if not source.startswith(("http://", "https://")):
        return yaml.safe_load(Path(source).expanduser().read_text(encoding="utf-8"))

    cached = CACHE_DIR / (re.sub(r"[^A-Za-z0-9.]+", "_", source)[-120:])
    if cached.exists() and time.time() - cached.stat().st_mtime < CACHE_TTL:
        return yaml.safe_load(cached.read_text(encoding="utf-8"))
    try:
        r = httpx.get(source, timeout=30, follow_redirects=True)
        r.raise_for_status()
        CACHE_DIR.mkdir(parents=True, exist_ok=True)
        cached.write_text(r.text, encoding="utf-8")
        return yaml.safe_load(r.text)
    except httpx.HTTPError as e:
        if cached.exists():
            return yaml.safe_load(cached.read_text(encoding="utf-8"))
        if source == SPEC_URL and LOCAL_SPEC.exists():
            print(f"flowaccount-openapi: cannot fetch {source} ({e}); using bundled snapshot", file=sys.stderr)
            return yaml.safe_load(LOCAL_SPEC.read_text(encoding="utf-8"))
        die(f"cannot fetch spec {source}: {e}")


def singular(word: str) -> str:
    if word.endswith("xes"):
        return word[:-2]
    if word.endswith("s"):
        return word[:-1]
    return word


def tool_name(method: str, path: str, op: dict) -> str:
    """GET /tax-invoices -> list_tax_invoices, GET /tax-invoices/{id} -> get_tax_invoice."""
    parts = [p for p in path.strip("/").split("/") if p]
    words = [p.replace("-", "_") for p in parts if not p.startswith("{")]
    ends_with_param = bool(parts) and parts[-1].startswith("{")
    if method == "get":
        paged = any(p.get("name") == "currentPage" for p in op.get("parameters", []))
        if ends_with_param and len(words) == 1:
            return f"get_{singular(words[0])}"
        return ("list_" if paged else "get_") + "_".join(words)
    # Writes keep the HTTP verb so the model sees exactly what it is about to do.
    suffix = "_by_id" if ends_with_param else ""
    return f"{method}_{'_'.join(words)}{suffix}"


def drop_boolean_required(node) -> None:
    """Remove Swagger-2 style `required: true` on schema properties, which OpenAPI 3 rejects.

    Parameters and request bodies legitimately use a boolean `required`, so those are kept.
    """
    if isinstance(node, dict):
        if isinstance(node.get("required"), bool) and "in" not in node and "content" not in node:
            del node["required"]
        for value in node.values():
            drop_boolean_required(value)
    elif isinstance(node, list):
        for value in node:
            drop_boolean_required(value)


def prepare_spec(spec: dict, allow_write: bool) -> dict:
    """Name every operation, drop the auth header param, and remove writes unless allowed."""
    seen: set[str] = set()
    for path in list(spec.get("paths", {})):
        item = spec["paths"][path]
        for method in list(item):
            if method not in HTTP_METHODS:
                continue
            op = item[method]
            if path == "/token" or (method != "get" and not allow_write):
                del item[method]
                continue
            # The server injects Authorization itself; the model must never see or set it.
            op["parameters"] = [
                p for p in op.get("parameters", [])
                if not (p.get("in") == "header" and p.get("name", "").lower() in ("authorization", "content-type"))
            ]
            name = tool_name(method, path, op)
            while name in seen:
                name += "_"
            seen.add(name)
            op["operationId"] = name
        if not any(m in item for m in HTTP_METHODS):
            del spec["paths"][path]
    spec.pop("security", None)
    drop_boolean_required(spec.get("components", {}))
    return spec


# ----------------------------------------------------------------------------
# Credentials and auth
# ----------------------------------------------------------------------------
def resolve_credentials(profile: str | None) -> dict:
    if profile:
        path = Path(os.environ.get("FLOWACCOUNT_CREDENTIALS", DEFAULT_CREDENTIALS)).expanduser()
        if not path.exists():
            die(f"profile {profile!r} requested but {path} does not exist (template: libs/api-mcp/credentials.example.json)")
        entry = json.loads(path.read_text(encoding="utf-8")).get(profile)
        if not entry:
            die(f"profile {profile!r} not found in {path}")
        creds = dict(entry)
    else:
        creds = {
            "client_id": os.environ.get("FLOWACCOUNT_CLIENT_ID"),
            "client_secret": os.environ.get("FLOWACCOUNT_CLIENT_SECRET"),
            "environment": os.environ.get("FLOWACCOUNT_ENVIRONMENT", "production"),
            "base_url": os.environ.get("FLOWACCOUNT_BASE_URL"),
        }
    if not creds.get("client_id") or not creds.get("client_secret"):
        die("missing client_id / client_secret (use --profile or FLOWACCOUNT_CLIENT_ID / FLOWACCOUNT_CLIENT_SECRET)")
    env = creds.setdefault("environment", "production")
    if env not in BASE_URLS:
        die(f"environment must be one of {sorted(BASE_URLS)}, got {env!r}")
    return creds


class ClientCredentialsAuth(httpx.Auth):
    """Fetches a bearer token from {base}/token, caches it, and retries once on 401."""

    def __init__(self, token_url: str, creds: dict):
        self.token_url = token_url
        self.form = {
            "grant_type": creds.get("grant_type", "client_credentials"),
            "scope": creds.get("scope", "flowaccount-api"),
            "client_id": creds["client_id"],
            "client_secret": creds["client_secret"],
        }
        self.token: str | None = None
        self.expires_at = 0.0

    def _token_request(self) -> httpx.Request:
        return httpx.Request("POST", self.token_url, data=self.form)

    def _store(self, response: httpx.Response) -> None:
        # The gateway answers a rejected client with HTTP 200 and {"error": "invalid_client"}.
        try:
            body = response.json()
        except ValueError:
            body = {}
        if response.status_code != 200 or "access_token" not in body:
            reason = body.get("error") or f"HTTP {response.status_code}"
            raise RuntimeError(
                f"FlowAccount token request failed ({reason}). "
                "Check client_id / client_secret and the environment (production vs sandbox)."
            )
        self.token = body["access_token"]
        self.expires_at = time.time() + int(body.get("expires_in", 3600)) - 60

    def _fresh(self) -> bool:
        return bool(self.token) and time.time() < self.expires_at

    async def async_auth_flow(self, request):
        if not self._fresh():
            token_response = yield self._token_request()
            await token_response.aread()
            self._store(token_response)
        request.headers["Authorization"] = f"Bearer {self.token}"
        response = yield request
        if response.status_code == 401:
            token_response = yield self._token_request()
            await token_response.aread()
            self._store(token_response)
            request.headers["Authorization"] = f"Bearer {self.token}"
            yield request


# ----------------------------------------------------------------------------
def build_server(spec: dict, client: httpx.AsyncClient, name: str):
    from fastmcp import FastMCP
    from fastmcp.server.providers.openapi import MCPType, RouteMap

    from mcp.types import ToolAnnotations

    def annotate(route, component):
        # Lets clients auto-approve reads and warn on deletes.
        component.annotations = ToolAnnotations(
            readOnlyHint=route.method == "GET",
            destructiveHint=route.method == "DELETE",
        )
        # The spec's response schemas are hand-written and don't always match real payloads
        # (e.g. companyType is an int, documented as a string). Return plain JSON rather than
        # let clients reject valid responses.
        component.output_schema = None

    return FastMCP.from_openapi(
        openapi_spec=spec,
        client=client,
        name=name,
        route_maps=[RouteMap(mcp_type=MCPType.TOOL)],  # every kept route is a tool, never a resource
        mcp_component_fn=annotate,
    )


def main():
    ap = argparse.ArgumentParser(description=__doc__, formatter_class=argparse.RawDescriptionHelpFormatter)
    ap.add_argument("--profile", help="entry in the credentials file (one per company)")
    ap.add_argument("--spec", default=os.environ.get("FLOWACCOUNT_OPENAPI_SPEC", SPEC_URL),
                    help="OpenAPI spec path or URL (default: the live spec from developers.flowaccount.com)")
    ap.add_argument("--allow-write", action="store_true", help="also expose create/edit/status/delete tools")
    ap.add_argument("--list-tools", action="store_true", help="print the tool names and exit (no credentials needed)")
    args = ap.parse_args()

    if args.list_tools:
        spec = prepare_spec(load_spec(args.spec), args.allow_write)
        for path, item in spec["paths"].items():
            for method, op in item.items():
                if method in HTTP_METHODS:
                    print(f"{op['operationId']:<45} {method.upper():<6} {path}")
        return

    creds = resolve_credentials(args.profile)
    allow_write = args.allow_write or bool(creds.get("allow_write"))
    spec = prepare_spec(load_spec(args.spec), allow_write)
    base_url = (creds.get("base_url") or BASE_URLS[creds["environment"]]).rstrip("/")
    client = httpx.AsyncClient(
        base_url=base_url,
        auth=ClientCredentialsAuth(f"{base_url}/token", creds),
        timeout=60,
    )
    label = args.profile or "env"
    mode = "read-write" if allow_write else "read-only"
    print(f"flowaccount-openapi: {label} -> {base_url} ({mode})", file=sys.stderr)
    build_server(spec, client, name=f"FlowAccount Open API ({label})").run(show_banner=False)


if __name__ == "__main__":
    main()
