# OpenapiClient::Cheque

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **bank_account_id** | **Integer** |  | [optional] |
| **bank_account** | [**OneOfBankAccount**](OneOfBankAccount.md) |  | [optional] |
| **chart_of_account_id** | **Integer** |  | [optional] |
| **chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional] |
| **status** | [**BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional] |
| **is_delete** | **Boolean** |  | [optional][default to false] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Cheque.new(
  id: null,
  company_id: null,
  bank_account_id: null,
  bank_account: null,
  chart_of_account_id: null,
  chart_of_account: null,
  status: null,
  is_delete: null,
  created_on: null,
  modified_on: null
)
```

