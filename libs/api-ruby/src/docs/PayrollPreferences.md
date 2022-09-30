# OpenapiClient::PayrollPreferences

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **company_id** | **Integer** |  | [optional] |
| **is_social_security_registered** | **Boolean** |  | [optional] |
| **employer_account_number** | **String** |  | [optional] |
| **employer_account_branch** | **String** |  | [optional] |
| **k_corporate_client_code** | **String** |  | [optional] |
| **k_corporate_account_number** | **String** |  | [optional] |
| **payroll_bank_account_id** | **Integer** |  | [optional] |
| **k_connect_product_code** | [**KConnectProductCode**](KConnectProductCode.md) |  | [optional] |
| **overtime_pnd** | **Integer** |  | [optional] |
| **commission_pnd** | **Integer** |  | [optional] |
| **bonus_pnd** | **Integer** |  | [optional] |
| **allowance_pnd** | **Integer** |  | [optional] |
| **cola_pnd** | **Integer** |  | [optional] |
| **medical_expense_pnd** | **Integer** |  | [optional] |
| **accommodation_pnd** | **Integer** |  | [optional] |
| **director_remuneration_pnd** | **Integer** |  | [optional] |
| **other_addition_pnd** | **Integer** |  | [optional] |
| **access_k_connect** | **Boolean** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::PayrollPreferences.new(
  company_id: null,
  is_social_security_registered: null,
  employer_account_number: null,
  employer_account_branch: null,
  k_corporate_client_code: null,
  k_corporate_account_number: null,
  payroll_bank_account_id: null,
  k_connect_product_code: null,
  overtime_pnd: null,
  commission_pnd: null,
  bonus_pnd: null,
  allowance_pnd: null,
  cola_pnd: null,
  medical_expense_pnd: null,
  accommodation_pnd: null,
  director_remuneration_pnd: null,
  other_addition_pnd: null,
  access_k_connect: null
)
```

