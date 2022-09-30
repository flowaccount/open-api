# OpenapiClient::IJournalEntryBase

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **document_serial** | **String** |  | [optional] |
| **document_type** | [**DocumentTypes**](DocumentTypes.md) |  | [optional] |
| **status** | [**JournalEntryStatus**](JournalEntryStatus.md) |  | [optional] |
| **document_date** | **Time** |  | [optional] |
| **description** | **String** |  | [optional] |
| **description_foreign** | **String** |  | [optional] |
| **void_description** | **String** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **voided_on** | **Time** |  | [optional] |
| **approved_on** | **Time** |  | [optional] |
| **transaction_no** | **Integer** |  | [optional] |
| **note** | **String** |  | [optional] |
| **template_type** | [**JournalEntryTemplateType**](JournalEntryTemplateType.md) |  | [optional] |
| **contact_name** | **String** |  | [optional] |
| **document_serial_no_prefix** | **Integer** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_by** | **Integer** |  | [optional] |
| **approved_by** | **Integer** |  | [optional] |
| **voided_by** | **Integer** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **contact_id** | **Integer** |  | [optional] |
| **running_number_type** | [**OneOfRunningNumberType**](OneOfRunningNumberType.md) |  | [optional] |
| **fiscal_year_id** | **Integer** |  | [optional] |
| **reference** | **String** |  | [optional] |
| **reference_id** | **Integer** |  | [optional] |
| **reference_document_type** | [**OneOfDocumentTypes**](OneOfDocumentTypes.md) |  | [optional] |
| **is_system_document** | **Boolean** |  | [optional] |
| **rule_compile_status** | [**RuleCompileStatus**](RuleCompileStatus.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::IJournalEntryBase.new(
  id: null,
  company_id: null,
  document_serial: null,
  document_type: null,
  status: null,
  document_date: null,
  description: null,
  description_foreign: null,
  void_description: null,
  created_on: null,
  modified_on: null,
  voided_on: null,
  approved_on: null,
  transaction_no: null,
  note: null,
  template_type: null,
  contact_name: null,
  document_serial_no_prefix: null,
  created_by: null,
  modified_by: null,
  approved_by: null,
  voided_by: null,
  gallery_id: null,
  contact_id: null,
  running_number_type: null,
  fiscal_year_id: null,
  reference: null,
  reference_id: null,
  reference_document_type: null,
  is_system_document: null,
  rule_compile_status: null
)
```

