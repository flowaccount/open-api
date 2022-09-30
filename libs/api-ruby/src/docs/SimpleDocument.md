# OpenapiClient::SimpleDocument

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **record_id** | **Integer** |  | [optional] |
| **contact_code** | **String** |  | [optional] |
| **contact_name** | **String** |  | [optional] |
| **contact_address** | **String** |  | [optional] |
| **contact_tax_id** | **String** |  | [optional] |
| **contact_branch** | **String** |  | [optional] |
| **contact_person** | **String** |  | [optional] |
| **contact_email** | **String** |  | [optional] |
| **contact_number** | **String** |  | [optional] |
| **contact_zip_code** | **String** |  | [optional] |
| **contact_group** | **Integer** |  | [optional] |
| **published_on** | **Time** |  | [optional] |
| **credit_type** | **Integer** |  | [optional] |
| **credit_days** | **Integer** |  | [optional] |
| **due_date** | **Time** |  | [optional] |
| **sales_name** | **String** |  | [optional] |
| **project_name** | **String** |  | [optional] |
| **reference** | **String** |  | [optional] |
| **is_vat_inclusive** | **Boolean** |  | [optional] |
| **use_receipt_deduction** | **Boolean** |  | [optional] |
| **sub_total** | **Float** |  | [optional] |
| **discount_percentage** | **Integer** |  | [optional] |
| **discount_amount** | **Float** |  | [optional] |
| **total_after_discount** | **Float** |  | [optional] |
| **is_vat** | **Boolean** |  | [optional] |
| **vat_amount** | **Float** |  | [optional] |
| **grand_total** | **Float** |  | [optional] |
| **document_show_withholding_tax** | **Boolean** |  | [optional] |
| **document_withholding_tax_percentage** | **Integer** |  | [optional] |
| **document_withholding_tax_amount** | **Float** |  | [optional] |
| **document_deduction_type** | **Integer** |  | [optional] |
| **document_deduction_amount** | **Float** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **internal_notes** | **String** |  | [optional] |
| **show_signature_or_stamp** | **Boolean** |  | [optional] |
| **document_structure_type** | **String** |  | [optional] |
| **external_id** | **String** |  | [optional] |
| **sale_and_purchase_channel** | **String** |  | [optional] |
| **row_index** | **String** |  | [optional] |
| **items** | [**Array&lt;SimpleProductItem&gt;**](SimpleProductItem.md) |  | [optional] |
| **document_reference** | [**Array&lt;UpgradeDocument&gt;**](UpgradeDocument.md) |  | [optional] |
| **exempt_amount** | **Float** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::SimpleDocument.new(
  record_id: null,
  contact_code: null,
  contact_name: null,
  contact_address: null,
  contact_tax_id: null,
  contact_branch: null,
  contact_person: null,
  contact_email: null,
  contact_number: null,
  contact_zip_code: null,
  contact_group: null,
  published_on: null,
  credit_type: null,
  credit_days: null,
  due_date: null,
  sales_name: null,
  project_name: null,
  reference: null,
  is_vat_inclusive: null,
  use_receipt_deduction: null,
  sub_total: null,
  discount_percentage: null,
  discount_amount: null,
  total_after_discount: null,
  is_vat: null,
  vat_amount: null,
  grand_total: null,
  document_show_withholding_tax: null,
  document_withholding_tax_percentage: null,
  document_withholding_tax_amount: null,
  document_deduction_type: null,
  document_deduction_amount: null,
  remarks: null,
  internal_notes: null,
  show_signature_or_stamp: null,
  document_structure_type: null,
  external_id: null,
  sale_and_purchase_channel: null,
  row_index: null,
  items: null,
  document_reference: null,
  exempt_amount: null
)
```

