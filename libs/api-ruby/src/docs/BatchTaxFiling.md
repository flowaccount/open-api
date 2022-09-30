# OpenapiClient::BatchTaxFiling

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  |  |
| **status** | [**BatchTaxFilingStatus**](BatchTaxFilingStatus.md) |  | [optional] |
| **claim_date** | **Time** |  |  |
| **total_buy_value** | **Float** |  | [optional] |
| **total_buy_vat_value** | **Float** |  | [optional] |
| **total_sell_value** | **Float** |  | [optional] |
| **total_sell_vat_value** | **Float** |  | [optional] |
| **brought_forward** | **Float** |  | [optional] |
| **value** | **Float** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **created_by** | **Integer** |  | [optional] |
| **modified_by** | **Integer** |  | [optional] |
| **created_on** | **Time** |  |  |
| **modified_on** | **Time** |  |  |
| **company** | [**OneOfCompany**](OneOfCompany.md) |  | [optional] |
| **created_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **modified_by_user** | [**OneOfUser**](OneOfUser.md) |  | [optional] |
| **date_payment** | **Time** |  | [optional] |
| **charge** | **Float** |  | [optional] |
| **collected** | **Float** |  | [optional] |
| **tax** | **Float** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **payment_with_held** | **Float** |  | [optional] |
| **remaining_collected** | **Float** |  | [optional] |
| **remaining_collected_type** | [**OneOfRemainingCollectedType**](OneOfRemainingCollectedType.md) |  | [optional] |
| **deduction_amount** | **Float** |  | [optional] |
| **payment_deduction_type** | [**OneOfDeductionType**](OneOfDeductionType.md) |  | [optional] |
| **bank_account_id** | **Integer** |  | [optional] |
| **check_number** | **String** |  | [optional] |
| **check_bank_id** | **String** |  | [optional] |
| **transfer_bank_id** | **String** |  | [optional] |
| **bank_account_number** | **String** |  | [optional] |
| **check_date_paid** | **Time** |  | [optional] |
| **method_payment** | [**OneOfPaymentMethod**](OneOfPaymentMethod.md) |  | [optional] |
| **no** | **Integer** |  | [optional] |
| **petty_cash_name** | **String** |  | [optional] |
| **petty_cash_id** | **Integer** |  | [optional] |
| **cheque_id** | **Integer** |  | [optional] |
| **credit_card_id** | **Integer** |  | [optional] |
| **other_channel_id** | **Integer** |  | [optional] |
| **document_serial** | **String** |  | [optional] |
| **document_id** | **String** |  | [optional] |
| **approved** | **Boolean** |  | [optional] |
| **published_on** | **Time** |  | [optional] |
| **document_date** | **Time** |  | [optional] |
| **vat_rate** | **Integer** |  | [optional] |
| **due_date** | **Time** |  | [optional] |
| **name** | **String** |  | [optional] |
| **internal_notes** | **String** |  | [optional] |
| **rounding_adjustment** | **Float** |  | [optional] |
| **gallery** | [**OneOfGallery**](OneOfGallery.md) |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **contact** | [**OneOfContact**](OneOfContact.md) |  | [optional] |
| **contact_id** | **Integer** |  | [optional] |
| **document_references** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **referenced_to_me** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **referenced_by_me** | [**Array&lt;IDocumentReference&gt;**](IDocumentReference.md) |  | [optional] |
| **status_int** | **Integer** |  | [optional] |
| **is_inline_discount** | **Boolean** |  | [optional] |
| **is_inline_vat** | **Boolean** |  | [optional] |
| **vat_value** | **Float** |  | [optional] |
| **document_serial_no_prefix** | **Integer** |  | [optional] |
| **inline_vat_value** | **Float** |  | [optional] |
| **inline_discount_value** | **Float** |  | [optional] |
| **published** | **Boolean** |  | [optional] |
| **is_vat_inclusive** | **Boolean** |  | [optional] |
| **running_number_type** | **Integer** |  | [optional] |
| **running_modified_on** | **Time** |  | [optional] |
| **exempt_amount** | **Float** |  | [optional] |
| **vatable_amount** | **Float** |  | [optional] |
| **total_after_discount** | **Float** |  | [optional] |
| **sub_total** | **Float** |  | [optional] |
| **is_re_calculate** | **Boolean** |  | [optional] |
| **partial_payment_method** | [**OneOfPartialPaymentMethod**](OneOfPartialPaymentMethod.md) |  | [optional] |
| **vat_amount** | **Float** |  | [optional] |
| **is_migrate** | **Boolean** |  | [optional] |
| **reset_transaction_id** | **Integer** |  | [optional] |
| **rule_compile_status** | [**OneOfRuleCompileStatus**](OneOfRuleCompileStatus.md) |  | [optional] |
| **cheque_cashing_date** | **Time** |  | [optional] |
| **project_id** | **Integer** |  | [optional] |
| **project_name** | **String** |  | [optional] |
| **project_name_and_project_deatil** | **String** |  | [optional] |
| **reconciled** | **Boolean** |  | [optional] |
| **outstanding** | **Float** |  | [optional] |
| **withholding** | **Integer** |  | [optional] |
| **ref_document_status** | **Integer** |  | [optional] |
| **ref_document_status_string** | **String** |  | [optional] |
| **document_deduction_type** | [**OneOfDeductionType**](OneOfDeductionType.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::BatchTaxFiling.new(
  id: null,
  company_id: null,
  status: null,
  claim_date: null,
  total_buy_value: null,
  total_buy_vat_value: null,
  total_sell_value: null,
  total_sell_vat_value: null,
  brought_forward: null,
  value: null,
  is_delete: null,
  created_by: null,
  modified_by: null,
  created_on: null,
  modified_on: null,
  company: null,
  created_by_user: null,
  modified_by_user: null,
  date_payment: null,
  charge: null,
  collected: null,
  tax: null,
  remarks: null,
  payment_with_held: null,
  remaining_collected: null,
  remaining_collected_type: null,
  deduction_amount: null,
  payment_deduction_type: null,
  bank_account_id: null,
  check_number: null,
  check_bank_id: null,
  transfer_bank_id: null,
  bank_account_number: null,
  check_date_paid: null,
  method_payment: null,
  no: null,
  petty_cash_name: null,
  petty_cash_id: null,
  cheque_id: null,
  credit_card_id: null,
  other_channel_id: null,
  document_serial: null,
  document_id: null,
  approved: null,
  published_on: null,
  document_date: null,
  vat_rate: null,
  due_date: null,
  name: null,
  internal_notes: null,
  rounding_adjustment: null,
  gallery: null,
  gallery_id: null,
  contact: null,
  contact_id: null,
  document_references: null,
  referenced_to_me: null,
  referenced_by_me: null,
  status_int: null,
  is_inline_discount: null,
  is_inline_vat: null,
  vat_value: null,
  document_serial_no_prefix: null,
  inline_vat_value: null,
  inline_discount_value: null,
  published: null,
  is_vat_inclusive: null,
  running_number_type: null,
  running_modified_on: null,
  exempt_amount: null,
  vatable_amount: null,
  total_after_discount: null,
  sub_total: null,
  is_re_calculate: null,
  partial_payment_method: null,
  vat_amount: null,
  is_migrate: null,
  reset_transaction_id: null,
  rule_compile_status: null,
  cheque_cashing_date: null,
  project_id: null,
  project_name: null,
  project_name_and_project_deatil: null,
  reconciled: null,
  outstanding: null,
  withholding: null,
  ref_document_status: null,
  ref_document_status_string: null,
  document_deduction_type: null
)
```

