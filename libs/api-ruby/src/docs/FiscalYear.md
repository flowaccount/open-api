# OpenapiClient::FiscalYear

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **begin_period** | **Time** |  | [optional] |
| **end_period** | **Time** |  | [optional] |
| **status** | [**FiscalYearStatus**](FiscalYearStatus.md) |  | [optional] |
| **closed_on** | **Time** |  | [optional] |
| **closed_by** | **Integer** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::FiscalYear.new(
  id: null,
  company_id: null,
  begin_period: null,
  end_period: null,
  status: null,
  closed_on: null,
  closed_by: null,
  created_on: null,
  company: null
)
```

