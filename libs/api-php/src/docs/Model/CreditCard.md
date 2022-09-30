# # CreditCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**company_id** | **int** |  |
**chart_of_account_id** | **int** |  | [optional]
**chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional]
**bank_id** | **int** |  | [optional]
**bank** | [**OneOfBank**](OneOfBank.md) |  | [optional]
**bank_name** | **string** |  | [optional]
**type** | [**\OpenAPI\Client\Model\CreditCardType**](CreditCardType.md) |  | [optional]
**card_number** | **string** |  | [optional]
**card_holder_name** | **string** |  | [optional]
**card_name** | **string** |  | [optional]
**cash_limit** | **float** |  | [optional]
**statement_date** | **int** |  | [optional]
**due_date** | **int** |  | [optional]
**status** | [**\OpenAPI\Client\Model\BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional]
**is_delete** | **bool** |  | [optional] [default to false]
**created_on** | **\DateTime** |  | [optional]
**modified_on** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
