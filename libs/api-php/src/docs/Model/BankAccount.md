# # BankAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**company_id** | **int** |  |
**account_number** | **string** |  | [optional]
**bank_id** | **int** |  | [optional]
**branch** | **string** |  | [optional]
**account_name** | **string** |  | [optional]
**account_type** | **int** |  | [optional]
**last_reconciled_date** | **\DateTime** |  | [optional]
**last_outstanding_balance_date** | **\DateTime** |  | [optional]
**last_statement_date** | **\DateTime** |  | [optional]
**last_statement_document_id** | **string** |  | [optional]
**synced** | **bool** |  | [optional]
**outstanding_balance** | **float** |  | [optional]
**created_on** | **\DateTime** |  | [optional]
**modified_on** | **\DateTime** |  | [optional]
**is_default** | **bool** |  | [optional]
**is_delete** | **bool** |  | [optional] [default to false]
**last_available_balance** | **float** |  | [optional]
**last_outstanding_balance** | **float** |  | [optional]
**chart_of_account_id** | **int** |  | [optional]
**chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional]
**bank** | [**OneOfBank**](OneOfBank.md) |  | [optional]
**company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional]
**bank_name** | **string** |  | [optional]
**qr_code** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
