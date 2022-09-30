# OpenapiClient::PettyCash

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional][default to false] |
| **description** | **String** |  | [optional] |
| **name** | **String** |  | [optional] |
| **cash_limit** | **Float** |  | [optional] |
| **chart_of_account_id** | **Integer** |  | [optional] |
| **chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional] |
| **cash_holder_id** | **Integer** |  | [optional] |
| **cash_holder** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **status** | [**BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional] |
| **cash_holder_name** | **String** |  | [optional] |
| **remaining_balance** | **Float** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::PettyCash.new(
  id: null,
  company_id: null,
  created_on: null,
  modified_on: null,
  is_delete: null,
  description: null,
  name: null,
  cash_limit: null,
  chart_of_account_id: null,
  chart_of_account: null,
  cash_holder_id: null,
  cash_holder: null,
  status: null,
  cash_holder_name: null,
  remaining_balance: null
)
```

