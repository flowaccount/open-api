# # PettyCash

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**company_id** | **int** |  |
**created_on** | **\DateTime** |  | [optional]
**modified_on** | **\DateTime** |  | [optional]
**is_delete** | **bool** |  | [optional] [default to false]
**description** | **string** |  | [optional]
**name** | **string** |  | [optional]
**cash_limit** | **float** |  | [optional]
**chart_of_account_id** | **int** |  | [optional]
**chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional]
**cash_holder_id** | **int** |  | [optional]
**cash_holder** | [**OneOfUser**](OneOfUser.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional]
**cash_holder_name** | **string** |  | [optional]
**remaining_balance** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
