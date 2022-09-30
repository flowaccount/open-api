# OpenapiClient::OtherChannels

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **chart_of_account_id** | **Integer** |  | [optional] |
| **chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional] |
| **name** | **String** |  | [optional] |
| **status** | [**BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional] |
| **channel** | [**PaymentChannelsType**](PaymentChannelsType.md) |  | [optional] |
| **type** | [**OtherChannelsType**](OtherChannelsType.md) |  | [optional] |
| **description** | **String** |  | [optional] |
| **bank_id** | **Integer** |  | [optional] |
| **bank** | [**OneOfBank**](OneOfBank.md) |  | [optional] |
| **bank_name** | **String** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional][default to false] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::OtherChannels.new(
  id: null,
  company_id: null,
  chart_of_account_id: null,
  chart_of_account: null,
  name: null,
  status: null,
  channel: null,
  type: null,
  description: null,
  bank_id: null,
  bank: null,
  bank_name: null,
  created_on: null,
  modified_on: null,
  is_delete: null
)
```

