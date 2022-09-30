# OpenapiClient::Payroll

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **start_date** | **Time** |  | [optional] |
| **end_date** | **Time** |  | [optional] |
| **payment_cycle** | **Integer** |  | [optional] |
| **status** | [**PayrollStatus**](PayrollStatus.md) |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_by** | **Integer** |  | [optional] |
| **expense_id** | **Integer** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **total** | **Float** |  | [optional] |
| **bank_id** | **Integer** |  | [optional] |
| **account_number** | **String** |  | [optional] |
| **add_amount** | **Float** |  | [optional] |
| **deduct_amount** | **Float** |  | [optional] |
| **net_total** | **Float** |  | [optional] |
| **running_number_type** | **Integer** |  | [optional] |
| **date_payment** | **Time** |  | [optional] |
| **document_date** | **Time** |  | [optional] |
| **total_payroll_cash** | **Float** |  | [optional] |
| **total_payroll_transfer** | **Float** |  | [optional] |
| **fee** | **Float** |  | [optional] |
| **payment_remarks** | **String** |  | [optional] |
| **employer_account_number** | **String** |  | [optional] |
| **employer_account_branch** | **String** |  | [optional] |
| **bank_account_id** | **Integer** |  | [optional] |
| **account_type** | [**OneOfBankAccountType**](OneOfBankAccountType.md) |  | [optional] |
| **reference_id** | **String** |  | [optional] |
| **payroll_version** | **Integer** |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **created_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **modified_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **payroll_detail** | [**Array&lt;PayrollDetail&gt;**](PayrollDetail.md) |  | [optional] |
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **is_migrate** | **Boolean** |  | [optional] |
| **rule_compile_status** | [**RuleCompileStatus**](RuleCompileStatus.md) |  | [optional] |
| **is_partial_payments** | **Boolean** |  | [optional] |
| **paid_period** | [**OneOfPaidPeriod**](OneOfPaidPeriod.md) |  | [optional] |
| **social_security_percent** | **Float** |  | [optional][default to 5] |
| **status_int** | **Integer** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::Payroll.new(
  id: null,
  company_id: null,
  start_date: null,
  end_date: null,
  payment_cycle: null,
  status: null,
  is_delete: null,
  created_on: null,
  modified_on: null,
  created_by: null,
  modified_by: null,
  expense_id: null,
  gallery_id: null,
  remarks: null,
  total: null,
  bank_id: null,
  account_number: null,
  add_amount: null,
  deduct_amount: null,
  net_total: null,
  running_number_type: null,
  date_payment: null,
  document_date: null,
  total_payroll_cash: null,
  total_payroll_transfer: null,
  fee: null,
  payment_remarks: null,
  employer_account_number: null,
  employer_account_branch: null,
  bank_account_id: null,
  account_type: null,
  reference_id: null,
  payroll_version: null,
  company: null,
  created_by_user: null,
  modified_by_user: null,
  payroll_detail: null,
  gallery: null,
  is_migrate: null,
  rule_compile_status: null,
  is_partial_payments: null,
  paid_period: null,
  social_security_percent: null,
  status_int: null
)
```

