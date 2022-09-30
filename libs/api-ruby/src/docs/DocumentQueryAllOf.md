# OpenapiClient::DocumentQueryAllOf

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **total_value** | **Float** |  | [optional] |
| **total_vat** | **Float** |  | [optional] |
| **is_received** | **Boolean** |  | [optional] |
| **document_type** | [**Array&lt;DocumentTypes&gt;**](DocumentTypes.md) |  | [optional] |
| **revenue** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **expenses** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **previous_months** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **previous_years** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **custom_document_models** | [**Array&lt;CustomDocumentModel&gt;**](CustomDocumentModel.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::DocumentQueryAllOf.new(
  total_value: null,
  total_vat: null,
  is_received: null,
  document_type: null,
  revenue: null,
  expenses: null,
  previous_months: null,
  previous_years: null,
  custom_document_models: null
)
```

