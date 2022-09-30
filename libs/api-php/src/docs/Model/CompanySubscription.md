# # CompanySubscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**company_id** | **int** |  | [optional]
**package_id** | **int** |  | [optional]
**package_status** | [**\OpenAPI\Client\Model\PackageStatus**](PackageStatus.md) |  | [optional]
**transaction_date** | **\DateTime** |  | [optional]
**transaction_id** | **string** |  | [optional]
**expiration_date** | **\DateTime** |  | [optional]
**coupon_id** | **int** |  | [optional]
**paid_by** | **int** |  | [optional]
**created_on** | **\DateTime** |  | [optional]
**modified_on** | **\DateTime** |  | [optional]
**days** | **int** |  | [optional]
**package_days** | **int** |  | [optional]
**quantity** | **int** |  | [optional]
**type** | [**\OpenAPI\Client\Model\UpgradeType**](UpgradeType.md) |  | [optional]
**payment_channel** | [**OneOfPaymentChannel**](OneOfPaymentChannel.md) |  | [optional]
**value** | **float** |  | [optional]
**is_withheld** | **bool** |  | [optional]
**withheld** | **float** |  | [optional]
**internal_file** | **string** |  | [optional]
**invoice_id** | **int** |  | [optional]
**remarks** | **string** |  | [optional]
**is_request_invoice** | **bool** |  | [optional]
**add_on** | **string** |  | [optional]
**package_list** | [**OneOfPackageList**](OneOfPackageList.md) |  | [optional]
**pay_slip_image_date** | **\DateTime** |  | [optional]
**pay_slip_image_time** | **string** |  | [optional]
**pay_slip_image_amount** | **float** |  | [optional]
**pay_slip_image_contact** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
