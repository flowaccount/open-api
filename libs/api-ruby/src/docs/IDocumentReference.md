# OpenapiClient::IDocumentReference

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **reference_id** | **Integer** |  | [optional] |
| **reference_document_type** | [**DocumentTypes**](DocumentTypes.md) |  | [optional] |
| **reference_document_serial** | **String** |  | [optional] |
| **document_id** | **Integer** |  | [optional] |
| **document_type** | [**DocumentTypes**](DocumentTypes.md) |  | [optional] |
| **document_serial** | **String** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **type** | [**DocumentReferenceTypes**](DocumentReferenceTypes.md) |  | [optional] |
| **document_status** | **Integer** |  | [optional] |
| **document_status_string** | **String** |  | [optional] |
| **document_date** | **Time** |  | [optional] |
| **document_amount** | **Float** |  | [optional] |
| **document_amount_with_vat** | **Float** |  | [optional] |
| **ref_document_status** | **Integer** |  | [optional] |
| **ref_document_status_string** | **String** |  | [optional] |
| **ref_document_date** | **Time** |  | [optional] |
| **ref_document_amount** | **Float** |  | [optional] |
| **ref_document_amount_with_vat** | **Float** |  | [optional] |
| **partial_payment_total_amount** | **Float** |  | [optional] |
| **partial_payment_total_percent** | **Float** |  | [optional] |
| **ref_created_on** | **Time** |  | [optional] |
| **ref_modified_on** | **Time** |  | [optional] |
| **ref_is_migrate** | **Boolean** |  | [optional] |
| **is_compile_rule** | **Boolean** |  | [optional] |
| **document_collected** | **Float** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::IDocumentReference.new(
  id: null,
  company_id: null,
  reference_id: null,
  reference_document_type: null,
  reference_document_serial: null,
  document_id: null,
  document_type: null,
  document_serial: null,
  is_delete: null,
  type: null,
  document_status: null,
  document_status_string: null,
  document_date: null,
  document_amount: null,
  document_amount_with_vat: null,
  ref_document_status: null,
  ref_document_status_string: null,
  ref_document_date: null,
  ref_document_amount: null,
  ref_document_amount_with_vat: null,
  partial_payment_total_amount: null,
  partial_payment_total_percent: null,
  ref_created_on: null,
  ref_modified_on: null,
  ref_is_migrate: null,
  is_compile_rule: null,
  document_collected: null
)
```

