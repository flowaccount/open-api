# # JournalEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**company_id** | **int** |  | [optional]
**document_serial** | **string** |  | [optional]
**document_type** | [**\OpenAPI\Client\Model\DocumentTypes**](DocumentTypes.md) |  |
**status** | [**\OpenAPI\Client\Model\JournalEntryStatus**](JournalEntryStatus.md) |  |
**document_date** | **\DateTime** |  |
**description** | **string** |  | [optional]
**description_foreign** | **string** |  | [optional]
**void_description** | **string** |  | [optional]
**voided_on** | **\DateTime** |  | [optional]
**approved_on** | **\DateTime** |  | [optional]
**transaction_no** | **int** |  | [optional]
**note** | **string** |  | [optional]
**template_type** | [**\OpenAPI\Client\Model\JournalEntryTemplateType**](JournalEntryTemplateType.md) |  | [optional]
**contact_name** | **string** |  | [optional]
**document_serial_no_prefix** | **int** |  | [optional]
**created_by** | **int** |  | [optional]
**modified_by** | **int** |  | [optional]
**approved_by** | **int** |  | [optional]
**voided_by** | **int** |  | [optional]
**gallery_id** | **int** |  | [optional]
**contact_id** | **int** |  | [optional]
**running_number_type** | [**OneOfRunningNumberType**](OneOfRunningNumberType.md) |  | [optional]
**fiscal_year_id** | **int** |  | [optional]
**gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional]
**company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional]
**approved_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**modified_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**voided_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**remarks** | **string** |  | [optional]
**contact** | [**OneOfContact**](OneOfContact.md) |  | [optional]
**fiscal_year** | [**OneOfFiscalYear**](OneOfFiscalYear.md) |  | [optional]
**reference** | **string** |  | [optional]
**reference_id** | **int** |  | [optional]
**reference_document_type** | [**OneOfDocumentTypes**](OneOfDocumentTypes.md) |  | [optional]
**is_system_document** | **bool** |  | [default to false]
**rule_compile_status** | [**\OpenAPI\Client\Model\RuleCompileStatus**](RuleCompileStatus.md) |  | [optional]
**book_of_accounts** | [**\OpenAPI\Client\Model\IBookOfAccount[]**](IBookOfAccount.md) |  | [optional]
**is_changed_document_date** | **bool** |  | [optional]
**is_reset_document** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
