# OpenapiClient::Gallery

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **name** | **String** |  | [optional] |
| **description** | **String** |  | [optional] |
| **product_list** | [**Array&lt;ProductList&gt;**](ProductList.md) |  | [optional] |
| **media** | [**Array&lt;Media&gt;**](Media.md) |  | [optional] |
| **journal_entry** | [**Array&lt;JournalEntry&gt;**](JournalEntry.md) |  | [optional] |
| **receivable_invoice** | [**Array&lt;ReceivableInvoice&gt;**](ReceivableInvoice.md) |  | [optional] |
| **supplier_invoice** | [**Array&lt;SupplierInvoice&gt;**](SupplierInvoice.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Gallery.new(
  id: null,
  name: null,
  description: null,
  product_list: null,
  media: null,
  journal_entry: null,
  receivable_invoice: null,
  supplier_invoice: null
)
```

