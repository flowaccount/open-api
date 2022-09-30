# OpenAPI\Client\BillingNoteApi

All URIs are relative to https://openapi.flowaccount.com/sandbox.

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingNoteChangeStatusByKey()**](BillingNoteApi.md#billingNoteChangeStatusByKey) | **POST** /{culture}/billing-notes/{documentId}/status-key/{statusKey} | To change status by the document id and key
[**billingNoteCreate()**](BillingNoteApi.md#billingNoteCreate) | **POST** /{culture}/billing-notes/simple-document | To Create a document with SimpleDocument as the parameter
[**billingNoteCreate2()**](BillingNoteApi.md#billingNoteCreate2) | **POST** /{culture}/billing-notes/inline-document | To Create a document with InlineDocument as the parameter
[**billingNoteDelete()**](BillingNoteApi.md#billingNoteDelete) | **DELETE** /{culture}/billing-notes/{id} | To delete the document given a list of documentids
[**billingNoteDetails()**](BillingNoteApi.md#billingNoteDetails) | **GET** /{culture}/billing-notes/{id} | To get details of a document
[**billingNoteEdit()**](BillingNoteApi.md#billingNoteEdit) | **PUT** /{culture}/billing-notes/simple-document/{id} | To Update a document with simpleDocument as the parameter
[**billingNoteEdit2()**](BillingNoteApi.md#billingNoteEdit2) | **PUT** /{culture}/billing-notes/inline-document/{id} | To Update a document with inlineDocument as the parameter
[**billingNoteIndex()**](BillingNoteApi.md#billingNoteIndex) | **GET** /{culture}/billing-notes | To query for documents.
[**billingNoteReceivePayment()**](BillingNoteApi.md#billingNoteReceivePayment) | **POST** /{culture}/billing-notes/{id}/payments | To Accept payment with the paymentModel


## `billingNoteChangeStatusByKey()`

```php
billingNoteChangeStatusByKey($document_id, $status_key, $culture): \SplFileObject
```

To change status by the document id and key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 56; // int
$status_key = 'status_key_example'; // string
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->billingNoteChangeStatusByKey($document_id, $status_key, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteChangeStatusByKey: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteCreate()`

```php
billingNoteCreate($culture, $simple_document): \OpenAPI\Client\Model\MessageSent
```

To Create a document with SimpleDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$simple_document = new \OpenAPI\Client\Model\SimpleDocument(); // \OpenAPI\Client\Model\SimpleDocument

try {
    $result = $apiInstance->billingNoteCreate($culture, $simple_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteCreate: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteCreate2()`

```php
billingNoteCreate2($culture, $inline_document): \OpenAPI\Client\Model\MessageSent
```

To Create a document with InlineDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$inline_document = new \OpenAPI\Client\Model\InlineDocument(); // \OpenAPI\Client\Model\InlineDocument

try {
    $result = $apiInstance->billingNoteCreate2($culture, $inline_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteCreate2: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteDelete()`

```php
billingNoteDelete($id, $culture): \SplFileObject
```

To delete the document given a list of documentids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->billingNoteDelete($id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteDelete: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteDetails()`

```php
billingNoteDetails($id, $culture): \SplFileObject
```

To get details of a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Sql DocumentId
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->billingNoteDetails($id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteDetails: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteEdit()`

```php
billingNoteEdit($id, $culture, $simple_document): \SplFileObject
```

To Update a document with simpleDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$simple_document = new \OpenAPI\Client\Model\SimpleDocument(); // \OpenAPI\Client\Model\SimpleDocument

try {
    $result = $apiInstance->billingNoteEdit($id, $culture, $simple_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteEdit: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteEdit2()`

```php
billingNoteEdit2($id, $culture, $inline_document): \SplFileObject
```

To Update a document with inlineDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$inline_document = new \OpenAPI\Client\Model\InlineDocument(); // \OpenAPI\Client\Model\InlineDocument

try {
    $result = $apiInstance->billingNoteEdit2($id, $culture, $inline_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteEdit2: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteIndex()`

```php
billingNoteIndex($culture, $sort_by, $current_page, $page_size, $filter, $search_string, $custom_document_models, $range, $month, $year, $start_date, $end_date): \SplFileObject
```

To query for documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
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
    $result = $apiInstance->billingNoteIndex($culture, $sort_by, $current_page, $page_size, $filter, $search_string, $custom_document_models, $range, $month, $year, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteIndex: ', $e->getMessage(), PHP_EOL;
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

## `billingNoteReceivePayment()`

```php
billingNoteReceivePayment($id, $culture, $payment_model): \SplFileObject
```

To Accept payment with the paymentModel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$payment_model = new \OpenAPI\Client\Model\PaymentModel(); // \OpenAPI\Client\Model\PaymentModel

try {
    $result = $apiInstance->billingNoteReceivePayment($id, $culture, $payment_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingNoteApi->billingNoteReceivePayment: ', $e->getMessage(), PHP_EOL;
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
