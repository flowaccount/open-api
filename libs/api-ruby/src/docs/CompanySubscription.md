# OpenapiClient::CompanySubscription

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **company_id** | **Integer** |  | [optional] |
| **package_id** | **Integer** |  | [optional] |
| **package_status** | [**PackageStatus**](PackageStatus.md) |  | [optional] |
| **transaction_date** | **Time** |  | [optional] |
| **transaction_id** | **String** |  | [optional] |
| **expiration_date** | **Time** |  | [optional] |
| **coupon_id** | **Integer** |  | [optional] |
| **paid_by** | **Integer** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **days** | **Integer** |  | [optional] |
| **package_days** | **Integer** |  | [optional] |
| **quantity** | **Integer** |  | [optional] |
| **type** | [**UpgradeType**](UpgradeType.md) |  | [optional] |
| **payment_channel** | [**OneOfPaymentChannel**](OneOfPaymentChannel.md) |  | [optional] |
| **value** | **Float** |  | [optional] |
| **is_withheld** | **Boolean** |  | [optional] |
| **withheld** | **Float** |  | [optional] |
| **internal_file** | **String** |  | [optional] |
| **invoice_id** | **Integer** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **is_request_invoice** | **Boolean** |  | [optional] |
| **add_on** | **String** |  | [optional] |
| **package_list** | [**OneOfPackageList**](OneOfPackageList.md) |  | [optional] |
| **pay_slip_image_date** | **Time** |  | [optional] |
| **pay_slip_image_time** | **String** |  | [optional] |
| **pay_slip_image_amount** | **Float** |  | [optional] |
| **pay_slip_image_contact** | **String** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::CompanySubscription.new(
  id: null,
  company_id: null,
  package_id: null,
  package_status: null,
  transaction_date: null,
  transaction_id: null,
  expiration_date: null,
  coupon_id: null,
  paid_by: null,
  created_on: null,
  modified_on: null,
  days: null,
  package_days: null,
  quantity: null,
  type: null,
  payment_channel: null,
  value: null,
  is_withheld: null,
  withheld: null,
  internal_file: null,
  invoice_id: null,
  remarks: null,
  is_request_invoice: null,
  add_on: null,
  package_list: null,
  pay_slip_image_date: null,
  pay_slip_image_time: null,
  pay_slip_image_amount: null,
  pay_slip_image_contact: null
)
```

