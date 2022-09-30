# # ReceivableInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**contact_id** | **int** |  | [optional]
**company_id** | **int** |  |
**status** | [**\OpenAPI\Client\Model\ReceivableInvoiceStatus**](ReceivableInvoiceStatus.md) |  | [optional]
**created_on** | **\DateTime** |  |
**modified_on** | **\DateTime** |  |
**published_on** | **\DateTime** |  |
**document_date** | **\DateTime** |  |
**published** | **bool** |  | [optional]
**approved** | **bool** |  | [optional]
**approved_by** | **int** |  | [optional]
**approved_by_client_id** | **int** |  | [optional]
**approved_image_url** | **string** |  | [optional]
**document_serial** | **string** |  | [optional]
**remarks** | **string** |  | [optional]
**name** | **string** |  | [optional]
**value** | **float** |  | [optional]
**due_date** | **\DateTime** |  | [optional]
**expected_date** | **\DateTime** |  | [optional]
**created_by** | **int** |  | [optional]
**document_id** | **string** |  | [optional]
**is_delete** | **bool** |  | [optional]
**vat_rate** | **int** |  | [optional]
**internal_notes** | **string** |  | [optional]
**gallery_id** | **int** |  | [optional]
**is_vat_inclusive** | **bool** |  | [optional]
**sales_id** | **int** |  | [optional]
**sales_name** | **string** |  | [optional]
**rounding_adjustment** | **float** |  | [optional]
**is_inline_discount** | **bool** |  | [optional] [default to false]
**is_inline_vat** | **bool** |  | [optional] [default to false]
**tax** | **float** |  | [optional]
**document_serial_no_prefix** | **int** |  | [optional]
**vat_value** | **float** |  | [optional]
**reset_transaction_id** | **int** |  | [optional]
**contact** | [**OneOfContact**](OneOfContact.md) |  | [optional]
**approved_by_client** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional]
**created_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**approved_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**sales** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional]
**inline_vat_value** | **float** |  | [optional]
**inline_discount_value** | **float** |  | [optional]
**rule_compile_status** | [**\OpenAPI\Client\Model\RuleCompileStatus**](RuleCompileStatus.md) |  | [optional]
**running_number_type** | **int** |  | [optional]
**running_modified_on** | **\DateTime** |  | [optional]
**exempt_amount** | **float** |  | [optional]
**vatable_amount** | **float** |  | [optional]
**total_after_discount** | **float** |  | [optional]
**sub_total** | **float** |  | [optional]
**document_references** | [**\OpenAPI\Client\Model\IDocumentReference[]**](IDocumentReference.md) |  | [optional]
**referenced_to_me** | [**\OpenAPI\Client\Model\IDocumentReference[]**](IDocumentReference.md) |  | [optional]
**referenced_by_me** | [**\OpenAPI\Client\Model\IDocumentReference[]**](IDocumentReference.md) |  | [optional]
**status_int** | **int** |  | [optional]
**is_re_calculate** | **bool** |  | [optional]
**partial_payment_method** | [**OneOfPartialPaymentMethod**](OneOfPartialPaymentMethod.md) |  | [optional]
**vat_amount** | **float** |  | [optional]
**is_migrate** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
