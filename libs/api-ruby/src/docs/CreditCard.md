# OpenapiClient::CreditCard

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **chart_of_account_id** | **Integer** |  | [optional] |
| **chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional] |
| **bank_id** | **Integer** |  | [optional] |
| **bank** | [**OneOfBank**](OneOfBank.md) |  | [optional] |
| **bank_name** | **String** |  | [optional] |
| **type** | [**CreditCardType**](CreditCardType.md) |  | [optional] |
| **card_number** | **String** |  | [optional] |
| **card_holder_name** | **String** |  | [optional] |
| **card_name** | **String** |  | [optional] |
| **cash_limit** | **Float** |  | [optional] |
| **statement_date** | **Integer** |  | [optional] |
| **due_date** | **Integer** |  | [optional] |
| **status** | [**BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional] |
| **is_delete** | **Boolean** |  | [optional][default to false] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::CreditCard.new(
  id: null,
  company_id: null,
  chart_of_account_id: null,
  chart_of_account: null,
  bank_id: null,
  bank: null,
  bank_name: null,
  type: null,
  card_number: null,
  card_holder_name: null,
  card_name: null,
  cash_limit: null,
  statement_date: null,
  due_date: null,
  status: null,
  is_delete: null,
  created_on: null,
  modified_on: null
)
```

