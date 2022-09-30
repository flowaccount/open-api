# OpenapiClient::EmployeeModel

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **prefix** | [**GenderPrefix**](GenderPrefix.md) |  | [optional] |
| **first_name** | **String** |  | [optional] |
| **last_name** | **String** |  | [optional] |
| **salary** | **Float** |  | [optional] |
| **identitfication_number** | **String** |  | [optional] |
| **passport_number** | **String** |  | [optional] |
| **profile_image** | **String** |  | [optional] |
| **mobile** | **String** |  | [optional] |
| **commission** | **Float** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **title** | **String** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **bank_id** | **Integer** |  | [optional] |
| **branch** | **String** |  | [optional] |
| **account_number** | **String** |  | [optional] |
| **account_type** | **Integer** |  | [optional] |
| **start_date** | **Time** |  | [optional] |
| **end_date** | **Time** |  | [optional] |
| **internal_note** | **String** |  | [optional] |
| **is_active** | **Boolean** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_by** | **Integer** |  | [optional] |
| **type** | [**OneOfEmployeeTypes**](OneOfEmployeeTypes.md) |  | [optional] |
| **code** | **String** |  | [optional] |
| **salary_type** | **Integer** |  | [optional] |
| **social_security_number** | **String** |  | [optional] |
| **employer_social_security_rate** | **Integer** |  | [optional] |
| **employee_social_security_rate** | **Integer** |  | [optional] |
| **email** | **String** |  | [optional] |
| **dob** | **Time** |  | [optional] |
| **address** | **String** |  | [optional] |
| **contact_name** | **String** |  | [optional] |
| **contact_number** | **String** |  | [optional] |
| **contact_relationship** | **String** |  | [optional] |
| **office** | **String** |  | [optional] |
| **social_security_status** | **Integer** |  | [optional] |
| **method_payment** | **Integer** |  | [optional] |
| **secondary_email** | **String** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **social_security_value** | **Float** |  | [optional] |
| **withholding_tax** | **Float** |  | [optional] |
| **is_head_office** | **Boolean** |  | [optional] |
| **company_branch** | **String** |  | [optional] |
| **marital_status** | **Integer** |  | [optional] |
| **current_address** | **String** |  | [optional] |
| **department_id** | **Integer** |  | [optional] |
| **first_name_foreign** | **String** |  | [optional] |
| **last_name_foreign** | **String** |  | [optional] |
| **is_social_security_registered** | **Boolean** |  | [optional] |
| **bank_branch_code** | **String** |  | [optional] |
| **id_card** | **Integer** |  | [optional] |
| **household_registration** | **Integer** |  | [optional] |
| **nickname** | **String** |  | [optional] |
| **nickname_foreign** | **String** |  | [optional] |
| **line_id** | **String** |  | [optional] |
| **conditions_withholding_tax** | [**OneOfConditionsOfWithholdingTax**](OneOfConditionsOfWithholdingTax.md) |  | [optional] |
| **paid_period** | [**OneOfPaidPeriod**](OneOfPaidPeriod.md) |  | [optional] |
| **bank** | [**OneOfBank**](OneOfBank.md) |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **gallery_id_card** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **gallery_household_registration** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **payroll_detail** | [**Array&lt;PayrollDetail&gt;**](PayrollDetail.md) |  | [optional] |
| **department** | [**OneOfDepartment**](OneOfDepartment.md) |  | [optional] |
| **reason** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::EmployeeModel.new(
  id: null,
  company_id: null,
  prefix: null,
  first_name: null,
  last_name: null,
  salary: null,
  identitfication_number: null,
  passport_number: null,
  profile_image: null,
  mobile: null,
  commission: null,
  remarks: null,
  title: null,
  gallery_id: null,
  bank_id: null,
  branch: null,
  account_number: null,
  account_type: null,
  start_date: null,
  end_date: null,
  internal_note: null,
  is_active: null,
  created_on: null,
  modified_on: null,
  created_by: null,
  modified_by: null,
  type: null,
  code: null,
  salary_type: null,
  social_security_number: null,
  employer_social_security_rate: null,
  employee_social_security_rate: null,
  email: null,
  dob: null,
  address: null,
  contact_name: null,
  contact_number: null,
  contact_relationship: null,
  office: null,
  social_security_status: null,
  method_payment: null,
  secondary_email: null,
  is_delete: null,
  social_security_value: null,
  withholding_tax: null,
  is_head_office: null,
  company_branch: null,
  marital_status: null,
  current_address: null,
  department_id: null,
  first_name_foreign: null,
  last_name_foreign: null,
  is_social_security_registered: null,
  bank_branch_code: null,
  id_card: null,
  household_registration: null,
  nickname: null,
  nickname_foreign: null,
  line_id: null,
  conditions_withholding_tax: null,
  paid_period: null,
  bank: null,
  company: null,
  gallery: null,
  gallery_id_card: null,
  gallery_household_registration: null,
  payroll_detail: null,
  department: null,
  reason: null
)
```

