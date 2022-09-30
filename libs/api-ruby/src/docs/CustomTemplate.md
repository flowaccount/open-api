# OpenapiClient::CustomTemplate

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **name** | **String** |  | [optional] |
| **sheet_index** | **Integer** |  | [optional] |
| **columns** | **Object** |  | [optional] |
| **date_format** | [**OneOfDateInfo**](OneOfDateInfo.md) |  | [optional] |
| **ignore_last_row** | **Boolean** |  | [optional] |
| **image_url** | **String** |  | [optional] |
| **custom_template_info** | [**OneOfCustomTemplateInfo**](OneOfCustomTemplateInfo.md) |  | [optional] |
| **formulas** | **Object** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::CustomTemplate.new(
  id: null,
  name: null,
  sheet_index: null,
  columns: null,
  date_format: null,
  ignore_last_row: null,
  image_url: null,
  custom_template_info: null,
  formulas: null
)
```

