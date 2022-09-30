# OpenapiClient::FilterOptions

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **column_name** | **String** |  | [optional] |
| **column_value** | **String** |  | [optional] |
| **column_predicate_operator** | [**PredicateOperator**](PredicateOperator.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::FilterOptions.new(
  column_name: null,
  column_value: null,
  column_predicate_operator: null
)
```

