# OpenapiClient::ExpenseCategory

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **name** | **String** |  |  |
| **name_foreign** | **String** |  | [optional] |
| **is_share** | **Boolean** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **is_gl_system** | **Boolean** |  | [optional] |
| **system_code** | **Integer** |  | [optional] |
| **reset_transaction_id** | **Integer** |  | [optional] |
| **tax_life** | **Integer** |  | [optional] |
| **chart_of_account_id** | **Integer** |  | [optional] |
| **chart_of_account_id_credit** | **Integer** |  | [optional] |
| **depreciation_chart_of_account_id** | **Integer** |  | [optional] |
| **accumulated_depreciation_chart_of_account_id** | **Integer** |  | [optional] |
| **depreciable_asset** | **Boolean** |  | [optional] |
| **expense_list** | [**Array&lt;ExpenseList&gt;**](ExpenseList.md) |  | [optional] |
| **company_expense_category** | [**Array&lt;CompanyExpenseCategory&gt;**](CompanyExpenseCategory.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::ExpenseCategory.new(
  id: null,
  name: null,
  name_foreign: null,
  is_share: null,
  is_delete: null,
  is_gl_system: null,
  system_code: null,
  reset_transaction_id: null,
  tax_life: null,
  chart_of_account_id: null,
  chart_of_account_id_credit: null,
  depreciation_chart_of_account_id: null,
  accumulated_depreciation_chart_of_account_id: null,
  depreciable_asset: null,
  expense_list: null,
  company_expense_category: null
)
```

