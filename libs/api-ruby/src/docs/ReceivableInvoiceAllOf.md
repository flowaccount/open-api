# OpenapiClient::ReceivableInvoiceAllOf

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **contact_id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **status** | [**ReceivableInvoiceStatus**](ReceivableInvoiceStatus.md) |  | [optional] |
| **created_on** | **Time** |  |  |
| **modified_on** | **Time** |  |  |
| **published_on** | **Time** |  |  |
| **document_date** | **Time** |  |  |
| **published** | **Boolean** |  | [optional] |
| **approved** | **Boolean** |  | [optional] |
| **approved_by** | **Integer** |  | [optional] |
| **approved_by_client_id** | **Integer** |  | [optional] |
| **approved_image_url** | **String** |  | [optional] |
| **document_serial** | **String** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **name** | **String** |  | [optional] |
| **value** | **Float** |  | [optional] |
| **due_date** | **Time** |  | [optional] |
| **expected_date** | **Time** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **document_id** | **String** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **vat_rate** | **Integer** |  | [optional] |
| **internal_notes** | **String** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **is_vat_inclusive** | **Boolean** |  | [optional] |
| **sales_id** | **Integer** |  | [optional] |
| **sales_name** | **String** |  | [optional] |
| **rounding_adjustment** | **Float** |  | [optional] |
| **is_inline_discount** | **Boolean** |  | [optional][default to false] |
| **is_inline_vat** | **Boolean** |  | [optional][default to false] |
| **tax** | **Float** |  | [optional] |
| **document_serial_no_prefix** | **Integer** |  | [optional] |
| **vat_value** | **Float** |  | [optional] |
| **reset_transaction_id** | **Integer** |  | [optional] |
| **contact** | [**OneOfContact**](OneOfContact.md) |  | [optional] |
| **approved_by_client** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **created_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **approved_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **sales** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **inline_vat_value** | **Float** |  | [optional] |
| **inline_discount_value** | **Float** |  | [optional] |
| **rule_compile_status** | [**RuleCompileStatus**](RuleCompileStatus.md) |  | [optional] |
| **running_number_type** | **Integer** |  | [optional] |
| **running_modified_on** | **Time** |  | [optional] |
| **exempt_amount** | **Float** |  | [optional] |
| **vatable_amount** | **Float** |  | [optional] |
| **total_after_discount** | **Float** |  | [optional] |
| **sub_total** | **Float** |  | [optional] |
| **document_references** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **referenced_to_me** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **referenced_by_me** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **status_int** | **Integer** |  | [optional] |
| **is_re_calculate** | **Boolean** |  | [optional] |
| **partial_payment_method** | [**OneOfPartialPaymentMethod**](OneOfPartialPaymentMethod.md) |  | [optional] |
| **vat_amount** | **Float** |  | [optional] |
| **is_migrate** | **Boolean** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::ReceivableInvoiceAllOf.new(
  id: null,
  contact_id: null,
  company_id: null,
  status: null,
  created_on: null,
  modified_on: null,
  published_on: null,
  document_date: null,
  published: null,
  approved: null,
  approved_by: null,
  approved_by_client_id: null,
  approved_image_url: null,
  document_serial: null,
  remarks: null,
  name: null,
  value: null,
  due_date: null,
  expected_date: null,
  created_by: null,
  document_id: null,
  is_delete: null,
  vat_rate: null,
  internal_notes: null,
  gallery_id: null,
  is_vat_inclusive: null,
  sales_id: null,
  sales_name: null,
  rounding_adjustment: null,
  is_inline_discount: null,
  is_inline_vat: null,
  tax: null,
  document_serial_no_prefix: null,
  vat_value: null,
  reset_transaction_id: null,
  contact: null,
  approved_by_client: null,
  company: null,
  created_by_user: null,
  approved_by_user: null,
  sales: null,
  gallery: null,
  inline_vat_value: null,
  inline_discount_value: null,
  rule_compile_status: null,
  running_number_type: null,
  running_modified_on: null,
  exempt_amount: null,
  vatable_amount: null,
  total_after_discount: null,
  sub_total: null,
  document_references: null,
  referenced_to_me: null,
  referenced_by_me: null,
  status_int: null,
  is_re_calculate: null,
  partial_payment_method: null,
  vat_amount: null,
  is_migrate: null
)
```

