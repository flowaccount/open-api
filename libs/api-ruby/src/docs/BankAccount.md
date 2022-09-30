# OpenapiClient::BankAccount

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **account_number** | **String** |  | [optional] |
| **bank_id** | **Integer** |  | [optional] |
| **branch** | **String** |  | [optional] |
| **account_name** | **String** |  | [optional] |
| **account_type** | **Integer** |  | [optional] |
| **last_reconciled_date** | **Time** |  | [optional] |
| **last_outstanding_balance_date** | **Time** |  | [optional] |
| **last_statement_date** | **Time** |  | [optional] |
| **last_statement_document_id** | **String** |  | [optional] |
| **synced** | **Boolean** |  | [optional] |
| **outstanding_balance** | **Float** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **is_default** | **Boolean** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional][default to false] |
| **last_available_balance** | **Float** |  | [optional] |
| **last_outstanding_balance** | **Float** |  | [optional] |
| **chart_of_account_id** | **Integer** |  | [optional] |
| **chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional] |
| **bank** | [**OneOfBank**](OneOfBank.md) |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **status** | [**BankingChannelsStatus**](BankingChannelsStatus.md) |  | [optional] |
| **bank_name** | **String** |  | [optional] |
| **qr_code** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::BankAccount.new(
  id: null,
  company_id: null,
  account_number: null,
  bank_id: null,
  branch: null,
  account_name: null,
  account_type: null,
  last_reconciled_date: null,
  last_outstanding_balance_date: null,
  last_statement_date: null,
  last_statement_document_id: null,
  synced: null,
  outstanding_balance: null,
  created_on: null,
  modified_on: null,
  is_default: null,
  is_delete: null,
  last_available_balance: null,
  last_outstanding_balance: null,
  chart_of_account_id: null,
  chart_of_account: null,
  bank: null,
  company: null,
  status: null,
  bank_name: null,
  qr_code: null
)
```

