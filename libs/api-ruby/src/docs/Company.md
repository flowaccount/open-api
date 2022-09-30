# OpenapiClient::Company

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **name_local** | **String** |  |  |
| **name_foreign** | **String** |  | [optional] |
| **address_local** | **String** |  | [optional] |
| **address_foreign** | **String** |  | [optional] |
| **company_tax_id** | **String** |  | [optional] |
| **logo_image** | **String** |  | [optional] |
| **fax** | **String** |  | [optional] |
| **phone1** | **String** |  | [optional] |
| **phone2** | **String** |  | [optional] |
| **phone3** | **String** |  | [optional] |
| **websites** | **String** |  | [optional] |
| **company_type** | [**CompanyTypeEnum**](CompanyTypeEnum.md) |  | [optional] |
| **created_on** | **Time** |  |  |
| **modified_on** | **Time** |  |  |
| **is_default** | **Boolean** |  | [optional] |
| **address_local_line2** | **String** |  | [optional] |
| **address_foreign_line2** | **String** |  | [optional] |
| **vat_rate** | **Integer** |  | [optional] |
| **is_vat** | **Boolean** |  | [optional][default to false] |
| **email** | **String** |  | [optional] |
| **branch** | **String** |  | [optional] |
| **address_local_line3** | **String** |  | [optional] |
| **address_foreign_line3** | **String** |  | [optional] |
| **contact_person** | **String** |  | [optional] |
| **is_active** | **Boolean** |  | [optional][default to false] |
| **remarks** | **String** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **branch_foreign** | **String** |  | [optional] |
| **branch_code** | **String** |  | [optional] |
| **contact_type** | **Integer** |  |  |
| **default_credit_days** | **Integer** |  | [optional] |
| **logo_type** | **Integer** |  |  |
| **is_registered** | **Boolean** |  | [optional][default to false] |
| **is_advance** | **Boolean** |  |  |
| **address** | **String** |  | [optional] |
| **province_id** | **Integer** |  | [optional] |
| **amphur_id** | **Integer** |  | [optional] |
| **district_id** | **Integer** |  | [optional] |
| **zip_code** | **String** |  | [optional] |
| **support_code** | **String** |  | [optional] |
| **sales_type** | [**OneOfSalesType**](OneOfSalesType.md) |  | [optional] |
| **company_preferences** | [**OneOfCompanyPreferences**](OneOfCompanyPreferences.md) |  | [optional] |
| **payroll_preferences** | [**OneOfPayrollPreferences**](OneOfPayrollPreferences.md) |  | [optional] |
| **company_subscription** | [**Array&lt;CompanySubscription&gt;**](CompanySubscription.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Company.new(
  id: null,
  name_local: null,
  name_foreign: null,
  address_local: null,
  address_foreign: null,
  company_tax_id: null,
  logo_image: null,
  fax: null,
  phone1: null,
  phone2: null,
  phone3: null,
  websites: null,
  company_type: null,
  created_on: null,
  modified_on: null,
  is_default: null,
  address_local_line2: null,
  address_foreign_line2: null,
  vat_rate: null,
  is_vat: null,
  email: null,
  branch: null,
  address_local_line3: null,
  address_foreign_line3: null,
  contact_person: null,
  is_active: null,
  remarks: null,
  gallery_id: null,
  branch_foreign: null,
  branch_code: null,
  contact_type: null,
  default_credit_days: null,
  logo_type: null,
  is_registered: null,
  is_advance: null,
  address: null,
  province_id: null,
  amphur_id: null,
  district_id: null,
  zip_code: null,
  support_code: null,
  sales_type: null,
  company_preferences: null,
  payroll_preferences: null,
  company_subscription: null
)
```

