# OpenapiClient::ProductList

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  | [optional] |
| **bar_code** | **String** |  | [optional] |
| **name** | **String** |  |  |
| **unit_measurement** | **String** |  | [optional] |
| **unit_price** | **Float** |  | [optional] |
| **unit_price_with_vat** | **Float** |  | [optional] |
| **unit_weight** | **Float** |  | [optional] |
| **category_id** | **Integer** |  | [optional] |
| **description** | **String** |  | [optional] |
| **remarks** | **String** |  | [optional] |
| **gallery_id** | **Integer** |  | [optional] |
| **is_vat** | **Boolean** |  | [optional] |
| **main_unit_id** | **Integer** |  | [optional] |
| **sub_unit_id** | **Integer** |  | [optional] |
| **main_unit_amount** | **Integer** |  | [optional] |
| **sub_unit_amount** | **Integer** |  | [optional] |
| **has_stock** | **Boolean** |  | [optional] |
| **product_code** | **String** |  | [optional] |
| **type** | [**ProductTypes**](ProductTypes.md) |  | [optional] |
| **buy_price** | **Float** |  | [optional] |
| **buy_price_with_vat** | **Float** |  | [optional] |
| **is_buy_vat** | **Boolean** |  | [optional] |
| **allow_over_sold** | **Boolean** |  | [optional] |
| **image** | **String** |  | [optional] |
| **is_delete** | **Boolean** |  | [optional] |
| **vat_rate** | **Integer** |  | [optional] |
| **buy_vat_rate** | **Integer** |  | [optional] |
| **reset_transaction_id** | **Integer** |  | [optional] |
| **created_on** | **Time** |  | [optional] |
| **modified_on** | **Time** |  | [optional] |
| **brought_forward_on** | **Time** |  | [optional] |
| **buy_description** | **String** |  | [optional] |
| **buy_chart_of_account_id** | **Integer** |  | [optional] |
| **sell_chart_of_account_id** | **Integer** |  | [optional] |
| **product_non_inventory_type** | [**OneOfProductNonInventoryType**](OneOfProductNonInventoryType.md) |  | [optional] |
| **transaction_id** | **String** |  | [optional] |
| **product_main_unit** | [**OneOfProductUnit**](OneOfProductUnit.md) |  | [optional] |
| **product_sub_unit** | [**OneOfProductUnit**](OneOfProductUnit.md) |  | [optional] |
| **product_category** | [**OneOfProductCategory**](OneOfProductCategory.md) |  | [optional] |
| **is_migrate** | **Boolean** |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::ProductList.new(
  id: null,
  bar_code: null,
  name: null,
  unit_measurement: null,
  unit_price: null,
  unit_price_with_vat: null,
  unit_weight: null,
  category_id: null,
  description: null,
  remarks: null,
  gallery_id: null,
  is_vat: null,
  main_unit_id: null,
  sub_unit_id: null,
  main_unit_amount: null,
  sub_unit_amount: null,
  has_stock: null,
  product_code: null,
  type: null,
  buy_price: null,
  buy_price_with_vat: null,
  is_buy_vat: null,
  allow_over_sold: null,
  image: null,
  is_delete: null,
  vat_rate: null,
  buy_vat_rate: null,
  reset_transaction_id: null,
  created_on: null,
  modified_on: null,
  brought_forward_on: null,
  buy_description: null,
  buy_chart_of_account_id: null,
  sell_chart_of_account_id: null,
  product_non_inventory_type: null,
  transaction_id: null,
  product_main_unit: null,
  product_sub_unit: null,
  product_category: null,
  is_migrate: null
)
```

