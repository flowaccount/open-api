# OpenapiClient::CompanyExpenseCategory

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **company_id** | **Integer** |  | [optional] |
| **expense_category_id** | **Integer** |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **expense_category** | [**OneOfExpenseCategory**](OneOfExpenseCategory.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::CompanyExpenseCategory.new(
  company_id: null,
  expense_category_id: null,
  company: null,
  expense_category: null
)
```

