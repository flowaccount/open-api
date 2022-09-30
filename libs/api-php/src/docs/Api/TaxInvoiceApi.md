# OpenAPI\Client\TaxInvoiceApi

All URIs are relative to https://openapi.flowaccount.com/sandbox.

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxInvoiceChangeStatusByKey()**](TaxInvoiceApi.md#taxInvoiceChangeStatusByKey) | **POST** /{culture}/tax-invoices/{documentId}/status-key/{statusKey} | To change status by the document id and key
[**taxInvoiceCreate()**](TaxInvoiceApi.md#taxInvoiceCreate) | **POST** /{culture}/tax-invoices/simple-document | To Create a document with SimpleDocument as the parameter
[**taxInvoiceCreate2()**](TaxInvoiceApi.md#taxInvoiceCreate2) | **POST** /{culture}/tax-invoices/inline-document | To Create a document with InlineDocument as the parameter
[**taxInvoiceDelete()**](TaxInvoiceApi.md#taxInvoiceDelete) | **DELETE** /{culture}/tax-invoices/{id} | To delete the document given a list of documentids
[**taxInvoiceDetails()**](TaxInvoiceApi.md#taxInvoiceDetails) | **GET** /{culture}/tax-invoices/{id} | To get details of a document
[**taxInvoiceEdit()**](TaxInvoiceApi.md#taxInvoiceEdit) | **PUT** /{culture}/tax-invoices/simple-document/{id} | To Update a document with simpleDocument as the parameter
[**taxInvoiceEdit2()**](TaxInvoiceApi.md#taxInvoiceEdit2) | **PUT** /{culture}/tax-invoices/inline-document/{id} | To Update a document with inlineDocument as the parameter
[**taxInvoiceGetCumulativeDocumentReferenceList()**](TaxInvoiceApi.md#taxInvoiceGetCumulativeDocumentReferenceList) | **GET** /{culture}/tax-invoices/cumulative-references | 
[**taxInvoiceIndex()**](TaxInvoiceApi.md#taxInvoiceIndex) | **GET** /{culture}/tax-invoices | To query for documents.
[**taxInvoiceReceivePayment()**](TaxInvoiceApi.md#taxInvoiceReceivePayment) | **POST** /{culture}/tax-invoices/{id}/payments | To Accept payment with the paymentModel


## `taxInvoiceChangeStatusByKey()`

```php
taxInvoiceChangeStatusByKey($document_id, $status_key, $culture): \SplFileObject
```

To change status by the document id and key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 56; // int
$status_key = 'status_key_example'; // string
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->taxInvoiceChangeStatusByKey($document_id, $status_key, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceChangeStatusByKey: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceCreate()`

```php
taxInvoiceCreate($culture, $simple_document): \OpenAPI\Client\Model\MessageSent
```

To Create a document with SimpleDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$simple_document = new \OpenAPI\Client\Model\SimpleDocument(); // \OpenAPI\Client\Model\SimpleDocument

try {
    $result = $apiInstance->taxInvoiceCreate($culture, $simple_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceCreate: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceCreate2()`

```php
taxInvoiceCreate2($culture, $inline_document): \OpenAPI\Client\Model\MessageSent
```

To Create a document with InlineDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$inline_document = new \OpenAPI\Client\Model\InlineDocument(); // \OpenAPI\Client\Model\InlineDocument

try {
    $result = $apiInstance->taxInvoiceCreate2($culture, $inline_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceCreate2: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceDelete()`

```php
taxInvoiceDelete($id, $culture): \SplFileObject
```

To delete the document given a list of documentids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->taxInvoiceDelete($id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceDelete: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceDetails()`

```php
taxInvoiceDetails($id, $culture): \SplFileObject
```

To get details of a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Sql DocumentId
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->taxInvoiceDetails($id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceDetails: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceEdit()`

```php
taxInvoiceEdit($id, $culture, $simple_document): \SplFileObject
```

To Update a document with simpleDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$simple_document = new \OpenAPI\Client\Model\SimpleDocument(); // \OpenAPI\Client\Model\SimpleDocument

try {
    $result = $apiInstance->taxInvoiceEdit($id, $culture, $simple_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceEdit: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceEdit2()`

```php
taxInvoiceEdit2($id, $culture, $inline_document): \SplFileObject
```

To Update a document with inlineDocument as the parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$inline_document = new \OpenAPI\Client\Model\InlineDocument(); // \OpenAPI\Client\Model\InlineDocument

try {
    $result = $apiInstance->taxInvoiceEdit2($id, $culture, $inline_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceEdit2: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceGetCumulativeDocumentReferenceList()`

```php
taxInvoiceGetCumulativeDocumentReferenceList($culture, $ids): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$ids = 'ids_example'; // string

try {
    $result = $apiInstance->taxInvoiceGetCumulativeDocumentReferenceList($culture, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceGetCumulativeDocumentReferenceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **ids** | **string**|  | [optional]

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

## `taxInvoiceIndex()`

```php
taxInvoiceIndex($culture, $sort_by, $current_page, $page_size, $filter, $search_string, $custom_document_models, $range, $month, $year, $start_date, $end_date): \SplFileObject
```

To query for documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
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
    $result = $apiInstance->taxInvoiceIndex($culture, $sort_by, $current_page, $page_size, $filter, $search_string, $custom_document_models, $range, $month, $year, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceIndex: ', $e->getMessage(), PHP_EOL;
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

## `taxInvoiceReceivePayment()`

```php
taxInvoiceReceivePayment($id, $culture, $payment_model): \SplFileObject
```

To Accept payment with the paymentModel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TaxInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$culture = 'culture_example'; // string
$payment_model = new \OpenAPI\Client\Model\PaymentModel(); // \OpenAPI\Client\Model\PaymentModel

try {
    $result = $apiInstance->taxInvoiceReceivePayment($id, $culture, $payment_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxInvoiceApi->taxInvoiceReceivePayment: ', $e->getMessage(), PHP_EOL;
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
