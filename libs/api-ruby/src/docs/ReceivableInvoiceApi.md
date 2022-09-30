# OpenapiClient::ReceivableInvoiceApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

| Method | HTTP request | Description |
| ------ | ------------ | ----------- |
| [**receivable_invoice_change_status_by_key**](ReceivableInvoiceApi.md#receivable_invoice_change_status_by_key) | **POST** /{culture}/receivable-invoices/{documentId}/status-key/{statusKey} | To change status by the document id and key |
| [**receivable_invoice_create**](ReceivableInvoiceApi.md#receivable_invoice_create) | **POST** /{culture}/receivable-invoices/simple-document | To Create a document with SimpleDocument as the parameter |
| [**receivable_invoice_create2**](ReceivableInvoiceApi.md#receivable_invoice_create2) | **POST** /{culture}/receivable-invoices/inline-document | To Create a document with InlineDocument as the parameter |
| [**receivable_invoice_delete**](ReceivableInvoiceApi.md#receivable_invoice_delete) | **DELETE** /{culture}/receivable-invoices/{id} | To delete the document given a list of documentids |
| [**receivable_invoice_details**](ReceivableInvoiceApi.md#receivable_invoice_details) | **GET** /{culture}/receivable-invoices/{id} | To get details of a document |
| [**receivable_invoice_edit**](ReceivableInvoiceApi.md#receivable_invoice_edit) | **PUT** /{culture}/receivable-invoices/simple-document/{id} | To Update a document with simpleDocument as the parameter |
| [**receivable_invoice_edit2**](ReceivableInvoiceApi.md#receivable_invoice_edit2) | **PUT** /{culture}/receivable-invoices/inline-document/{id} | To Update a document with inlineDocument as the parameter |
| [**receivable_invoice_index**](ReceivableInvoiceApi.md#receivable_invoice_index) | **GET** /{culture}/receivable-invoices | To query for documents. |
| [**receivable_invoice_receive_payment**](ReceivableInvoiceApi.md#receivable_invoice_receive_payment) | **POST** /{culture}/receivable-invoices/{id}/payments | To Accept payment with the paymentModel |


## receivable_invoice_change_status_by_key

> File receivable_invoice_change_status_by_key(document_id, status_key, culture)

To change status by the document id and key

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
document_id = 789 # Integer | 
status_key = 'status_key_example' # String | 
culture = 'culture_example' # String | 

begin
  # To change status by the document id and key
  result = api_instance.receivable_invoice_change_status_by_key(document_id, status_key, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_change_status_by_key: #{e}"
end
```

#### Using the receivable_invoice_change_status_by_key_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> receivable_invoice_change_status_by_key_with_http_info(document_id, status_key, culture)

```ruby
begin
  # To change status by the document id and key
  data, status_code, headers = api_instance.receivable_invoice_change_status_by_key_with_http_info(document_id, status_key, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_change_status_by_key_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **document_id** | **Integer** |  |  |
| **status_key** | **String** |  |  |
| **culture** | **String** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## receivable_invoice_create

> <MessageSent> receivable_invoice_create(culture, simple_document)

To Create a document with SimpleDocument as the parameter

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
culture = 'culture_example' # String | 
simple_document = OpenapiClient::SimpleDocument.new # SimpleDocument | 

begin
  # To Create a document with SimpleDocument as the parameter
  result = api_instance.receivable_invoice_create(culture, simple_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_create: #{e}"
end
```

#### Using the receivable_invoice_create_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<MessageSent>, Integer, Hash)> receivable_invoice_create_with_http_info(culture, simple_document)

```ruby
begin
  # To Create a document with SimpleDocument as the parameter
  data, status_code, headers = api_instance.receivable_invoice_create_with_http_info(culture, simple_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <MessageSent>
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_create_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **simple_document** | [**SimpleDocument**](SimpleDocument.md) |  |  |

### Return type

[**MessageSent**](MessageSent.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## receivable_invoice_create2

> <MessageSent> receivable_invoice_create2(culture, inline_document)

To Create a document with InlineDocument as the parameter

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
culture = 'culture_example' # String | 
inline_document = OpenapiClient::InlineDocument.new # InlineDocument | 

begin
  # To Create a document with InlineDocument as the parameter
  result = api_instance.receivable_invoice_create2(culture, inline_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_create2: #{e}"
end
```

#### Using the receivable_invoice_create2_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<MessageSent>, Integer, Hash)> receivable_invoice_create2_with_http_info(culture, inline_document)

```ruby
begin
  # To Create a document with InlineDocument as the parameter
  data, status_code, headers = api_instance.receivable_invoice_create2_with_http_info(culture, inline_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <MessageSent>
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_create2_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **inline_document** | [**InlineDocument**](InlineDocument.md) |  |  |

### Return type

[**MessageSent**](MessageSent.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## receivable_invoice_delete

> File receivable_invoice_delete(id, culture)

To delete the document given a list of documentids

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 

begin
  # To delete the document given a list of documentids
  result = api_instance.receivable_invoice_delete(id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_delete: #{e}"
end
```

#### Using the receivable_invoice_delete_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> receivable_invoice_delete_with_http_info(id, culture)

```ruby
begin
  # To delete the document given a list of documentids
  data, status_code, headers = api_instance.receivable_invoice_delete_with_http_info(id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_delete_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  |  |
| **culture** | **String** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## receivable_invoice_details

> File receivable_invoice_details(id, culture)

To get details of a document

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
id = 789 # Integer | Sql DocumentId
culture = 'culture_example' # String | 

begin
  # To get details of a document
  result = api_instance.receivable_invoice_details(id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_details: #{e}"
end
```

#### Using the receivable_invoice_details_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> receivable_invoice_details_with_http_info(id, culture)

```ruby
begin
  # To get details of a document
  data, status_code, headers = api_instance.receivable_invoice_details_with_http_info(id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_details_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** | Sql DocumentId |  |
| **culture** | **String** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## receivable_invoice_edit

> File receivable_invoice_edit(id, culture, simple_document)

To Update a document with simpleDocument as the parameter

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 
simple_document = OpenapiClient::SimpleDocument.new # SimpleDocument | 

begin
  # To Update a document with simpleDocument as the parameter
  result = api_instance.receivable_invoice_edit(id, culture, simple_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_edit: #{e}"
end
```

#### Using the receivable_invoice_edit_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> receivable_invoice_edit_with_http_info(id, culture, simple_document)

```ruby
begin
  # To Update a document with simpleDocument as the parameter
  data, status_code, headers = api_instance.receivable_invoice_edit_with_http_info(id, culture, simple_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_edit_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  |  |
| **culture** | **String** |  |  |
| **simple_document** | [**SimpleDocument**](SimpleDocument.md) |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream


## receivable_invoice_edit2

> File receivable_invoice_edit2(id, culture, inline_document)

To Update a document with inlineDocument as the parameter

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 
inline_document = OpenapiClient::InlineDocument.new # InlineDocument | 

begin
  # To Update a document with inlineDocument as the parameter
  result = api_instance.receivable_invoice_edit2(id, culture, inline_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_edit2: #{e}"
end
```

#### Using the receivable_invoice_edit2_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> receivable_invoice_edit2_with_http_info(id, culture, inline_document)

```ruby
begin
  # To Update a document with inlineDocument as the parameter
  data, status_code, headers = api_instance.receivable_invoice_edit2_with_http_info(id, culture, inline_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_edit2_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  |  |
| **culture** | **String** |  |  |
| **inline_document** | [**InlineDocument**](InlineDocument.md) |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream


## receivable_invoice_index

> File receivable_invoice_index(culture, opts)

To query for documents.

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
culture = 'culture_example' # String | 
opts = {
  sort_by: 'sort_by_example', # String | 
  current_page: 'current_page_example', # String | 
  page_size: 'page_size_example', # String | 
  filter: 'filter_example', # String | 
  search_string: 'search_string_example', # String | 
  custom_document_models: 'custom_document_models_example', # String | 
  range: 'range_example', # String | 
  month: 'month_example', # String | 
  year: 'year_example', # String | 
  start_date: 'start_date_example', # String | 
  end_date: 'end_date_example' # String | 
}

begin
  # To query for documents.
  result = api_instance.receivable_invoice_index(culture, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_index: #{e}"
end
```

#### Using the receivable_invoice_index_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> receivable_invoice_index_with_http_info(culture, opts)

```ruby
begin
  # To query for documents.
  data, status_code, headers = api_instance.receivable_invoice_index_with_http_info(culture, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_index_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **sort_by** | **String** |  | [optional] |
| **current_page** | **String** |  | [optional] |
| **page_size** | **String** |  | [optional] |
| **filter** | **String** |  | [optional] |
| **search_string** | **String** |  | [optional] |
| **custom_document_models** | **String** |  | [optional] |
| **range** | **String** |  | [optional] |
| **month** | **String** |  | [optional] |
| **year** | **String** |  | [optional] |
| **start_date** | **String** |  | [optional] |
| **end_date** | **String** |  | [optional] |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## receivable_invoice_receive_payment

> File receivable_invoice_receive_payment(id, culture, payment_model)

To Accept payment with the paymentModel

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::ReceivableInvoiceApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 
payment_model = OpenapiClient::PaymentModel.new # PaymentModel | 

begin
  # To Accept payment with the paymentModel
  result = api_instance.receivable_invoice_receive_payment(id, culture, payment_model)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_receive_payment: #{e}"
end
```

#### Using the receivable_invoice_receive_payment_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> receivable_invoice_receive_payment_with_http_info(id, culture, payment_model)

```ruby
begin
  # To Accept payment with the paymentModel
  data, status_code, headers = api_instance.receivable_invoice_receive_payment_with_http_info(id, culture, payment_model)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling ReceivableInvoiceApi->receivable_invoice_receive_payment_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  |  |
| **culture** | **String** |  |  |
| **payment_model** | [**PaymentModel**](PaymentModel.md) |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream

