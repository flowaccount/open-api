# OpenapiClient::ExpenseList

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **vendor_company_id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **status** | [**ExpenseStatus**](ExpenseStatus.md) |  | [optional] |
| **receipt_image** | **String** |  | [optional] |
| **value** | **Float** |  | [optional] |
| **description** | **String** |  | [optional] |
| **expense_category_id** | **Integer** |  | [optional] |
| **document_serial** | **String** |  | [optional] |
| **document_id** | **String** |  | [optional] |
| **published_on** | **Time** |  | [optional] |
| **expense_date** | **Time** |  | [optional] |
| **document_date** | **Time** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **published** | **Boolean** |  | [optional] |
| **approved** | **Boolean** |  | [optional] |
| **approved_by** | **Integer** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **is_tax** | **Boolean** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **tax_refundable** | **Boolean** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **reconciled** | **Boolean** |  | [optional] |
| **nullable_contact_id** | **Integer** |  | [optional] |
| **bank_account_number** | **String** |  | [optional] |
| **is_vat_inclusive** | **Boolean** |  | [optional] |
| **method_payment** | [**OneOfPaymentMethod**](OneOfPaymentMethod.md) |  | [optional] |
| **vendor_name** | **String** |  | [optional] |
| **address_local** | **String** |  | [optional] |
| **address_local_line2** | **String** |  | [optional] |
| **address_local_line3** | **String** |  | [optional] |
| **company_tax_id** | **String** |  | [optional] |
| **branch** | **String** |  | [optional] |
| **vat_rate** | **Integer** |  | [optional] |
| **tax** | **Float** |  | [optional] |
| **value_include_vat** | **Float** |  | [optional] |
| **vat_amount** | **Float** |  | [optional] |
| **document_serial_no_prefix** | **Integer** |  | [optional] |
| **withholding** | **Integer** |  | [optional] |
| **charge** | **Float** |  | [optional] |
| **date_payment** | **Time** |  | [optional] |
| **check_number** | **String** |  | [optional] |
| **check_bank_id** | **String** |  | [optional] |
| **check_date_paid** | **Time** |  | [optional] |
| **transfer_bank_id** | **String** |  | [optional] |
| **collected** | **Float** |  | [default to 0] |
| **outstanding** | **Float** |  | [default to 0] |
| **payment_with_held** | **Float** |  | [default to 0] |
| **reset_transaction_id** | **Integer** |  | [optional] |
| **bank_account_id** | **Integer** |  | [optional] |
| **rule_compile_status** | [**RuleCompileStatus**](RuleCompileStatus.md) |  | [optional] |
| **remaining_collected** | **Float** |  | [optional] |
| **remaining_collected_type** | [**OneOfRemainingCollectedType**](OneOfRemainingCollectedType.md) |  | [optional] |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **vendor_company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **expense_category** | [**OneOfExpenseCategory**](OneOfExpenseCategory.md) |  | [optional] |
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **contact** | [**OneOfContact**](OneOfContact.md) |  | [optional] |
| **running_number_type** | **Integer** |  | [optional] |
| **running_modified_on** | **Time** |  | [optional] |
| **is_foreign_currency** | **Boolean** |  | [optional] |
| **foreign_currency** | [**OneOfCurrency**](OneOfCurrency.md) |  | [optional] |
| **exchange_rate** | **Float** |  | [optional] |
| **foreign_value** | **Float** |  | [optional] |
| **exempt_amount** | **Float** |  | [optional] |
| **vatable_amount** | **Float** |  | [optional] |
| **total_after_discount** | **Float** |  | [optional] |
| **due_date** | **Time** |  | [optional] |
| **sub_total** | **Float** |  | [optional] |
| **payroll_detail** | [**Array&lt;PayrollDetail&gt;**](PayrollDetail.md) |  | [optional] |
| **batch_tax_filing_id** | **Integer** |  | [optional] |
| **batch_tax_filing** | [**OneOfBatchTaxFiling**](OneOfBatchTaxFiling.md) |  | [optional] |
| **supplier_invoice_status** | [**OneOfSupplierInvoiceStatus**](OneOfSupplierInvoiceStatus.md) |  | [optional] |
| **sale_and_purchase_channel** | **String** |  | [optional] |
| **petty_cash_name** | **String** |  | [optional] |
| **petty_cash_id** | **Integer** |  | [optional] |
| **cheque_id** | **Integer** |  | [optional] |
| **credit_card_id** | **Integer** |  | [optional] |
| **other_channel_id** | **Integer** |  | [optional] |
| **cheque_cashing_date** | **Time** |  | [optional] |
| **auto_create_withholding_tax** | **Boolean** |  | [optional] |
| **withholding_tax_income_type** | [**OneOfIncomeType**](OneOfIncomeType.md) |  | [optional] |
| **withholding_tax_income_description** | **String** |  | [optional] |
| **withholding_tax_entity** | [**OneOfEntity**](OneOfEntity.md) |  | [optional] |
| **exchange_ratio** | **Float** |  | [optional] |
| **is_manual_rate** | **Boolean** |  | [optional] |
| **exchange_rate_date** | **Time** |  | [optional] |
| **company_currency_id** | **Integer** |  | [optional] |
| **foreign_inline_vat_value** | **Float** |  | [optional] |
| **foreign_inline_discount_value** | **Float** |  | [optional] |
| **foreign_vat_amount** | **Float** |  | [optional] |
| **foreign_deduction_amount** | **Float** |  | [optional] |
| **project_id** | **Integer** |  | [optional] |
| **is_manual_vat** | **Boolean** |  | [optional] |
| **external_document_id** | **String** |  | [optional] |
| **batch_id** | **String** |  | [optional] |
| **document_references** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **referenced_to_me** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **referenced_by_me** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **status_int** | **Integer** |  | [optional] |
| **partial_payment_method** | [**OneOfPartialPaymentMethod**](OneOfPartialPaymentMethod.md) |  | [optional] |
| **ref_document_status** | **Integer** |  | [optional] |
| **ref_document_status_string** | **String** |  | [optional] |
| **is_re_calculate** | **Boolean** |  | [optional] |
| **inline_vat_value** | **Float** |  | [optional] |
| **inline_discount_value** | **Float** |  | [optional] |
| **is_migrate** | **Boolean** |  | [optional] |
| **vat_value** | **Float** |  | [optional] |
| **deduction_amount** | **Float** |  | [optional] |
| **payment_deduction_type** | [**OneOfDeductionType**](OneOfDeductionType.md) |  | [optional] |
| **document_deduction_type** | [**OneOfDeductionType**](OneOfDeductionType.md) |  | [optional] |
| **is_inline_discount** | **Boolean** |  | [optional] |
| **is_inline_vat** | **Boolean** |  | [optional] |
| **contact_id** | **Integer** |  | [optional] |
| **value_exclude_vat** | **Float** |  | [optional] |
| **rounding_adjustment** | **Float** |  | [optional] |
| **name** | **String** |  | [optional] |
| **internal_notes** | **String** |  | [optional] |
| **project_name** | **String** |  | [optional] |
| **project_name_and_project_deatil** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::ExpenseList.new(
  id: null,
  vendor_company_id: null,
  company_id: null,
  status: null,
  receipt_image: null,
  value: null,
  description: null,
  expense_category_id: null,
  document_serial: null,
  document_id: null,
  published_on: null,
  expense_date: null,
  document_date: null,
  created_on: null,
  created_by: null,
  modified_on: null,
  published: null,
  approved: null,
  approved_by: null,
  remarks: null,
  is_tax: null,
  is_delete: null,
  tax_refundable: null,
  gallery_id: null,
  reconciled: null,
  nullable_contact_id: null,
  bank_account_number: null,
  is_vat_inclusive: null,
  method_payment: null,
  vendor_name: null,
  address_local: null,
  address_local_line2: null,
  address_local_line3: null,
  company_tax_id: null,
  branch: null,
  vat_rate: null,
  tax: null,
  value_include_vat: null,
  vat_amount: null,
  document_serial_no_prefix: null,
  withholding: null,
  charge: null,
  date_payment: null,
  check_number: null,
  check_bank_id: null,
  check_date_paid: null,
  transfer_bank_id: null,
  collected: null,
  outstanding: null,
  payment_with_held: null,
  reset_transaction_id: null,
  bank_account_id: null,
  rule_compile_status: null,
  remaining_collected: null,
  remaining_collected_type: null,
  company: null,
  vendor_company: null,
  expense_category: null,
  gallery: null,
  contact: null,
  running_number_type: null,
  running_modified_on: null,
  is_foreign_currency: null,
  foreign_currency: null,
  exchange_rate: null,
  foreign_value: null,
  exempt_amount: null,
  vatable_amount: null,
  total_after_discount: null,
  due_date: null,
  sub_total: null,
  payroll_detail: null,
  batch_tax_filing_id: null,
  batch_tax_filing: null,
  supplier_invoice_status: null,
  sale_and_purchase_channel: null,
  petty_cash_name: null,
  petty_cash_id: null,
  cheque_id: null,
  credit_card_id: null,
  other_channel_id: null,
  cheque_cashing_date: null,
  auto_create_withholding_tax: null,
  withholding_tax_income_type: null,
  withholding_tax_income_description: null,
  withholding_tax_entity: null,
  exchange_ratio: null,
  is_manual_rate: null,
  exchange_rate_date: null,
  company_currency_id: null,
  foreign_inline_vat_value: null,
  foreign_inline_discount_value: null,
  foreign_vat_amount: null,
  foreign_deduction_amount: null,
  project_id: null,
  is_manual_vat: null,
  external_document_id: null,
  batch_id: null,
  document_references: null,
  referenced_to_me: null,
  referenced_by_me: null,
  status_int: null,
  partial_payment_method: null,
  ref_document_status: null,
  ref_document_status_string: null,
  is_re_calculate: null,
  inline_vat_value: null,
  inline_discount_value: null,
  is_migrate: null,
  vat_value: null,
  deduction_amount: null,
  payment_deduction_type: null,
  document_deduction_type: null,
  is_inline_discount: null,
  is_inline_vat: null,
  contact_id: null,
  value_exclude_vat: null,
  rounding_adjustment: null,
  name: null,
  internal_notes: null,
  project_name: null,
  project_name_and_project_deatil: null
)
```

