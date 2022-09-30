# OpenapiClient::BatchImportPayload

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **simple_documents** | [**Array&lt;SimpleDocument&gt;**](SimpleDocument.md) |  | [optional] |
| **batch_id** | **String** |  | [optional] |
| **file_name** | **String** |  | [optional] |
| **batch_count** | **Integer** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::BatchImportPayload.new(
  simple_documents: null,
  batch_id: null,
  file_name: null,
  batch_count: null
)
```

