# OpenapiClient::SupplierInvoice

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **document_date** | **Time** |  |  |
| **document_serial** | **String** |  | [optional] |
| **contact_name** | **String** |  | [optional] |
| **contact_tax_id** | **String** |  | [optional] |
| **contact_branch** | **String** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **reference_document_id** | **Integer** |  | [optional] |
| **reference_document_type** | [**DocumentTypes**](DocumentTypes.md) |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_by** | **Integer** |  | [optional] |
| **created_on** | **Time** |  |  |
| **modified_on** | **Time** |  |  |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **created_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **modified_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::SupplierInvoice.new(
  id: null,
  company_id: null,
  document_date: null,
  document_serial: null,
  contact_name: null,
  contact_tax_id: null,
  contact_branch: null,
  is_delete: null,
  gallery_id: null,
  reference_document_id: null,
  reference_document_type: null,
  created_by: null,
  modified_by: null,
  created_on: null,
  modified_on: null,
  company: null,
  created_by_user: null,
  modified_by_user: null,
  gallery: null
)
```

