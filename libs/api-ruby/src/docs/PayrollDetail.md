# OpenapiClient::PayrollDetail

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **payroll_id** | **Integer** |  | [optional] |
| **employee_id** | **Integer** |  | [optional] |
| **salary** | **Float** |  | [optional] |
| **social_security_value** | **Float** |  | [optional] |
| **commission** | **Float** |  | [optional] |
| **bonus** | **Float** |  | [optional] |
| **deduction** | **Float** |  | [optional] |
| **withholding_tax** | **Float** |  | [optional] |
| **status** | [**PayrollDetailStatus**](PayrollDetailStatus.md) |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **withheld** | **Float** |  | [optional] |
| **date_payment** | **Time** |  | [optional] |
| **fee** | **Float** |  | [optional] |
| **ref** | **String** |  | [optional] |
| **transaction_id** | **String** |  | [optional] |
| **amount** | **Float** |  | [optional] |
| **pay_status** | **Integer** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **expense_id** | **Integer** |  | [optional] |
| **overtime** | **Float** |  | [optional] |
| **advance** | **Float** |  | [optional] |
| **other_addition** | **Float** |  | [optional] |
| **other_deduction** | **Float** |  | [optional] |
| **provident_fund** | **Float** |  | [optional] |
| **security_money** | **Float** |  | [optional] |
| **value** | **Float** |  | [optional] |
| **note** | **String** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **last_modified_by** | **Integer** |  | [optional] |
| **employer_social_security** | **Float** |  | [optional] |
| **allowance** | **Float** |  | [optional] |
| **cola** | **Float** |  | [optional] |
| **medical_expense** | **Float** |  | [optional] |
| **accommodation** | **Float** |  | [optional] |
| **director_remuneration** | **Float** |  | [optional] |
| **method_payment** | **Integer** |  | [optional] |
| **bank_id** | **Integer** |  | [optional] |
| **account_number** | **String** |  | [optional] |
| **account_number_masking** | **String** |  | [optional] |
| **employee_title** | **String** |  | [optional] |
| **employee_code** | **String** |  | [optional] |
| **employee_first_name** | **String** |  | [optional] |
| **employee_last_name** | **String** |  | [optional] |
| **employee_first_name_foreign** | **String** |  | [optional] |
| **employee_last_name_foreign** | **String** |  | [optional] |
| **employee_start_date** | **Time** |  | [optional] |
| **is_social_security_registered** | **Boolean** |  | [optional] |
| **bank_branch_code** | **String** |  | [optional] |
| **account_type** | [**OneOfBankAccountType**](OneOfBankAccountType.md) |  | [optional] |
| **reference_id** | **String** |  | [optional] |
| **is_migrate** | **Boolean** |  | [optional] |
| **employee** | [**OneOfEmployee**](OneOfEmployee.md) |  | [optional] |
| **expense_list** | [**OneOfExpenseList**](OneOfExpenseList.md) |  | [optional] |
| **payroll** | [**OneOfPayroll**](OneOfPayroll.md) |  | [optional] |
| **bank** | [**OneOfBank**](OneOfBank.md) |  | [optional] |
| **last_modified_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **rule_compile_status** | [**RuleCompileStatus**](RuleCompileStatus.md) |  | [optional] |
| **employer_account_branch** | **String** |  | [optional] |
| **employer_account_number** | **String** |  | [optional] |
| **bank_account_id** | **Integer** |  | [optional] |
| **payment_remarks** | **String** |  | [optional] |
| **payroll_payment_id** | **Integer** |  | [optional] |
| **kc_processing_status** | **Integer** |  | [optional] |
| **department_id** | **Integer** |  | [optional] |
| **department_name** | **String** |  | [optional] |
| **department_code** | **String** |  | [optional] |
| **work_days** | **Float** |  | [optional] |
| **wage** | **Float** |  | [optional] |
| **is_social_security_auto_cal** | **Boolean** |  | [optional] |
| **social_security_percent** | **Float** |  | [optional][default to 5] |
| **send_email_status** | [**OneOfSendEmailStatus**](OneOfSendEmailStatus.md) |  | [optional] |
| **student_loan** | **Float** |  | [optional] |
| **conditions_withholding_tax** | [**OneOfConditionsOfWithholdingTax**](OneOfConditionsOfWithholdingTax.md) |  | [optional] |
| **overtime_pnd** | **Integer** |  | [optional] |
| **commission_pnd** | **Integer** |  | [optional] |
| **bonus_pnd** | **Integer** |  | [optional] |
| **allowance_pnd** | **Integer** |  | [optional] |
| **cola_pnd** | **Integer** |  | [optional] |
| **medical_expense_pnd** | **Integer** |  | [optional] |
| **accommodation_pnd** | **Integer** |  | [optional] |
| **director_remuneration_pnd** | **Integer** |  | [optional] |
| **other_addition_pnd** | **Integer** |  | [optional] |
| **withholding_tax401** | **Float** |  | [optional] |
| **withholding_tax402** | **Float** |  | [optional] |
| **status_int** | **Integer** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::PayrollDetail.new(
  id: null,
  payroll_id: null,
  employee_id: null,
  salary: null,
  social_security_value: null,
  commission: null,
  bonus: null,
  deduction: null,
  withholding_tax: null,
  status: null,
  is_delete: null,
  withheld: null,
  date_payment: null,
  fee: null,
  ref: null,
  transaction_id: null,
  amount: null,
  pay_status: null,
  remarks: null,
  expense_id: null,
  overtime: null,
  advance: null,
  other_addition: null,
  other_deduction: null,
  provident_fund: null,
  security_money: null,
  value: null,
  note: null,
  created_on: null,
  created_by: null,
  modified_on: null,
  last_modified_by: null,
  employer_social_security: null,
  allowance: null,
  cola: null,
  medical_expense: null,
  accommodation: null,
  director_remuneration: null,
  method_payment: null,
  bank_id: null,
  account_number: null,
  account_number_masking: null,
  employee_title: null,
  employee_code: null,
  employee_first_name: null,
  employee_last_name: null,
  employee_first_name_foreign: null,
  employee_last_name_foreign: null,
  employee_start_date: null,
  is_social_security_registered: null,
  bank_branch_code: null,
  account_type: null,
  reference_id: null,
  is_migrate: null,
  employee: null,
  expense_list: null,
  payroll: null,
  bank: null,
  last_modified_by_user: null,
  rule_compile_status: null,
  employer_account_branch: null,
  employer_account_number: null,
  bank_account_id: null,
  payment_remarks: null,
  payroll_payment_id: null,
  kc_processing_status: null,
  department_id: null,
  department_name: null,
  department_code: null,
  work_days: null,
  wage: null,
  is_social_security_auto_cal: null,
  social_security_percent: null,
  send_email_status: null,
  student_loan: null,
  conditions_withholding_tax: null,
  overtime_pnd: null,
  commission_pnd: null,
  bonus_pnd: null,
  allowance_pnd: null,
  cola_pnd: null,
  medical_expense_pnd: null,
  accommodation_pnd: null,
  director_remuneration_pnd: null,
  other_addition_pnd: null,
  withholding_tax401: null,
  withholding_tax402: null,
  status_int: null
)
```

