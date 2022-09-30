# OpenapiClient::IChartOfAccount

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
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
| **is_delete** | **Boolean** |  | [optional] |
| **is_lock** | **Boolean** |  | [optional] |
| **createdon** | **Time** |  | [optional] |
| **modifiedon** | **Time** |  | [optional] |
| **modifiedby** | **Integer** |  | [optional] |
| **value** | **Float** |  | [optional] |
| **left** | **Integer** |  | [optional] |
| **right** | **Integer** |  | [optional] |
| **is_default** | **Boolean** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::IChartOfAccount.new(
  id: null,
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
  is_default: null
)
```

