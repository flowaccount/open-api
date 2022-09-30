# OpenapiClient::BatchImportApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

| Method | HTTP request | Description |
| ------ | ------------ | ----------- |
| [**batch_import_delete_custom_template**](BatchImportApi.md#batch_import_delete_custom_template) | **DELETE** /{culture}/cash-invoices/custom-template/{templateId} | Delete custom template |
| [**batch_import_generate_bacth_id_metadata**](BatchImportApi.md#batch_import_generate_bacth_id_metadata) | **GET** /{culture}/cash-invoices/batch-metadata | To get details of a document |
| [**batch_import_get_batch_s3_data**](BatchImportApi.md#batch_import_get_batch_s3_data) | **GET** /{culture}/cash-invoices/get-batch-s3-data/{batchId} | Get data from Storage |
| [**batch_import_get_custom_template**](BatchImportApi.md#batch_import_get_custom_template) | **GET** /{culture}/cash-invoices/custom-template/{templateId} | Get custom template |
| [**batch_import_get_orgingal_file**](BatchImportApi.md#batch_import_get_orgingal_file) | **GET** /{culture}/cash-invoices/get-batch-import-org-file/{batchId} | Get Original File |
| [**batch_import_get_presign**](BatchImportApi.md#batch_import_get_presign) | **POST** /{culture}/cash-invoices/get-presign-for-upload-simpledoc | Get presign url to upload the file with payloads |
| [**batch_import_mark_viewed**](BatchImportApi.md#batch_import_mark_viewed) | **POST** /{culture}/cash-invoices/mark-viewed | Mark the batch as viewed in notification. |
| [**batch_import_query_batch**](BatchImportApi.md#batch_import_query_batch) | **POST** /{culture}/cash-invoices/query-batch | Query the batch by id and status |
| [**batch_import_query_batch_history**](BatchImportApi.md#batch_import_query_batch_history) | **POST** /{culture}/cash-invoices/batch-import-history |  |
| [**batch_import_retry_simple_documents**](BatchImportApi.md#batch_import_retry_simple_documents) | **POST** /{culture}/cash-invoices/retry-simple-documents |  |
| [**batch_import_upsert_custom_template**](BatchImportApi.md#batch_import_upsert_custom_template) | **POST** /{culture}/cash-invoices/custom-template | Create or Update (Upsert) custom template |


## batch_import_delete_custom_template

> File batch_import_delete_custom_template(template_id, culture)

Delete custom template

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
template_id = 'template_id_example' # String | 
culture = 'culture_example' # String | 

begin
  # Delete custom template
  result = api_instance.batch_import_delete_custom_template(template_id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_delete_custom_template: #{e}"
end
```

#### Using the batch_import_delete_custom_template_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> batch_import_delete_custom_template_with_http_info(template_id, culture)

```ruby
begin
  # Delete custom template
  data, status_code, headers = api_instance.batch_import_delete_custom_template_with_http_info(template_id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_delete_custom_template_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **template_id** | **String** |  |  |
| **culture** | **String** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## batch_import_generate_bacth_id_metadata

> <BatchImportMetadata> batch_import_generate_bacth_id_metadata(culture, opts)

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

api_instance = OpenapiClient::BatchImportApi.new
culture = 'culture_example' # String | 
opts = {
  file_name: 'file_name_example' # String | 
}

begin
  # To get details of a document
  result = api_instance.batch_import_generate_bacth_id_metadata(culture, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_generate_bacth_id_metadata: #{e}"
end
```

#### Using the batch_import_generate_bacth_id_metadata_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<BatchImportMetadata>, Integer, Hash)> batch_import_generate_bacth_id_metadata_with_http_info(culture, opts)

```ruby
begin
  # To get details of a document
  data, status_code, headers = api_instance.batch_import_generate_bacth_id_metadata_with_http_info(culture, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <BatchImportMetadata>
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_generate_bacth_id_metadata_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **file_name** | **String** |  | [optional] |

### Return type

[**BatchImportMetadata**](BatchImportMetadata.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## batch_import_get_batch_s3_data

> File batch_import_get_batch_s3_data(batch_id, culture)

Get data from Storage

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
batch_id = 'batch_id_example' # String | 
culture = 'culture_example' # String | 

begin
  # Get data from Storage
  result = api_instance.batch_import_get_batch_s3_data(batch_id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_batch_s3_data: #{e}"
end
```

#### Using the batch_import_get_batch_s3_data_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> batch_import_get_batch_s3_data_with_http_info(batch_id, culture)

```ruby
begin
  # Get data from Storage
  data, status_code, headers = api_instance.batch_import_get_batch_s3_data_with_http_info(batch_id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_batch_s3_data_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **batch_id** | **String** |  |  |
| **culture** | **String** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## batch_import_get_custom_template

> File batch_import_get_custom_template(template_id, culture)

Get custom template

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
template_id = 'template_id_example' # String | 
culture = 'culture_example' # String | 

begin
  # Get custom template
  result = api_instance.batch_import_get_custom_template(template_id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_custom_template: #{e}"
end
```

#### Using the batch_import_get_custom_template_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> batch_import_get_custom_template_with_http_info(template_id, culture)

```ruby
begin
  # Get custom template
  data, status_code, headers = api_instance.batch_import_get_custom_template_with_http_info(template_id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_custom_template_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **template_id** | **String** |  |  |
| **culture** | **String** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## batch_import_get_orgingal_file

> File batch_import_get_orgingal_file(batch_id, culture)

Get Original File

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
batch_id = 'batch_id_example' # String | 
culture = 'culture_example' # String | 

begin
  # Get Original File
  result = api_instance.batch_import_get_orgingal_file(batch_id, culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_orgingal_file: #{e}"
end
```

#### Using the batch_import_get_orgingal_file_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> batch_import_get_orgingal_file_with_http_info(batch_id, culture)

```ruby
begin
  # Get Original File
  data, status_code, headers = api_instance.batch_import_get_orgingal_file_with_http_info(batch_id, culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_orgingal_file_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **batch_id** | **String** |  |  |
| **culture** | **String** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## batch_import_get_presign

> File batch_import_get_presign(culture, batch_import_payload, opts)

Get presign url to upload the file with payloads

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
culture = 'culture_example' # String | 
batch_import_payload = OpenapiClient::BatchImportPayload.new # BatchImportPayload | 
opts = {
  id: 789 # Integer | 
}

begin
  # Get presign url to upload the file with payloads
  result = api_instance.batch_import_get_presign(culture, batch_import_payload, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_presign: #{e}"
end
```

#### Using the batch_import_get_presign_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> batch_import_get_presign_with_http_info(culture, batch_import_payload, opts)

```ruby
begin
  # Get presign url to upload the file with payloads
  data, status_code, headers = api_instance.batch_import_get_presign_with_http_info(culture, batch_import_payload, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_get_presign_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **batch_import_payload** | [**BatchImportPayload**](BatchImportPayload.md) |  |  |
| **id** | **Integer** |  | [optional] |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream


## batch_import_mark_viewed

> Boolean batch_import_mark_viewed(culture, body, opts)

Mark the batch as viewed in notification.

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
culture = 'culture_example' # String | 
body = 789 # Integer | 
opts = {
  user_id: 789, # Integer | 
  batch_id: 'batch_id_example' # String | 
}

begin
  # Mark the batch as viewed in notification.
  result = api_instance.batch_import_mark_viewed(culture, body, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_mark_viewed: #{e}"
end
```

#### Using the batch_import_mark_viewed_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(Boolean, Integer, Hash)> batch_import_mark_viewed_with_http_info(culture, body, opts)

```ruby
begin
  # Mark the batch as viewed in notification.
  data, status_code, headers = api_instance.batch_import_mark_viewed_with_http_info(culture, body, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => Boolean
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_mark_viewed_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **body** | **Integer** |  |  |
| **user_id** | **Integer** |  | [optional] |
| **batch_id** | **String** |  | [optional] |

### Return type

**Boolean**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## batch_import_query_batch

> <BatchStatus> batch_import_query_batch(culture, body, opts)

Query the batch by id and status

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
culture = 'culture_example' # String | 
body = 'body_example' # String | 
opts = {
  status: OpenapiClient::BatchImportStatus::N0 # BatchImportStatus | 
}

begin
  # Query the batch by id and status
  result = api_instance.batch_import_query_batch(culture, body, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_query_batch: #{e}"
end
```

#### Using the batch_import_query_batch_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<BatchStatus>, Integer, Hash)> batch_import_query_batch_with_http_info(culture, body, opts)

```ruby
begin
  # Query the batch by id and status
  data, status_code, headers = api_instance.batch_import_query_batch_with_http_info(culture, body, opts)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <BatchStatus>
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_query_batch_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **body** | **String** |  |  |
| **status** | [**BatchImportStatus**](.md) |  | [optional] |

### Return type

[**BatchStatus**](BatchStatus.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## batch_import_query_batch_history

> <BatchHistory> batch_import_query_batch_history(culture)



### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
culture = 'culture_example' # String | 

begin
  
  result = api_instance.batch_import_query_batch_history(culture)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_query_batch_history: #{e}"
end
```

#### Using the batch_import_query_batch_history_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(<BatchHistory>, Integer, Hash)> batch_import_query_batch_history_with_http_info(culture)

```ruby
begin
  
  data, status_code, headers = api_instance.batch_import_query_batch_history_with_http_info(culture)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => <BatchHistory>
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_query_batch_history_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |

### Return type

[**BatchHistory**](BatchHistory.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## batch_import_retry_simple_documents

> Boolean batch_import_retry_simple_documents(culture, batch_import_retry)



### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
culture = 'culture_example' # String | 
batch_import_retry = OpenapiClient::BatchImportRetry.new # BatchImportRetry | 

begin
  
  result = api_instance.batch_import_retry_simple_documents(culture, batch_import_retry)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_retry_simple_documents: #{e}"
end
```

#### Using the batch_import_retry_simple_documents_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(Boolean, Integer, Hash)> batch_import_retry_simple_documents_with_http_info(culture, batch_import_retry)

```ruby
begin
  
  data, status_code, headers = api_instance.batch_import_retry_simple_documents_with_http_info(culture, batch_import_retry)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => Boolean
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_retry_simple_documents_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **batch_import_retry** | [**BatchImportRetry**](BatchImportRetry.md) |  |  |

### Return type

**Boolean**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json


## batch_import_upsert_custom_template

> File batch_import_upsert_custom_template(culture, custom_template)

Create or Update (Upsert) custom template

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::BatchImportApi.new
culture = 'culture_example' # String | 
custom_template = OpenapiClient::CustomTemplate.new # CustomTemplate | 

begin
  # Create or Update (Upsert) custom template
  result = api_instance.batch_import_upsert_custom_template(culture, custom_template)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_upsert_custom_template: #{e}"
end
```

#### Using the batch_import_upsert_custom_template_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> batch_import_upsert_custom_template_with_http_info(culture, custom_template)

```ruby
begin
  # Create or Update (Upsert) custom template
  data, status_code, headers = api_instance.batch_import_upsert_custom_template_with_http_info(culture, custom_template)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling BatchImportApi->batch_import_upsert_custom_template_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **culture** | **String** |  |  |
| **custom_template** | [**CustomTemplate**](CustomTemplate.md) |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream

