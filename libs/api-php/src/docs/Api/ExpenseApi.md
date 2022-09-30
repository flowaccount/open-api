# OpenAPI\Client\ExpenseApi

All URIs are relative to https://openapi.flowaccount.com/sandbox.

Method | HTTP request | Description
------------- | ------------- | -------------
[**expenseChangeStatusByKey()**](ExpenseApi.md#expenseChangeStatusByKey) | **POST** /{culture}/expenses/{documentId}/status-key/{statusKey} | To change status by the document id and key
[**expenseCreate()**](ExpenseApi.md#expenseCreate) | **POST** /{culture}/expenses/simple-document | To Create a document with SimpleDocument as the parameter
[**expenseCreate2()**](ExpenseApi.md#expenseCreate2) | **POST** /{culture}/expenses/inline-document | To Create a document with InlineDocument as the parameter
[**expenseDelete()**](ExpenseApi.md#expenseDelete) | **DELETE** /{culture}/expenses/{id} | To delete the document given a list of documentids
[**expenseDetails()**](ExpenseApi.md#expenseDetails) | **GET** /{culture}/expenses/{id} | To get details of a document
[**expenseEdit()**](ExpenseApi.md#expenseEdit) | **PUT** /{culture}/expenses/simple-document/{id} | To Update a document with simpleDocument as the parameter
[**expenseEdit2()**](ExpenseApi.md#expenseEdit2) | **PUT** /{culture}/expenses/inline-document/{id} | To Update a document with inlineDocument as the parameter
[**expenseGetBusinessCategories()**](ExpenseApi.md#expenseGetBusinessCategories) | **GET** /{culture}/expenses/categories/business | 
[**expenseGetBusinessCategoriesWithoutAsset()**](ExpenseApi.md#expenseGetBusinessCategoriesWithoutAsset) | **GET** /{culture}/expenses/categories/business-without-asset | 
[**expenseGetChartOfAccounts()**](ExpenseApi.md#expenseGetChartOfAccounts) | **GET** /{culture}/expenses/categories/accounting | 
[**expenseGetChartOfAccountsWithoutAsset()**](ExpenseApi.md#expenseGetChartOfAccountsWithoutAsset) | **GET** /{culture}/expenses/categories/accounting-without-asset | 
[**expenseIndex()**](ExpenseApi.md#expenseIndex) | **GET** /{culture}/expenses | To query for documents.
[**expenseReceivePayment()**](ExpenseApi.md#expenseReceivePayment) | **POST** /{culture}/expenses/{id}/payments | To Accept payment with the paymentModel


## `expenseChangeStatusByKey()`

```php
expenseChangeStatusByKey($document_id, $status_key, $culture): \SplFileObject
```

To change status by the document id and key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 56; // int
$status_key = 'status_key_example'; // string
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->expenseChangeStatusByKey($document_id, $status_key, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseChangeStatusByKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **int**|  |
 **status_key** | **string**|  |
 **culture** | **string**|  |

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

## `expenseCreate()`

```php
expenseCreate($culture, $simple_document): \OpenAPI\Client\Model\MessageSent
```

To Create a document with SimpleDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$simple_document = new \OpenAPI\Client\Model\SimpleDocument(); // \OpenAPI\Client\Model\SimpleDocument

try {
    $result = $apiInstance->expenseCreate($culture, $simple_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **simple_document** | [**\OpenAPI\Client\Model\SimpleDocument**](../Model/SimpleDocument.md)|  |

### Return type

[**\OpenAPI\Client\Model\MessageSent**](../Model/MessageSent.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expenseCreate2()`

```php
expenseCreate2($culture, $inline_document): \OpenAPI\Client\Model\MessageSent
```

To Create a document with InlineDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$inline_document = new \OpenAPI\Client\Model\InlineDocument(); // \OpenAPI\Client\Model\InlineDocument

try {
    $result = $apiInstance->expenseCreate2($culture, $inline_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseCreate2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **inline_document** | [**\OpenAPI\Client\Model\InlineDocument**](../Model/InlineDocument.md)|  |

### Return type

[**\OpenAPI\Client\Model\MessageSent**](../Model/MessageSent.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expenseDelete()`

```php
expenseDelete($id, $culture): \SplFileObject
```

To delete the document given a list of documentids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->expenseDelete($id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **culture** | **string**|  |

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

## `expenseDetails()`

```php
expenseDetails($id, $culture): \SplFileObject
```

To get details of a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Sql DocumentId
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->expenseDetails($id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Sql DocumentId |
 **culture** | **string**|  |

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

## `expenseEdit()`

```php
expenseEdit($id, $culture, $simple_document): \SplFileObject
```

To Update a document with simpleDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$simple_document = new \OpenAPI\Client\Model\SimpleDocument(); // \OpenAPI\Client\Model\SimpleDocument

try {
    $result = $apiInstance->expenseEdit($id, $culture, $simple_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **culture** | **string**|  |
 **simple_document** | [**\OpenAPI\Client\Model\SimpleDocument**](../Model/SimpleDocument.md)|  |

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

## `expenseEdit2()`

```php
expenseEdit2($id, $culture, $inline_document): \SplFileObject
```

To Update a document with inlineDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$inline_document = new \OpenAPI\Client\Model\InlineDocument(); // \OpenAPI\Client\Model\InlineDocument

try {
    $result = $apiInstance->expenseEdit2($id, $culture, $inline_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseEdit2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **culture** | **string**|  |
 **inline_document** | [**\OpenAPI\Client\Model\InlineDocument**](../Model/InlineDocument.md)|  |

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

## `expenseGetBusinessCategories()`

```php
expenseGetBusinessCategories($culture): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->expenseGetBusinessCategories($culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseGetBusinessCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |

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

## `expenseGetBusinessCategoriesWithoutAsset()`

```php
expenseGetBusinessCategoriesWithoutAsset($culture): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->expenseGetBusinessCategoriesWithoutAsset($culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseGetBusinessCategoriesWithoutAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |

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

## `expenseGetChartOfAccounts()`

```php
expenseGetChartOfAccounts($culture): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->expenseGetChartOfAccounts($culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseGetChartOfAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |

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

## `expenseGetChartOfAccountsWithoutAsset()`

```php
expenseGetChartOfAccountsWithoutAsset($culture): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->expenseGetChartOfAccountsWithoutAsset($culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseGetChartOfAccountsWithoutAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |

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

## `expenseIndex()`

```php
expenseIndex($culture, $sort_by, $current_page, $page_size, $filter, $search_string, $custom_document_models, $range, $month, $year, $start_date, $end_date): \SplFileObject
```

To query for documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$sort_by = 'sort_by_example'; // string
$current_page = 'current_page_example'; // string
$page_size = 'page_size_example'; // string
$filter = 'filter_example'; // string
$search_string = 'search_string_example'; // string
$custom_document_models = 'custom_document_models_example'; // string
$range = 'range_example'; // string
$month = 'month_example'; // string
$year = 'year_example'; // string
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string

try {
    $result = $apiInstance->expenseIndex($culture, $sort_by, $current_page, $page_size, $filter, $search_string, $custom_document_models, $range, $month, $year, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **sort_by** | **string**|  | [optional]
 **current_page** | **string**|  | [optional]
 **page_size** | **string**|  | [optional]
 **filter** | **string**|  | [optional]
 **search_string** | **string**|  | [optional]
 **custom_document_models** | **string**|  | [optional]
 **range** | **string**|  | [optional]
 **month** | **string**|  | [optional]
 **year** | **string**|  | [optional]
 **start_date** | **string**|  | [optional]
 **end_date** | **string**|  | [optional]

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

## `expenseReceivePayment()`

```php
expenseReceivePayment($id, $culture, $payment_model): \SplFileObject
```

To Accept payment with the paymentModel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$payment_model = new \OpenAPI\Client\Model\PaymentModel(); // \OpenAPI\Client\Model\PaymentModel

try {
    $result = $apiInstance->expenseReceivePayment($id, $culture, $payment_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->expenseReceivePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **culture** | **string**|  |
 **payment_model** | [**\OpenAPI\Client\Model\PaymentModel**](../Model/PaymentModel.md)|  |

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
