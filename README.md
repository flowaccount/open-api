[![ci](https://github.com/flowaccount/open-api/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/flowaccount/open-api/actions/workflows/ci.yml)
[![MCP spec snapshot vs live](https://github.com/flowaccount/open-api/actions/workflows/spec-drift.yml/badge.svg?branch=main&event=schedule)](https://github.com/flowaccount/open-api/actions/workflows/spec-drift.yml)
[![libs/api-spec vs live](https://github.com/flowaccount/open-api/actions/workflows/api-spec-drift.yml/badge.svg?branch=main&event=schedule)](https://github.com/flowaccount/open-api/actions/workflows/api-spec-drift.yml)

> **Spec drift.** The live API is described by https://developers.flowaccount.com/swagger.yml.
> The two spec-drift badges are checked daily against it. `libs/api-spec` (used below for the SDKs)
> is the 2022 v3-alpha draft and is red until the SDKs move to the live spec; the job summary lists
> what differs. `libs/api-mcp/spec/openapi.yaml` should always be green
> (`nx run api-mcp:spec-drift`, fix with `uv run --script libs/api-mcp/src/spec_drift.py --update`).

# How to generate open-api sdk for different client-side languages

First off, we use an nx-plugin called `@trumbitta/nx-plugin-openapi` to help us utilize the [open-api-generator](https://openapi-generator.tech/docs/generators/) in order to generate client sdk from `swagger.json` file

The swagger file is kept here --> `libs\api-spec\src\api-spec.openapi.json`

please make sure you replace the servers inside the json or re-check if its correct!

```json
 "servers": [
    {
      "url": "https://openapi.flowaccount.com/sandbox",
      "description": "The sandbox server"
    },
    {
      "url": "https://openapi.flowaccount.com/v3-alpha",
      "description": "The prod server"
    }
  ],
```

Currently we are setup to generate these sdk, right or wrong still have to be tested.

![currently-supported-sdk](image.png)

Before doing anything! run `yarn --frozen-lockfile`

## Example for generating typescript-axios sdk

you simply need to run `yarn nx run api-typescript-axios:custom-generate-sources` and the source will be generated into `libs\api-typescript-axios\src\` folder.

If you want to publish and have the permission to, you simply login into and publish npm using CLI or GUI after fixing the `libs\api-typescript-axios\package.json` file to a new version.