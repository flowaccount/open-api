# OpenapiClient::Department

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **name** | **String** |  |  |
| **code** | **String** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional][default to false] |
| **company_id** | **Integer** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_by** | **Integer** |  | [optional] |
| **created_on** | **Date** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **employees** | [**Array&lt;Employee&gt;**](Employee.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Department.new(
  id: null,
  name: null,
  code: null,
  is_delete: null,
  company_id: null,
  created_by: null,
  modified_by: null,
  created_on: null,
  modified_on: null,
  company: null,
  employees: null
)
```

