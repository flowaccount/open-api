# OpenapiClient::CreditNoteApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

| Method | HTTP request | Description |
| ------ | ------------ | ----------- |
| [**credit_note_change_status_by_key**](CreditNoteApi.md#credit_note_change_status_by_key) | **POST** /{culture}/credit-notes/{documentId}/status-key/{statusKey} | To change status by the document id and key |
| [**credit_note_create**](CreditNoteApi.md#credit_note_create) | **POST** /{culture}/credit-notes/simple-document | To Create a document with SimpleDocument as the parameter |
| [**credit_note_create2**](CreditNoteApi.md#credit_note_create2) | **POST** /{culture}/credit-notes/inline-document | To Create a document with InlineDocument as the parameter |
| [**credit_note_delete**](CreditNoteApi.md#credit_note_delete) | **DELETE** /{culture}/credit-notes/{id} | To delete the document given a list of documentids |
| [**credit_note_details**](CreditNoteApi.md#credit_note_details) | **GET** /{culture}/credit-notes/{id} | To get details of a document |
| [**credit_note_edit**](CreditNoteApi.md#credit_note_edit) | **PUT** /{culture}/credit-notes/simple-document/{id} | To Update a document with simpleDocument as the parameter |
| [**credit_note_edit2**](CreditNoteApi.md#credit_note_edit2) | **PUT** /{culture}/credit-notes/inline-document/{id} | To Update a document with inlineDocument as the parameter |
| [**credit_note_get_cumulative_document_reference_list**](CreditNoteApi.md#credit_note_get_cumulative_document_reference_list) | **GET** /{culture}/credit-notes/cumulative-references |  |
| [**credit_note_index**](CreditNoteApi.md#credit_note_index) | **GET** /{culture}/credit-notes | To query for documents. |
| [**credit_note_receive_payment**](CreditNoteApi.md#credit_note_receive_payment) | **POST** /{culture}/credit-notes/{id}/payments | To Accept payment with the paymentModel |


## credit_note_change_status_by_key

> File credit_note_change_status_by_key(document_id, status_key, culture)

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

api_instance = OpenapiClient::CreditNoteApi.new
document_id = 789 # Integer | 
status_key = 'status_key_example' # String | 
culture = 'culture_example' # String | 

begin
  # To change status by the document id and key
  result = api_instance.credit_note_change_status_by_key(document_id, status_key, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_change_status_by_key: #{e}"
end
```

#### Using the credit_note_change_status_by_key_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_change_status_by_key_with_http_info(document_id, status_key, culture)

```ruby
begin
  # To change status by the document id and key
  data, status_code, headers = api_instance.credit_note_change_status_by_key_with_http_info(document_id, status_key, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_change_status_by_key_with_http_info: #{e}"
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


## credit_note_create

> <MessageSent> credit_note_create(culture, simple_document)

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

api_instance = OpenapiClient::CreditNoteApi.new
culture = 'culture_example' # String | 
simple_document = OpenapiClient::SimpleDocument.new # SimpleDocument | 

begin
  # To Create a document with SimpleDocument as the parameter
  result = api_instance.credit_note_create(culture, simple_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_create: #{e}"
end
```

#### Using the credit_note_create_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<MessageSent>, Integer, Hash)> credit_note_create_with_http_info(culture, simple_document)

```ruby
begin
  # To Create a document with SimpleDocument as the parameter
  data, status_code, headers = api_instance.credit_note_create_with_http_info(culture, simple_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <MessageSent>
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_create_with_http_info: #{e}"
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


## credit_note_create2

> <MessageSent> credit_note_create2(culture, inline_document)

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

api_instance = OpenapiClient::CreditNoteApi.new
culture = 'culture_example' # String | 
inline_document = OpenapiClient::InlineDocument.new # InlineDocument | 

begin
  # To Create a document with InlineDocument as the parameter
  result = api_instance.credit_note_create2(culture, inline_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_create2: #{e}"
end
```

#### Using the credit_note_create2_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<MessageSent>, Integer, Hash)> credit_note_create2_with_http_info(culture, inline_document)

```ruby
begin
  # To Create a document with InlineDocument as the parameter
  data, status_code, headers = api_instance.credit_note_create2_with_http_info(culture, inline_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <MessageSent>
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_create2_with_http_info: #{e}"
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


## credit_note_delete

> File credit_note_delete(id, culture)

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

api_instance = OpenapiClient::CreditNoteApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 

begin
  # To delete the document given a list of documentids
  result = api_instance.credit_note_delete(id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_delete: #{e}"
end
```

#### Using the credit_note_delete_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_delete_with_http_info(id, culture)

```ruby
begin
  # To delete the document given a list of documentids
  data, status_code, headers = api_instance.credit_note_delete_with_http_info(id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_delete_with_http_info: #{e}"
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


## credit_note_details

> File credit_note_details(id, culture)

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

api_instance = OpenapiClient::CreditNoteApi.new
id = 789 # Integer | Sql DocumentId
culture = 'culture_example' # String | 

begin
  # To get details of a document
  result = api_instance.credit_note_details(id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_details: #{e}"
end
```

#### Using the credit_note_details_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_details_with_http_info(id, culture)

```ruby
begin
  # To get details of a document
  data, status_code, headers = api_instance.credit_note_details_with_http_info(id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_details_with_http_info: #{e}"
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


## credit_note_edit

> File credit_note_edit(id, culture, simple_document)

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

api_instance = OpenapiClient::CreditNoteApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 
simple_document = OpenapiClient::SimpleDocument.new # SimpleDocument | 

begin
  # To Update a document with simpleDocument as the parameter
  result = api_instance.credit_note_edit(id, culture, simple_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_edit: #{e}"
end
```

#### Using the credit_note_edit_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_edit_with_http_info(id, culture, simple_document)

```ruby
begin
  # To Update a document with simpleDocument as the parameter
  data, status_code, headers = api_instance.credit_note_edit_with_http_info(id, culture, simple_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_edit_with_http_info: #{e}"
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


## credit_note_edit2

> File credit_note_edit2(id, culture, inline_document)

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

api_instance = OpenapiClient::CreditNoteApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 
inline_document = OpenapiClient::InlineDocument.new # InlineDocument | 

begin
  # To Update a document with inlineDocument as the parameter
  result = api_instance.credit_note_edit2(id, culture, inline_document)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_edit2: #{e}"
end
```

#### Using the credit_note_edit2_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_edit2_with_http_info(id, culture, inline_document)

```ruby
begin
  # To Update a document with inlineDocument as the parameter
  data, status_code, headers = api_instance.credit_note_edit2_with_http_info(id, culture, inline_document)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_edit2_with_http_info: #{e}"
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


## credit_note_get_cumulative_document_reference_list

> File credit_note_get_cumulative_document_reference_list(culture, opts)



### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::CreditNoteApi.new
culture = 'culture_example' # String | 
opts = {
  ids: 'ids_example' # String | 
}

begin
  
  result = api_instance.credit_note_get_cumulative_document_reference_list(culture, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_get_cumulative_document_reference_list: #{e}"
end
```

#### Using the credit_note_get_cumulative_document_reference_list_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_get_cumulative_document_reference_list_with_http_info(culture, opts)

```ruby
begin
  
  data, status_code, headers = api_instance.credit_note_get_cumulative_document_reference_list_with_http_info(culture, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_get_cumulative_document_reference_list_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **ids** | **String** |  | [optional] |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## credit_note_index

> File credit_note_index(culture, opts)

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

api_instance = OpenapiClient::CreditNoteApi.new
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
  result = api_instance.credit_note_index(culture, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_index: #{e}"
end
```

#### Using the credit_note_index_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_index_with_http_info(culture, opts)

```ruby
begin
  # To query for documents.
  data, status_code, headers = api_instance.credit_note_index_with_http_info(culture, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_index_with_http_info: #{e}"
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


## credit_note_receive_payment

> File credit_note_receive_payment(id, culture, payment_model)

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

api_instance = OpenapiClient::CreditNoteApi.new
id = 789 # Integer | 
culture = 'culture_example' # String | 
payment_model = OpenapiClient::PaymentModel.new # PaymentModel | 

begin
  # To Accept payment with the paymentModel
  result = api_instance.credit_note_receive_payment(id, culture, payment_model)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_receive_payment: #{e}"
end
```

#### Using the credit_note_receive_payment_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> credit_note_receive_payment_with_http_info(id, culture, payment_model)

```ruby
begin
  # To Accept payment with the paymentModel
  data, status_code, headers = api_instance.credit_note_receive_payment_with_http_info(id, culture, payment_model)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling CreditNoteApi->credit_note_receive_payment_with_http_info: #{e}"
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

