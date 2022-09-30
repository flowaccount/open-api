# OpenapiClient::CompanyPreferences

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **company_id** | **Integer** |  | [optional] |
| **show_with_holding** | **Boolean** |  | [optional][default to false] |
| **invoice_prefix** | **String** |  |  |
| **quotation_prefix** | **String** |  |  |
| **billing_note_prefix** | **String** |  |  |
| **receipt_prefix** | **String** |  |  |
| **purchase_order_prefix** | **String** |  |  |
| **cash_invoice_prefix** | **String** |  |  |
| **receivable_invoice_prefix** | **String** |  |  |
| **cash_invoice_starting_number** | **Integer** |  | [optional] |
| **receipt_starting_number** | **Integer** |  | [optional] |
| **quotation_starting_number** | **Integer** |  | [optional] |
| **billing_note_starting_number** | **Integer** |  | [optional] |
| **purchase_order_starting_number** | **Integer** |  | [optional] |
| **purchase_order_title_en** | **String** |  |  |
| **quotation_title_en** | **String** |  |  |
| **billing_note_title_en** | **String** |  |  |
| **invoice_title_en** | **String** |  |  |
| **receipt_title_en** | **String** |  |  |
| **payment_slip_title_en** | **String** |  |  |
| **purchase_order_title_th** | **String** |  |  |
| **quotation_title_th** | **String** |  |  |
| **billing_note_title_th** | **String** |  |  |
| **invoice_title_th** | **String** |  |  |
| **receipt_title_th** | **String** |  |  |
| **payment_slip_title_th** | **String** |  |  |
| **business_type** | [**BusinessType**](BusinessType.md) |  | [optional] |
| **terms_agreement** | **String** |  | [optional] |
| **default_remarks** | **String** |  | [optional] |
| **invoice_starting_number** | **Integer** |  | [optional] |
| **cash_invoice_title_en** | **String** |  |  |
| **cash_invoice_title_th** | **String** |  |  |
| **receivable_invoice_title_th** | **String** |  |  |
| **receivable_invoice_title_en** | **String** |  |  |
| **running_number_type** | [**RunningNumberType**](RunningNumberType.md) |  | [optional] |
| **purchase_order_starting_year** | **Integer** |  | [optional] |
| **quotation_starting_year** | **Integer** |  | [optional] |
| **billing_note_starting_year** | **Integer** |  | [optional] |
| **invoice_starting_year** | **Integer** |  | [optional] |
| **cash_invoice_starting_year** | **Integer** |  | [optional] |
| **receipt_starting_year** | **Integer** |  | [optional] |
| **purchase_order_starting_month** | **Integer** |  | [optional] |
| **quotation_starting_month** | **Integer** |  | [optional] |
| **billing_note_starting_month** | **Integer** |  | [optional] |
| **invoice_starting_month** | **Integer** |  | [optional] |
| **cash_invoice_starting_month** | **Integer** |  | [optional] |
| **receipt_starting_month** | **Integer** |  | [optional] |
| **settings_initiated** | **Boolean** |  | [optional][default to false] |
| **running_number_settings_modified_on** | **Time** |  | [optional] |
| **with_holding_tax_prefix** | **String** |  |  |
| **with_holding_tax_starting_number** | **Integer** |  | [optional] |
| **with_holding_tax_starting_month** | **Integer** |  | [optional] |
| **with_holding_tax_starting_year** | **Integer** |  | [optional] |
| **document_templates** | [**DocumentTemplates**](DocumentTemplates.md) |  | [optional] |
| **print_color** | **Boolean** |  | [optional] |
| **template_font** | [**TemplateFont**](TemplateFont.md) |  | [optional] |
| **print_one_invoice** | **Boolean** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **email_message_template** | **String** |  | [optional] |
| **purchase_prefix** | **String** |  |  |
| **purchase_starting_number** | **Integer** |  | [optional] |
| **purchase_title_en** | **String** |  |  |
| **purchase_title_th** | **String** |  |  |
| **purchase_starting_year** | **Integer** |  | [optional] |
| **purchase_starting_month** | **Integer** |  | [optional] |
| **adjust_inventory_prefix** | **String** |  |  |
| **adjust_inventory_starting_number** | **Integer** |  | [optional] |
| **adjust_inventory_starting_month** | **Integer** |  | [optional] |
| **adjust_inventory_starting_year** | **Integer** |  | [optional] |
| **expense_prefix** | **String** |  |  |
| **expense_starting_number** | **Integer** |  | [optional] |
| **expense_starting_month** | **Integer** |  | [optional] |
| **expense_starting_year** | **Integer** |  | [optional] |
| **payment_slip_prefix** | **String** |  |  |
| **payment_slip_starting_number** | **Integer** |  | [optional] |
| **payment_slip_starting_year** | **Integer** |  | [optional] |
| **payment_slip_starting_month** | **Integer** |  | [optional] |
| **cash_invoice_running_number_modified_on** | **Time** |  | [optional] |
| **purchase_order_running_number_modified_on** | **Time** |  | [optional] |
| **quotation_running_number_modified_on** | **Time** |  | [optional] |
| **billing_note_running_number_modified_on** | **Time** |  | [optional] |
| **invoice_running_number_modified_on** | **Time** |  | [optional] |
| **purchase_running_number_modified_on** | **Time** |  | [optional] |
| **receivable_invoice_running_number_modified_on** | **Time** |  | [optional] |
| **payment_slip_running_number_modified_on** | **Time** |  | [optional] |
| **rubber_stamp_url** | **String** |  | [optional] |
| **credit_note_prefix** | **String** |  |  |
| **credit_note_starting_number** | **Integer** |  | [optional] |
| **credit_note_starting_month** | **Integer** |  | [optional] |
| **credit_note_starting_year** | **Integer** |  | [optional] |
| **credit_note_running_number_modified_on** | **Time** |  | [optional] |
| **credit_note_title_en** | **String** |  |  |
| **credit_note_title_th** | **String** |  |  |
| **debit_note_prefix** | **String** |  |  |
| **debit_note_starting_number** | **Integer** |  | [optional] |
| **debit_note_starting_month** | **Integer** |  | [optional] |
| **debit_note_starting_year** | **Integer** |  | [optional] |
| **debit_note_running_number_modified_on** | **Time** |  | [optional] |
| **debit_note_title_en** | **String** |  |  |
| **debit_note_title_th** | **String** |  |  |
| **receipt_running_number_modified_on** | **Time** |  | [optional] |
| **receivable_invoice_starting_number** | **Integer** |  | [optional] |
| **receivable_invoice_starting_month** | **Integer** |  | [optional] |
| **receivable_invoice_starting_year** | **Integer** |  | [optional] |
| **use_partial_receipt** | **Boolean** |  | [optional] |
| **use_cash_invoice** | **Boolean** |  | [optional] |
| **use_short_cash_invoice** | **Boolean** |  | [optional] |
| **general_ledger_running_number_type** | [**RunningNumberType**](RunningNumberType.md) |  | [optional] |
| **journal_voucher_prefix** | **String** |  |  |
| **purchase_voucher_prefix** | **String** |  |  |
| **purchase_voucher_running_number_modified_on** | **Time** |  | [optional] |
| **sales_voucher_prefix** | **String** |  |  |
| **sales_voucher_running_number_modified_on** | **Time** |  | [optional] |
| **payment_voucher_prefix** | **String** |  |  |
| **payment_voucher_running_number_modified_on** | **Time** |  | [optional] |
| **received_voucher_prefix** | **String** |  |  |
| **received_voucher_running_number_modified_on** | **Time** |  | [optional] |
| **conversion_balance_prefix** | **String** |  |  |
| **conversion_balance_running_number_modified_on** | **Time** |  | [optional] |
| **e_tax_email** | **String** |  | [optional] |
| **short_cash_invoice_templates** | [**DocumentTemplates**](DocumentTemplates.md) |  | [optional] |
| **use_billing_note_accounting_rule** | **Boolean** |  | [optional] |
| **billing_note_accounting_rule_modified_on** | **Time** |  | [optional] |
| **template_font_size** | **Float** |  | [optional] |
| **use_multi_currency** | **Boolean** |  | [optional] |
| **expense_title_th** | **String** |  | [optional] |
| **expense_title_en** | **String** |  | [optional] |
| **with_holding_tax_title_th** | **String** |  | [optional] |
| **with_holding_tax_title_en** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::CompanyPreferences.new(
  company_id: null,
  show_with_holding: null,
  invoice_prefix: null,
  quotation_prefix: null,
  billing_note_prefix: null,
  receipt_prefix: null,
  purchase_order_prefix: null,
  cash_invoice_prefix: null,
  receivable_invoice_prefix: null,
  cash_invoice_starting_number: null,
  receipt_starting_number: null,
  quotation_starting_number: null,
  billing_note_starting_number: null,
  purchase_order_starting_number: null,
  purchase_order_title_en: null,
  quotation_title_en: null,
  billing_note_title_en: null,
  invoice_title_en: null,
  receipt_title_en: null,
  payment_slip_title_en: null,
  purchase_order_title_th: null,
  quotation_title_th: null,
  billing_note_title_th: null,
  invoice_title_th: null,
  receipt_title_th: null,
  payment_slip_title_th: null,
  business_type: null,
  terms_agreement: null,
  default_remarks: null,
  invoice_starting_number: null,
  cash_invoice_title_en: null,
  cash_invoice_title_th: null,
  receivable_invoice_title_th: null,
  receivable_invoice_title_en: null,
  running_number_type: null,
  purchase_order_starting_year: null,
  quotation_starting_year: null,
  billing_note_starting_year: null,
  invoice_starting_year: null,
  cash_invoice_starting_year: null,
  receipt_starting_year: null,
  purchase_order_starting_month: null,
  quotation_starting_month: null,
  billing_note_starting_month: null,
  invoice_starting_month: null,
  cash_invoice_starting_month: null,
  receipt_starting_month: null,
  settings_initiated: null,
  running_number_settings_modified_on: null,
  with_holding_tax_prefix: null,
  with_holding_tax_starting_number: null,
  with_holding_tax_starting_month: null,
  with_holding_tax_starting_year: null,
  document_templates: null,
  print_color: null,
  template_font: null,
  print_one_invoice: null,
  remarks: null,
  email_message_template: null,
  purchase_prefix: null,
  purchase_starting_number: null,
  purchase_title_en: null,
  purchase_title_th: null,
  purchase_starting_year: null,
  purchase_starting_month: null,
  adjust_inventory_prefix: null,
  adjust_inventory_starting_number: null,
  adjust_inventory_starting_month: null,
  adjust_inventory_starting_year: null,
  expense_prefix: null,
  expense_starting_number: null,
  expense_starting_month: null,
  expense_starting_year: null,
  payment_slip_prefix: null,
  payment_slip_starting_number: null,
  payment_slip_starting_year: null,
  payment_slip_starting_month: null,
  cash_invoice_running_number_modified_on: null,
  purchase_order_running_number_modified_on: null,
  quotation_running_number_modified_on: null,
  billing_note_running_number_modified_on: null,
  invoice_running_number_modified_on: null,
  purchase_running_number_modified_on: null,
  receivable_invoice_running_number_modified_on: null,
  payment_slip_running_number_modified_on: null,
  rubber_stamp_url: null,
  credit_note_prefix: null,
  credit_note_starting_number: null,
  credit_note_starting_month: null,
  credit_note_starting_year: null,
  credit_note_running_number_modified_on: null,
  credit_note_title_en: null,
  credit_note_title_th: null,
  debit_note_prefix: null,
  debit_note_starting_number: null,
  debit_note_starting_month: null,
  debit_note_starting_year: null,
  debit_note_running_number_modified_on: null,
  debit_note_title_en: null,
  debit_note_title_th: null,
  receipt_running_number_modified_on: null,
  receivable_invoice_starting_number: null,
  receivable_invoice_starting_month: null,
  receivable_invoice_starting_year: null,
  use_partial_receipt: null,
  use_cash_invoice: null,
  use_short_cash_invoice: null,
  general_ledger_running_number_type: null,
  journal_voucher_prefix: null,
  purchase_voucher_prefix: null,
  purchase_voucher_running_number_modified_on: null,
  sales_voucher_prefix: null,
  sales_voucher_running_number_modified_on: null,
  payment_voucher_prefix: null,
  payment_voucher_running_number_modified_on: null,
  received_voucher_prefix: null,
  received_voucher_running_number_modified_on: null,
  conversion_balance_prefix: null,
  conversion_balance_running_number_modified_on: null,
  e_tax_email: null,
  short_cash_invoice_templates: null,
  use_billing_note_accounting_rule: null,
  billing_note_accounting_rule_modified_on: null,
  template_font_size: null,
  use_multi_currency: null,
  expense_title_th: null,
  expense_title_en: null,
  with_holding_tax_title_th: null,
  with_holding_tax_title_en: null
)
```

