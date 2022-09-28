# Org.OpenAPITools.Model.ChartOfAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **long** |  | [optional] 
**CompanyId** | **long** |  | [optional] 
**Code** | **string** |  | [optional] 
**NameLocal** | **string** |  | [optional] 
**NameForeign** | **string** |  | [optional] 
**DescriptionLocal** | **string** |  | [optional] 
**DescriptionForeign** | **string** |  | [optional] 
**Category** | **ChartOfAccountCategory** |  | [optional] 
**ParentId** | **long?** |  | [optional] 
**IsFolder** | **bool** |  | [optional] 
**IsBank** | **bool** |  | [optional] 
**IsReceivable** | **bool** |  | [optional] 
**IsDelete** | **bool** |  | [optional] [default to false]
**IsLock** | **bool** |  | [optional] [default to false]
**Createdon** | **DateTime** |  | 
**Modifiedon** | **DateTime** |  | 
**Modifiedby** | **long** |  | [optional] 
**Value** | **decimal** |  | [optional] 
**Left** | **int** |  | [optional] 
**Right** | **int** |  | [optional] 
**IsDefault** | **bool** |  | [optional] 
**BankAccount** | [**OneOfBankAccount**](OneOfBankAccount.md) |  | [optional] 
**PettyCash** | [**OneOfPettyCash**](OneOfPettyCash.md) |  | [optional] 
**Cheque** | [**OneOfCheque**](OneOfCheque.md) |  | [optional] 
**CreditCard** | [**OneOfCreditCard**](OneOfCreditCard.md) |  | [optional] 
**OtherChannels** | [**OneOfOtherChannels**](OneOfOtherChannels.md) |  | [optional] 
**SystemChartOfAccount** | [**OneOfSystemChartOfAccount**](OneOfSystemChartOfAccount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

