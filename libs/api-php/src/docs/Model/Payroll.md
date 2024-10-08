# # Payroll

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**company_id** | **int** |  | [optional]
**start_date** | **\DateTime** |  | [optional]
**end_date** | **\DateTime** |  | [optional]
**payment_cycle** | **int** |  | [optional]
**status** | [**\OpenAPI\Client\Model\PayrollStatus**](PayrollStatus.md) |  | [optional]
**is_delete** | **bool** |  | [optional]
**created_on** | **\DateTime** |  | [optional]
**modified_on** | **\DateTime** |  | [optional]
**created_by** | **int** |  | [optional]
**modified_by** | **int** |  | [optional]
**expense_id** | **int** |  | [optional]
**gallery_id** | **int** |  | [optional]
**remarks** | **string** |  | [optional]
**total** | **float** |  | [optional]
**bank_id** | **int** |  | [optional]
**account_number** | **string** |  | [optional]
**add_amount** | **float** |  | [optional]
**deduct_amount** | **float** |  | [optional]
**net_total** | **float** |  | [optional]
**running_number_type** | **int** |  | [optional]
**date_payment** | **\DateTime** |  | [optional]
**document_date** | **\DateTime** |  | [optional]
**total_payroll_cash** | **float** |  | [optional]
**total_payroll_transfer** | **float** |  | [optional]
**fee** | **float** |  | [optional]
**payment_remarks** | **string** |  | [optional]
**employer_account_number** | **string** |  | [optional]
**employer_account_branch** | **string** |  | [optional]
**bank_account_id** | **int** |  | [optional]
**account_type** | [**OneOfBankAccountType**](OneOfBankAccountType.md) |  | [optional]
**reference_id** | **string** |  | [optional]
**payroll_version** | **int** |  | [optional]
**company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional]
**created_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**modified_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**payroll_detail** | [**\OpenAPI\Client\Model\PayrollDetail[]**](PayrollDetail.md) |  | [optional]
**gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional]
**is_migrate** | **bool** |  | [optional]
**rule_compile_status** | [**\OpenAPI\Client\Model\RuleCompileStatus**](RuleCompileStatus.md) |  | [optional]
**is_partial_payments** | **bool** |  | [optional]
**paid_period** | [**OneOfPaidPeriod**](OneOfPaidPeriod.md) |  | [optional]
**social_security_percent** | **float** |  | [optional] [default to 5]
**status_int** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
