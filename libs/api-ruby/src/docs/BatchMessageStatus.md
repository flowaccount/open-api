# OpenapiClient::BatchMessageStatus

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **company_user_guid** | **String** |  | [optional] |
| **created_at** | **Time** |  | [optional] |
| **updated_at** | **Time** |  | [optional] |
| **batch_id** | **String** |  | [optional] |
| **status** | [**BatchImportStatus**](BatchImportStatus.md) |  | [optional] |
| **message_id** | **String** |  | [optional] |
| **failed_reason** | **String** |  | [optional] |
| **payload** | **String** |  | [optional] |
| **retry_count** | **Integer** |  | [optional] |
| **document_serial** | **String** |  | [optional] |
| **sql_id** | **Integer** |  | [optional] |
| **row_index** | **Integer** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::BatchMessageStatus.new(
  company_user_guid: null,
  created_at: null,
  updated_at: null,
  batch_id: null,
  status: null,
  message_id: null,
  failed_reason: null,
  payload: null,
  retry_count: null,
  document_serial: null,
  sql_id: null,
  row_index: null
)
```

