# OpenapiClient::Bank

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **name** | **String** |  |  |
| **country_code** | **String** |  | [optional] |
| **id** | **Integer** |  | [optional] |
| **bank_code** | **String** |  |  |
| **is_delete** | **Boolean** |  | [optional] |
| **order_number** | **Integer** |  | [optional] |
| **url** | **String** |  | [optional] |
| **is_custom_bank** | **Boolean** |  | [optional] |
| **bank_account** | [**Array&lt;BankAccount&gt;**](BankAccount.md) |  | [optional] |
| **reconciled_document** | [**Array&lt;ReconciledDocument&gt;**](ReconciledDocument.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Bank.new(
  name: null,
  country_code: null,
  id: null,
  bank_code: null,
  is_delete: null,
  order_number: null,
  url: null,
  is_custom_bank: null,
  bank_account: null,
  reconciled_document: null
)
```

