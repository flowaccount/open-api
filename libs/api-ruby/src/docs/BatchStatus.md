# OpenapiClient::BatchStatus

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **messages** | [**Array&lt;BatchMessageStatus&gt;**](BatchMessageStatus.md) |  | [optional] |
| **metadata** | [**OneOfBatchImportMetadata**](OneOfBatchImportMetadata.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::BatchStatus.new(
  messages: null,
  metadata: null
)
```

