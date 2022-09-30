# OpenapiClient::Contact

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **name_local** | **String** |  | [optional] |
| **name_foreign** | **String** |  | [optional] |
| **address_local** | **String** |  | [optional] |
| **address_foreign** | **String** |  | [optional] |
| **address_local_line2** | **String** |  | [optional] |
| **address_foreign_line2** | **String** |  | [optional] |
| **address_local_line3** | **String** |  | [optional] |
| **address_foreign_line3** | **String** |  | [optional] |
| **branch** | **String** |  | [optional] |
| **branch_foreign** | **String** |  | [optional] |
| **company_tax_id** | **String** |  | [optional] |
| **fax** | **String** |  | [optional] |
| **phone1** | **String** |  | [optional] |
| **phone2** | **String** |  | [optional] |
| **phone3** | **String** |  | [optional] |
| **websites** | **String** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **modified_by** | **Integer** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **is_default** | **Boolean** |  | [optional] |
| **logo_image** | **String** |  | [optional] |
| **default_credit_days** | **Integer** |  | [optional] |
| **vat_rate** | **Integer** |  | [optional] |
| **email** | **String** |  | [optional] |
| **contact_person** | **String** |  | [optional] |
| **is_active** | **Boolean** |  | [optional] |
| **contact_type** | [**ContactTypes**](ContactTypes.md) |  | [optional] |
| **contact_group** | [**ContactGroups**](ContactGroups.md) |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **branch_code** | **String** |  | [optional] |
| **transaction_id** | **String** |  | [optional] |
| **reset_transaction_id** | **Integer** |  | [optional] |
| **contact_code** | **String** |  | [optional] |
| **internal_notes** | **String** |  | [optional] |
| **shipping_address** | **String** |  | [optional] |
| **zip_code** | **String** |  | [optional] |
| **swift_code** | **String** |  | [optional] |
| **bank_address** | **String** |  | [optional] |
| **use_foreign_bank** | **Boolean** |  | [optional] |
| **is_migrate** | **Boolean** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Contact.new(
  id: null,
  name_local: null,
  name_foreign: null,
  address_local: null,
  address_foreign: null,
  address_local_line2: null,
  address_foreign_line2: null,
  address_local_line3: null,
  address_foreign_line3: null,
  branch: null,
  branch_foreign: null,
  company_tax_id: null,
  fax: null,
  phone1: null,
  phone2: null,
  phone3: null,
  websites: null,
  created_on: null,
  modified_on: null,
  modified_by: null,
  is_delete: null,
  is_default: null,
  logo_image: null,
  default_credit_days: null,
  vat_rate: null,
  email: null,
  contact_person: null,
  is_active: null,
  contact_type: null,
  contact_group: null,
  remarks: null,
  gallery_id: null,
  branch_code: null,
  transaction_id: null,
  reset_transaction_id: null,
  contact_code: null,
  internal_notes: null,
  shipping_address: null,
  zip_code: null,
  swift_code: null,
  bank_address: null,
  use_foreign_bank: null,
  is_migrate: null
)
```

