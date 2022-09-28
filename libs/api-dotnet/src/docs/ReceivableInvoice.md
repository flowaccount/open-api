# Org.OpenAPITools.Model.ReceivableInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **long** |  | [optional] 
**ContactId** | **long** |  | [optional] 
**CompanyId** | **long** |  | 
**Status** | **ReceivableInvoiceStatus** |  | [optional] 
**CreatedOn** | **DateTime** |  | 
**ModifiedOn** | **DateTime** |  | 
**PublishedOn** | **DateTime** |  | 
**DocumentDate** | **DateTime** |  | 
**Published** | **bool** |  | [optional] 
**Approved** | **bool** |  | [optional] 
**ApprovedBy** | **long?** |  | [optional] 
**ApprovedByClientId** | **long?** |  | [optional] 
**ApprovedImageUrl** | **string** |  | [optional] 
**DocumentSerial** | **string** |  | [optional] 
**Remarks** | **string** |  | [optional] 
**Name** | **string** |  | [optional] 
**Value** | **decimal** |  | [optional] 
**DueDate** | **DateTime?** |  | [optional] 
**ExpectedDate** | **DateTime?** |  | [optional] 
**CreatedBy** | **long** |  | [optional] 
**DocumentId** | **string** |  | [optional] 
**IsDelete** | **bool** |  | [optional] 
**VatRate** | **int** |  | [optional] 
**InternalNotes** | **string** |  | [optional] 
**GalleryId** | **long?** |  | [optional] 
**IsVatInclusive** | **bool** |  | [optional] 
**SalesId** | **long?** |  | [optional] 
**SalesName** | **string** |  | [optional] 
**RoundingAdjustment** | **decimal** |  | [optional] 
**IsInlineDiscount** | **bool** |  | [optional] [default to false]
**IsInlineVat** | **bool** |  | [optional] [default to false]
**Tax** | **decimal?** |  | [optional] 
**DocumentSerialNoPrefix** | **long?** |  | [optional] 
**VatValue** | **decimal?** |  | [optional] 
**ResetTransactionId** | **long?** |  | [optional] 
**Contact** | [**OneOfContact**](OneOfContact.md) |  | [optional] 
**ApprovedByClient** | [**OneOfUser**](OneOfUser.md) |  | [optional] 
**Company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] 
**CreatedByUser** | [**OneOfUser**](OneOfUser.md) |  | [optional] 
**ApprovedByUser** | [**OneOfUser**](OneOfUser.md) |  | [optional] 
**Sales** | [**OneOfUser**](OneOfUser.md) |  | [optional] 
**Gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] 
**InlineVatValue** | **decimal** |  | [optional] 
**InlineDiscountValue** | **decimal** |  | [optional] 
**RuleCompileStatus** | **RuleCompileStatus** |  | [optional] 
**RunningNumberType** | **int** |  | [optional] 
**RunningModifiedOn** | **DateTime?** |  | [optional] 
**ExemptAmount** | **decimal** |  | [optional] 
**VatableAmount** | **decimal** |  | [optional] 
**TotalAfterDiscount** | **decimal** |  | [optional] 
**SubTotal** | **decimal** |  | [optional] 
**DocumentReferences** | [**List&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] 
**ReferencedToMe** | [**List&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] 
**ReferencedByMe** | [**List&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] 
**StatusInt** | **int** |  | [optional] 
**IsReCalculate** | **bool** |  | [optional] 
**PartialPaymentMethod** | [**OneOfPartialPaymentMethod**](OneOfPartialPaymentMethod.md) |  | [optional] 
**VatAmount** | **decimal?** |  | [optional] 
**IsMigrate** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

