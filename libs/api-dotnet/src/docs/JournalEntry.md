# Org.OpenAPITools.Model.JournalEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **long** |  | [optional] 
**CompanyId** | **long** |  | [optional] 
**DocumentSerial** | **string** |  | [optional] 
**DocumentType** | **DocumentTypes** |  | 
**Status** | **JournalEntryStatus** |  | 
**DocumentDate** | **DateTime** |  | 
**Description** | **string** |  | [optional] 
**DescriptionForeign** | **string** |  | [optional] 
**VoidDescription** | **string** |  | [optional] 
**VoidedOn** | **DateTime?** |  | [optional] 
**ApprovedOn** | **DateTime?** |  | [optional] 
**TransactionNo** | **long?** |  | [optional] 
**Note** | **string** |  | [optional] 
**TemplateType** | **JournalEntryTemplateType** |  | [optional] 
**ContactName** | **string** |  | [optional] 
**DocumentSerialNoPrefix** | **long?** |  | [optional] 
**CreatedBy** | **long** |  | [optional] 
**ModifiedBy** | **long** |  | [optional] 
**ApprovedBy** | **long?** |  | [optional] 
**VoidedBy** | **long?** |  | [optional] 
**GalleryId** | **long?** |  | [optional] 
**ContactId** | **long?** |  | [optional] 
**RunningNumberType** | [**OneOfRunningNumberType**](OneOfRunningNumberType.md) |  | [optional] 
**FiscalYearId** | **long?** |  | [optional] 
**Gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] 
**Company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] 
**ApprovedByUser** | [**OneOfUser**](OneOfUser.md) |  | [optional] 
**ModifiedByUser** | [**OneOfUser**](OneOfUser.md) |  | [optional] 
**VoidedByUser** | [**OneOfUser**](OneOfUser.md) |  | [optional] 
**Remarks** | **string** |  | [optional] 
**Contact** | [**OneOfContact**](OneOfContact.md) |  | [optional] 
**FiscalYear** | [**OneOfFiscalYear**](OneOfFiscalYear.md) |  | [optional] 
**Reference** | **string** |  | [optional] 
**ReferenceId** | **long?** |  | [optional] 
**ReferenceDocumentType** | [**OneOfDocumentTypes**](OneOfDocumentTypes.md) |  | [optional] 
**IsSystemDocument** | **bool** |  | [default to false]
**RuleCompileStatus** | **RuleCompileStatus** |  | [optional] 
**BookOfAccounts** | [**List&lt;IBookOfAccount&gt;**](IBookOfAccount.md) |  | [optional] 
**IsChangedDocumentDate** | **bool** |  | [optional] 
**IsResetDocument** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

