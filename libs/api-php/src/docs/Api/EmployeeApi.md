# OpenAPI\Client\EmployeeApi

All URIs are relative to https://openapi.flowaccount.com/sandbox.

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeeCount()**](EmployeeApi.md#employeeCount) | **GET** /Employee/count | Count employees
[**employeeCreate()**](EmployeeApi.md#employeeCreate) | **POST** /Employee | Create Employee
[**employeeEdit()**](EmployeeApi.md#employeeEdit) | **PUT** /Employee | Update Employee
[**employeeGetById()**](EmployeeApi.md#employeeGetById) | **GET** /Employee/{id} | Get employee by Id
[**employeeGetList()**](EmployeeApi.md#employeeGetList) | **GET** /Employee | Get employee list with payrollQuery model
[**employeeRemove()**](EmployeeApi.md#employeeRemove) | **DELETE** /Employee/{id} | Delete/Remove Employee by Id


## `employeeCount()`

```php
employeeCount(): \SplFileObject
```

Count employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->employeeCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeCreate()`

```php
employeeCreate($employee_model): \SplFileObject
```

Create Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_model = new \OpenAPI\Client\Model\EmployeeModel(); // \OpenAPI\Client\Model\EmployeeModel

try {
    $result = $apiInstance->employeeCreate($employee_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_model** | [**\OpenAPI\Client\Model\EmployeeModel**](../Model/EmployeeModel.md)|  |

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeEdit()`

```php
employeeEdit($employee_model): \SplFileObject
```

Update Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_model = new \OpenAPI\Client\Model\EmployeeModel(); // \OpenAPI\Client\Model\EmployeeModel

try {
    $result = $apiInstance->employeeEdit($employee_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_model** | [**\OpenAPI\Client\Model\EmployeeModel**](../Model/EmployeeModel.md)|  |

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeGetById()`

```php
employeeGetById($id): \SplFileObject
```

Get employee by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->employeeGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeGetList()`

```php
employeeGetList($payroll_query): \SplFileObject
```

Get employee list with payrollQuery model

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_query = new \OpenAPI\Client\Model\PayrollQuery(); // \OpenAPI\Client\Model\PayrollQuery

try {
    $result = $apiInstance->employeeGetList($payroll_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payroll_query** | [**\OpenAPI\Client\Model\PayrollQuery**](../Model/PayrollQuery.md)|  |

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeRemove()`

```php
employeeRemove($id): \SplFileObject
```

Delete/Remove Employee by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->employeeRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->employeeRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**\SplFileObject**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
