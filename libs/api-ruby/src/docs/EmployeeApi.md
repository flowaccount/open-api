# OpenapiClient::EmployeeApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

| Method | HTTP request | Description |
| ------ | ------------ | ----------- |
| [**employee_count**](EmployeeApi.md#employee_count) | **GET** /Employee/count | Count employees |
| [**employee_create**](EmployeeApi.md#employee_create) | **POST** /Employee | Create Employee |
| [**employee_edit**](EmployeeApi.md#employee_edit) | **PUT** /Employee | Update Employee |
| [**employee_get_by_id**](EmployeeApi.md#employee_get_by_id) | **GET** /Employee/{id} | Get employee by Id |
| [**employee_get_list**](EmployeeApi.md#employee_get_list) | **GET** /Employee | Get employee list with payrollQuery model |
| [**employee_remove**](EmployeeApi.md#employee_remove) | **DELETE** /Employee/{id} | Delete/Remove Employee by Id |


## employee_count

> File employee_count

Count employees

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::EmployeeApi.new

begin
  # Count employees
  result = api_instance.employee_count
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_count: #{e}"
end
```

#### Using the employee_count_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> employee_count_with_http_info

```ruby
begin
  # Count employees
  data, status_code, headers = api_instance.employee_count_with_http_info
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_count_with_http_info: #{e}"
end
```

### Parameters

This endpoint does not need any parameter.

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## employee_create

> File employee_create(employee_model)

Create Employee

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::EmployeeApi.new
employee_model = OpenapiClient::EmployeeModel.new # EmployeeModel | 

begin
  # Create Employee
  result = api_instance.employee_create(employee_model)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_create: #{e}"
end
```

#### Using the employee_create_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> employee_create_with_http_info(employee_model)

```ruby
begin
  # Create Employee
  data, status_code, headers = api_instance.employee_create_with_http_info(employee_model)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_create_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **employee_model** | [**EmployeeModel**](EmployeeModel.md) |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream


## employee_edit

> File employee_edit(employee_model)

Update Employee

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::EmployeeApi.new
employee_model = OpenapiClient::EmployeeModel.new # EmployeeModel | 

begin
  # Update Employee
  result = api_instance.employee_edit(employee_model)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_edit: #{e}"
end
```

#### Using the employee_edit_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> employee_edit_with_http_info(employee_model)

```ruby
begin
  # Update Employee
  data, status_code, headers = api_instance.employee_edit_with_http_info(employee_model)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_edit_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **employee_model** | [**EmployeeModel**](EmployeeModel.md) |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream


## employee_get_by_id

> File employee_get_by_id(id)

Get employee by Id

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::EmployeeApi.new
id = 789 # Integer | 

begin
  # Get employee by Id
  result = api_instance.employee_get_by_id(id)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_get_by_id: #{e}"
end
```

#### Using the employee_get_by_id_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> employee_get_by_id_with_http_info(id)

```ruby
begin
  # Get employee by Id
  data, status_code, headers = api_instance.employee_get_by_id_with_http_info(id)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_get_by_id_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream


## employee_get_list

> File employee_get_list(payroll_query)

Get employee list with payrollQuery model

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::EmployeeApi.new
payroll_query = OpenapiClient::PayrollQuery.new # PayrollQuery | 

begin
  # Get employee list with payrollQuery model
  result = api_instance.employee_get_list(payroll_query)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_get_list: #{e}"
end
```

#### Using the employee_get_list_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> employee_get_list_with_http_info(payroll_query)

```ruby
begin
  # Get employee list with payrollQuery model
  data, status_code, headers = api_instance.employee_get_list_with_http_info(payroll_query)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_get_list_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **payroll_query** | [**PayrollQuery**](PayrollQuery.md) |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream


## employee_remove

> File employee_remove(id)

Delete/Remove Employee by Id

### Examples

```ruby
require 'time'
require 'openapi_client'
# setup authorization
OpenapiClient.configure do |config|
  # Configure Bearer authorization (Reference): bearer
  config.access_token = 'YOUR_BEARER_TOKEN'
end

api_instance = OpenapiClient::EmployeeApi.new
id = 789 # Integer | 

begin
  # Delete/Remove Employee by Id
  result = api_instance.employee_remove(id)
  p result
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_remove: #{e}"
end
```

#### Using the employee_remove_with_http_info variant

This returns an Array which contains the response data, status code and headers.

> <Array(File, Integer, Hash)> employee_remove_with_http_info(id)

```ruby
begin
  # Delete/Remove Employee by Id
  data, status_code, headers = api_instance.employee_remove_with_http_info(id)
  p status_code # => 2xx
  p headers # => { ... }
  p data # => File
rescue OpenapiClient::ApiError => e
  puts "Error when calling EmployeeApi->employee_remove_with_http_info: #{e}"
end
```

### Parameters

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **id** | **Integer** |  |  |

### Return type

**File**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

