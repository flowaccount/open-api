# OpenapiClient::ReconciledDocument

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **document_id** | **Integer** |  | [optional] |
| **document_type** | [**DocumentTypes**](DocumentTypes.md) |  | [optional] |
| **transaction_id** | **String** |  | [optional] |
| **amount** | **Float** |  | [optional] |
| **from_account** | **String** |  | [optional] |
| **channel** | **String** |  | [optional] |
| **description** | **String** |  | [optional] |
| **account_number** | **String** |  |  |
| **bank_id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **bank** | [**OneOfBank**](OneOfBank.md) |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::ReconciledDocument.new(
  document_id: null,
  document_type: null,
  transaction_id: null,
  amount: null,
  from_account: null,
  channel: null,
  description: null,
  account_number: null,
  bank_id: null,
  company_id: null,
  bank: null,
  company: null
)
```

