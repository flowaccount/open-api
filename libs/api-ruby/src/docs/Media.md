# OpenapiClient::Media

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **url** | **String** |  |  |
| **description** | **String** |  | [optional] |
| **order_number** | **Integer** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **is_display** | **Boolean** |  | [optional] |
| **is_deleted** | **Boolean** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **media_type** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **user_id** | **Integer** |  | [optional] |
| **path** | **String** |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Media.new(
  id: null,
  url: null,
  description: null,
  order_number: null,
  created_on: null,
  is_display: null,
  is_deleted: null,
  gallery_id: null,
  media_type: null,
  company_id: null,
  user_id: null,
  path: null,
  company: null,
  gallery: null,
  user: null
)
```

