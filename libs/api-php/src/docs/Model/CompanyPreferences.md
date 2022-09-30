# # CompanyPreferences

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** |  | [optional]
**show_with_holding** | **bool** |  | [optional] [default to false]
**invoice_prefix** | **string** |  |
**quotation_prefix** | **string** |  |
**billing_note_prefix** | **string** |  |
**receipt_prefix** | **string** |  |
**purchase_order_prefix** | **string** |  |
**cash_invoice_prefix** | **string** |  |
**receivable_invoice_prefix** | **string** |  |
**cash_invoice_starting_number** | **int** |  | [optional]
**receipt_starting_number** | **int** |  | [optional]
**quotation_starting_number** | **int** |  | [optional]
**billing_note_starting_number** | **int** |  | [optional]
**purchase_order_starting_number** | **int** |  | [optional]
**purchase_order_title_en** | **string** |  |
**quotation_title_en** | **string** |  |
**billing_note_title_en** | **string** |  |
**invoice_title_en** | **string** |  |
**receipt_title_en** | **string** |  |
**payment_slip_title_en** | **string** |  |
**purchase_order_title_th** | **string** |  |
**quotation_title_th** | **string** |  |
**billing_note_title_th** | **string** |  |
**invoice_title_th** | **string** |  |
**receipt_title_th** | **string** |  |
**payment_slip_title_th** | **string** |  |
**business_type** | [**\OpenAPI\Client\Model\BusinessType**](BusinessType.md) |  | [optional]
**terms_agreement** | **string** |  | [optional]
**default_remarks** | **string** |  | [optional]
**invoice_starting_number** | **int** |  | [optional]
**cash_invoice_title_en** | **string** |  |
**cash_invoice_title_th** | **string** |  |
**receivable_invoice_title_th** | **string** |  |
**receivable_invoice_title_en** | **string** |  |
**running_number_type** | [**\OpenAPI\Client\Model\RunningNumberType**](RunningNumberType.md) |  | [optional]
**purchase_order_starting_year** | **int** |  | [optional]
**quotation_starting_year** | **int** |  | [optional]
**billing_note_starting_year** | **int** |  | [optional]
**invoice_starting_year** | **int** |  | [optional]
**cash_invoice_starting_year** | **int** |  | [optional]
**receipt_starting_year** | **int** |  | [optional]
**purchase_order_starting_month** | **int** |  | [optional]
**quotation_starting_month** | **int** |  | [optional]
**billing_note_starting_month** | **int** |  | [optional]
**invoice_starting_month** | **int** |  | [optional]
**cash_invoice_starting_month** | **int** |  | [optional]
**receipt_starting_month** | **int** |  | [optional]
**settings_initiated** | **bool** |  | [optional] [default to false]
**running_number_settings_modified_on** | **\DateTime** |  | [optional]
**with_holding_tax_prefix** | **string** |  |
**with_holding_tax_starting_number** | **int** |  | [optional]
**with_holding_tax_starting_month** | **int** |  | [optional]
**with_holding_tax_starting_year** | **int** |  | [optional]
**document_templates** | [**\OpenAPI\Client\Model\DocumentTemplates**](DocumentTemplates.md) |  | [optional]
**print_color** | **bool** |  | [optional]
**template_font** | [**\OpenAPI\Client\Model\TemplateFont**](TemplateFont.md) |  | [optional]
**print_one_invoice** | **bool** |  | [optional]
**remarks** | **string** |  | [optional]
**email_message_template** | **string** |  | [optional]
**purchase_prefix** | **string** |  |
**purchase_starting_number** | **int** |  | [optional]
**purchase_title_en** | **string** |  |
**purchase_title_th** | **string** |  |
**purchase_starting_year** | **int** |  | [optional]
**purchase_starting_month** | **int** |  | [optional]
**adjust_inventory_prefix** | **string** |  |
**adjust_inventory_starting_number** | **int** |  | [optional]
**adjust_inventory_starting_month** | **int** |  | [optional]
**adjust_inventory_starting_year** | **int** |  | [optional]
**expense_prefix** | **string** |  |
**expense_starting_number** | **int** |  | [optional]
**expense_starting_month** | **int** |  | [optional]
**expense_starting_year** | **int** |  | [optional]
**payment_slip_prefix** | **string** |  |
**payment_slip_starting_number** | **int** |  | [optional]
**payment_slip_starting_year** | **int** |  | [optional]
**payment_slip_starting_month** | **int** |  | [optional]
**cash_invoice_running_number_modified_on** | **\DateTime** |  | [optional]
**purchase_order_running_number_modified_on** | **\DateTime** |  | [optional]
**quotation_running_number_modified_on** | **\DateTime** |  | [optional]
**billing_note_running_number_modified_on** | **\DateTime** |  | [optional]
**invoice_running_number_modified_on** | **\DateTime** |  | [optional]
**purchase_running_number_modified_on** | **\DateTime** |  | [optional]
**receivable_invoice_running_number_modified_on** | **\DateTime** |  | [optional]
**payment_slip_running_number_modified_on** | **\DateTime** |  | [optional]
**rubber_stamp_url** | **string** |  | [optional]
**credit_note_prefix** | **string** |  |
**credit_note_starting_number** | **int** |  | [optional]
**credit_note_starting_month** | **int** |  | [optional]
**credit_note_starting_year** | **int** |  | [optional]
**credit_note_running_number_modified_on** | **\DateTime** |  | [optional]
**credit_note_title_en** | **string** |  |
**credit_note_title_th** | **string** |  |
**debit_note_prefix** | **string** |  |
**debit_note_starting_number** | **int** |  | [optional]
**debit_note_starting_month** | **int** |  | [optional]
**debit_note_starting_year** | **int** |  | [optional]
**debit_note_running_number_modified_on** | **\DateTime** |  | [optional]
**debit_note_title_en** | **string** |  |
**debit_note_title_th** | **string** |  |
**receipt_running_number_modified_on** | **\DateTime** |  | [optional]
**receivable_invoice_starting_number** | **int** |  | [optional]
**receivable_invoice_starting_month** | **int** |  | [optional]
**receivable_invoice_starting_year** | **int** |  | [optional]
**use_partial_receipt** | **bool** |  | [optional]
**use_cash_invoice** | **bool** |  | [optional]
**use_short_cash_invoice** | **bool** |  | [optional]
**general_ledger_running_number_type** | [**\OpenAPI\Client\Model\RunningNumberType**](RunningNumberType.md) |  | [optional]
**journal_voucher_prefix** | **string** |  |
**purchase_voucher_prefix** | **string** |  |
**purchase_voucher_running_number_modified_on** | **\DateTime** |  | [optional]
**sales_voucher_prefix** | **string** |  |
**sales_voucher_running_number_modified_on** | **\DateTime** |  | [optional]
**payment_voucher_prefix** | **string** |  |
**payment_voucher_running_number_modified_on** | **\DateTime** |  | [optional]
**received_voucher_prefix** | **string** |  |
**received_voucher_running_number_modified_on** | **\DateTime** |  | [optional]
**conversion_balance_prefix** | **string** |  |
**conversion_balance_running_number_modified_on** | **\DateTime** |  | [optional]
**e_tax_email** | **string** |  | [optional]
**short_cash_invoice_templates** | [**\OpenAPI\Client\Model\DocumentTemplates**](DocumentTemplates.md) |  | [optional]
**use_billing_note_accounting_rule** | **bool** |  | [optional]
**billing_note_accounting_rule_modified_on** | **\DateTime** |  | [optional]
**template_font_size** | **float** |  | [optional]
**use_multi_currency** | **bool** |  | [optional]
**expense_title_th** | **string** |  | [optional]
**expense_title_en** | **string** |  | [optional]
**with_holding_tax_title_th** | **string** |  | [optional]
**with_holding_tax_title_en** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
