# OpenapiClient::PaymentModel

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **cash_remarks** | **String** |  | [optional] |
| **exclude_vat** | **Float** |  | [optional] |
| **cash_tax** | **Integer** |  | [optional] |
| **credit_card_number** | **String** |  | [optional] |
| **company_vat_rate** | **Integer** |  | [optional] |
| **net** | **Float** |  | [optional] |
| **bank_account_number** | **String** |  | [optional] |
| **bank_account_id** | **Integer** |  | [optional] |
| **payment_method** | [**PaymentMethod**](PaymentMethod.md) |  | [optional] |
| **date_now** | **Time** |  | [optional] |
| **amount_collected** | **Float** |  | [optional] |
| **amount_withheld** | **Float** |  | [optional] |
| **withholding_tax** | **Float** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **transfer_bank_account_id** | **Integer** |  | [optional] |
| **bank_account_credit_card_id** | **Integer** |  | [optional] |
| **charge** | **Float** |  | [optional] |
| **cheque_date** | **Time** |  | [optional] |
| **cheque_number** | **String** |  | [optional] |
| **cheque_bank_account_id** | **String** |  | [optional] |
| **credit_card_bank_account_id** | **String** |  | [optional] |
| **remaining_collected** | **Float** |  | [optional] |
| **remaining_collected_type** | [**OneOfRemainingCollectedType**](OneOfRemainingCollectedType.md) |  | [optional] |
| **deduction_amount** | **Float** |  | [optional] |
| **payment_deduction_type** | [**OneOfDeductionType**](OneOfDeductionType.md) |  | [optional] |
| **petty_cash_name** | **String** |  | [optional] |
| **petty_cash_id** | **Integer** |  | [optional] |
| **cheque_id** | **Integer** |  | [optional] |
| **credit_card_id** | **Integer** |  | [optional] |
| **other_channel_id** | **Integer** |  | [optional] |
| **cheque_deposit_date** | **Time** |  | [optional] |
| **cheque_deposit_bank_id** | **Integer** |  | [optional] |
| **cheque_cashing_date** | **Time** |  | [optional] |
| **auto_create_withholding_tax** | **Boolean** |  | [optional] |
| **withholding_tax_income_type** | [**IncomeType**](IncomeType.md) |  | [optional] |
| **withholding_tax_income_description** | **String** |  | [optional] |
| **withholding_tax_entity** | [**Entity**](Entity.md) |  | [optional] |
| **exchange_rate_fee** | **Float** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::PaymentModel.new(
  cash_remarks: null,
  exclude_vat: null,
  cash_tax: null,
  credit_card_number: null,
  company_vat_rate: null,
  net: null,
  bank_account_number: null,
  bank_account_id: null,
  payment_method: null,
  date_now: null,
  amount_collected: null,
  amount_withheld: null,
  withholding_tax: null,
  remarks: null,
  transfer_bank_account_id: null,
  bank_account_credit_card_id: null,
  charge: null,
  cheque_date: null,
  cheque_number: null,
  cheque_bank_account_id: null,
  credit_card_bank_account_id: null,
  remaining_collected: null,
  remaining_collected_type: null,
  deduction_amount: null,
  payment_deduction_type: null,
  petty_cash_name: null,
  petty_cash_id: null,
  cheque_id: null,
  credit_card_id: null,
  other_channel_id: null,
  cheque_deposit_date: null,
  cheque_deposit_bank_id: null,
  cheque_cashing_date: null,
  auto_create_withholding_tax: null,
  withholding_tax_income_type: null,
  withholding_tax_income_description: null,
  withholding_tax_entity: null,
  exchange_rate_fee: null
)
```

