# OpenapiClient::BatchImportMetadata

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **company_user_guid** | **String** |  | [optional] |
| **created_at** | **Time** |  | [optional] |
| **updated_at** | **Time** |  | [optional] |
| **template_id** | **String** |  | [optional] |
| **batch_id** | **String** |  | [optional] |
| **filename** | **String** |  | [optional] |
| **document_type** | [**DocumentTypes**](DocumentTypes.md) |  | [optional] |
| **status** | [**BatchImportStatus**](BatchImportStatus.md) |  | [optional] |
| **document_count** | **Integer** |  | [optional] |
| **success_count** | **Integer** |  | [optional] |
| **failed_count** | **Integer** |  | [optional] |
| **s3_key** | **String** |  | [optional] |
| **user_id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **is_viewed** | **Boolean** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::BatchImportMetadata.new(
  company_user_guid: null,
  created_at: null,
  updated_at: null,
  template_id: null,
  batch_id: null,
  filename: null,
  document_type: null,
  status: null,
  document_count: null,
  success_count: null,
  failed_count: null,
  s3_key: null,
  user_id: null,
  company_id: null,
  is_viewed: null
)
```

