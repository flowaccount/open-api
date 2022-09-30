# OpenapiClient::InlineDocumentAllOf

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **discount_type** | **Integer** |  | [optional] |
| **use_inline_discount** | **Boolean** |  | [optional] |
| **use_inline_vat** | **Boolean** |  | [optional] |
| **exempt_amount** | **Float** |  | [optional] |
| **vatable_amount** | **Float** |  | [optional] |
| **items** | [**Array&lt;InlineProductItem&gt;**](InlineProductItem.md) |  | [optional] |
| **document_reference** | [**Array&lt;UpgradeDocument&gt;**](UpgradeDocument.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::InlineDocumentAllOf.new(
  discount_type: null,
  use_inline_discount: null,
  use_inline_vat: null,
  exempt_amount: null,
  vatable_amount: null,
  items: null,
  document_reference: null
)
```

