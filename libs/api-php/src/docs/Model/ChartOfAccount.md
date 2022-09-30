# # ChartOfAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**company_id** | **int** |  | [optional]
**code** | **string** |  | [optional]
**name_local** | **string** |  | [optional]
**name_foreign** | **string** |  | [optional]
**description_local** | **string** |  | [optional]
**description_foreign** | **string** |  | [optional]
**category** | [**\OpenAPI\Client\Model\ChartOfAccountCategory**](ChartOfAccountCategory.md) |  | [optional]
**parent_id** | **int** |  | [optional]
**is_folder** | **bool** |  | [optional]
**is_bank** | **bool** |  | [optional]
**is_receivable** | **bool** |  | [optional]
**is_delete** | **bool** |  | [optional] [default to false]
**is_lock** | **bool** |  | [optional] [default to false]
**createdon** | **\DateTime** |  |
**modifiedon** | **\DateTime** |  |
**modifiedby** | **int** |  | [optional]
**value** | **float** |  | [optional]
**left** | **int** |  | [optional]
**right** | **int** |  | [optional]
**is_default** | **bool** |  | [optional]
**bank_account** | [**OneOfBankAccount**](OneOfBankAccount.md) |  | [optional]
**petty_cash** | [**OneOfPettyCash**](OneOfPettyCash.md) |  | [optional]
**cheque** | [**OneOfCheque**](OneOfCheque.md) |  | [optional]
**credit_card** | [**OneOfCreditCard**](OneOfCreditCard.md) |  | [optional]
**other_channels** | [**OneOfOtherChannels**](OneOfOtherChannels.md) |  | [optional]
**system_chart_of_account** | [**OneOfSystemChartOfAccount**](OneOfSystemChartOfAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
