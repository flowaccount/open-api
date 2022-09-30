# OpenapiClient::SystemChartOfAccount

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **chart_of_account_id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **system_code** | **Integer** |  |  |
| **chart_of_account** | [**OneOfChartOfAccount**](OneOfChartOfAccount.md) |  | [optional] |
| **chart_of_account_id_credit** | **Integer** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::SystemChartOfAccount.new(
  chart_of_account_id: null,
  company_id: null,
  system_code: null,
  chart_of_account: null,
  chart_of_account_id_credit: null
)
```

