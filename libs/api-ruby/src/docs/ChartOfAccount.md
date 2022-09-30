# OpenapiClient::ChartOfAccount

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **code** | **String** |  | [optional] |
| **name_local** | **String** |  | [optional] |
| **name_foreign** | **String** |  | [optional] |
| **description_local** | **String** |  | [optional] |
| **description_foreign** | **String** |  | [optional] |
| **category** | [**ChartOfAccountCategory**](ChartOfAccountCategory.md) |  | [optional] |
| **parent_id** | **Integer** |  | [optional] |
| **is_folder** | **Boolean** |  | [optional] |
| **is_bank** | **Boolean** |  | [optional] |
| **is_receivable** | **Boolean** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional][default to false] |
| **is_lock** | **Boolean** |  | [optional][default to false] |
| **createdon** | **Time** |  |  |
| **modifiedon** | **Time** |  |  |
| **modifiedby** | **Integer** |  | [optional] |
| **value** | **Float** |  | [optional] |
| **left** | **Integer** |  | [optional] |
| **right** | **Integer** |  | [optional] |
| **is_default** | **Boolean** |  | [optional] |
| **bank_account** | [**OneOfBankAccount**](OneOfBankAccount.md) |  | [optional] |
| **petty_cash** | [**OneOfPettyCash**](OneOfPettyCash.md) |  | [optional] |
| **cheque** | [**OneOfCheque**](OneOfCheque.md) |  | [optional] |
| **credit_card** | [**OneOfCreditCard**](OneOfCreditCard.md) |  | [optional] |
| **other_channels** | [**OneOfOtherChannels**](OneOfOtherChannels.md) |  | [optional] |
| **system_chart_of_account** | [**OneOfSystemChartOfAccount**](OneOfSystemChartOfAccount.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::ChartOfAccount.new(
  id: null,
  company_id: null,
  code: null,
  name_local: null,
  name_foreign: null,
  description_local: null,
  description_foreign: null,
  category: null,
  parent_id: null,
  is_folder: null,
  is_bank: null,
  is_receivable: null,
  is_delete: null,
  is_lock: null,
  createdon: null,
  modifiedon: null,
  modifiedby: null,
  value: null,
  left: null,
  right: null,
  is_default: null,
  bank_account: null,
  petty_cash: null,
  cheque: null,
  credit_card: null,
  other_channels: null,
  system_chart_of_account: null
)
```

