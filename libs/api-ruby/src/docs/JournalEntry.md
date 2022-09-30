# OpenapiClient::JournalEntry

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **document_serial** | **String** |  | [optional] |
| **document_type** | [**DocumentTypes**](DocumentTypes.md) |  |  |
| **status** | [**JournalEntryStatus**](JournalEntryStatus.md) |  |  |
| **document_date** | **Time** |  |  |
| **description** | **String** |  | [optional] |
| **description_foreign** | **String** |  | [optional] |
| **void_description** | **String** |  | [optional] |
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
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **approved_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **modified_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **voided_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **contact** | [**OneOfContact**](OneOfContact.md) |  | [optional] |
| **fiscal_year** | [**OneOfFiscalYear**](OneOfFiscalYear.md) |  | [optional] |
| **reference** | **String** |  | [optional] |
| **reference_id** | **Integer** |  | [optional] |
| **reference_document_type** | [**OneOfDocumentTypes**](OneOfDocumentTypes.md) |  | [optional] |
| **is_system_document** | **Boolean** |  | [default to false] |
| **rule_compile_status** | [**RuleCompileStatus**](RuleCompileStatus.md) |  | [optional] |
| **book_of_accounts** | [**Array&lt;IBookOfAccount&gt;**](IBookOfAccount.md) |  | [optional] |
| **is_changed_document_date** | **Boolean** |  | [optional] |
| **is_reset_document** | **Boolean** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::JournalEntry.new(
  id: null,
  company_id: null,
  document_serial: null,
  document_type: null,
  status: null,
  document_date: null,
  description: null,
  description_foreign: null,
  void_description: null,
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
  gallery: null,
  company: null,
  approved_by_user: null,
  modified_by_user: null,
  voided_by_user: null,
  remarks: null,
  contact: null,
  fiscal_year: null,
  reference: null,
  reference_id: null,
  reference_document_type: null,
  is_system_document: null,
  rule_compile_status: null,
  book_of_accounts: null,
  is_changed_document_date: null,
  is_reset_document: null
)
```

