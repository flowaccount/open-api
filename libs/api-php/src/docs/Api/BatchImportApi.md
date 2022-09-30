# OpenAPI\Client\BatchImportApi

All URIs are relative to https://openapi.flowaccount.com/sandbox.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchImportDeleteCustomTemplate()**](BatchImportApi.md#batchImportDeleteCustomTemplate) | **DELETE** /{culture}/cash-invoices/custom-template/{templateId} | Delete custom template
[**batchImportGenerateBacthIdMetadata()**](BatchImportApi.md#batchImportGenerateBacthIdMetadata) | **GET** /{culture}/cash-invoices/batch-metadata | To get details of a document
[**batchImportGetBatchS3Data()**](BatchImportApi.md#batchImportGetBatchS3Data) | **GET** /{culture}/cash-invoices/get-batch-s3-data/{batchId} | Get data from Storage
[**batchImportGetCustomTemplate()**](BatchImportApi.md#batchImportGetCustomTemplate) | **GET** /{culture}/cash-invoices/custom-template/{templateId} | Get custom template
[**batchImportGetOrgingalFile()**](BatchImportApi.md#batchImportGetOrgingalFile) | **GET** /{culture}/cash-invoices/get-batch-import-org-file/{batchId} | Get Original File
[**batchImportGetPresign()**](BatchImportApi.md#batchImportGetPresign) | **POST** /{culture}/cash-invoices/get-presign-for-upload-simpledoc | Get presign url to upload the file with payloads
[**batchImportMarkViewed()**](BatchImportApi.md#batchImportMarkViewed) | **POST** /{culture}/cash-invoices/mark-viewed | Mark the batch as viewed in notification.
[**batchImportQueryBatch()**](BatchImportApi.md#batchImportQueryBatch) | **POST** /{culture}/cash-invoices/query-batch | Query the batch by id and status
[**batchImportQueryBatchHistory()**](BatchImportApi.md#batchImportQueryBatchHistory) | **POST** /{culture}/cash-invoices/batch-import-history | 
[**batchImportRetrySimpleDocuments()**](BatchImportApi.md#batchImportRetrySimpleDocuments) | **POST** /{culture}/cash-invoices/retry-simple-documents | 
[**batchImportUpsertCustomTemplate()**](BatchImportApi.md#batchImportUpsertCustomTemplate) | **POST** /{culture}/cash-invoices/custom-template | Create or Update (Upsert) custom template


## `batchImportDeleteCustomTemplate()`

```php
batchImportDeleteCustomTemplate($template_id, $culture): \SplFileObject
```

Delete custom template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->batchImportDeleteCustomTemplate($template_id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportDeleteCustomTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
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

## `batchImportGenerateBacthIdMetadata()`

```php
batchImportGenerateBacthIdMetadata($culture, $file_name): \OpenAPI\Client\Model\BatchImportMetadata
```

To get details of a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$file_name = 'file_name_example'; // string

try {
    $result = $apiInstance->batchImportGenerateBacthIdMetadata($culture, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportGenerateBacthIdMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **file_name** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchImportMetadata**](../Model/BatchImportMetadata.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchImportGetBatchS3Data()`

```php
batchImportGetBatchS3Data($batch_id, $culture): \SplFileObject
```

Get data from Storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->batchImportGetBatchS3Data($batch_id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportGetBatchS3Data: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**|  |
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

## `batchImportGetCustomTemplate()`

```php
batchImportGetCustomTemplate($template_id, $culture): \SplFileObject
```

Get custom template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->batchImportGetCustomTemplate($template_id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportGetCustomTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
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

## `batchImportGetOrgingalFile()`

```php
batchImportGetOrgingalFile($batch_id, $culture): \SplFileObject
```

Get Original File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_id = 'batch_id_example'; // string
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->batchImportGetOrgingalFile($batch_id, $culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportGetOrgingalFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **string**|  |
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

## `batchImportGetPresign()`

```php
batchImportGetPresign($culture, $batch_import_payload, $id): \SplFileObject
```

Get presign url to upload the file with payloads

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$batch_import_payload = new \OpenAPI\Client\Model\BatchImportPayload(); // \OpenAPI\Client\Model\BatchImportPayload
$id = 56; // int

try {
    $result = $apiInstance->batchImportGetPresign($culture, $batch_import_payload, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportGetPresign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **batch_import_payload** | [**\OpenAPI\Client\Model\BatchImportPayload**](../Model/BatchImportPayload.md)|  |
 **id** | **int**|  | [optional]

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

## `batchImportMarkViewed()`

```php
batchImportMarkViewed($culture, $body, $user_id, $batch_id): bool
```

Mark the batch as viewed in notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$body = 56; // int
$user_id = 56; // int
$batch_id = 'batch_id_example'; // string

try {
    $result = $apiInstance->batchImportMarkViewed($culture, $body, $user_id, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportMarkViewed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **body** | **int**|  |
 **user_id** | **int**|  | [optional]
 **batch_id** | **string**|  | [optional]

### Return type

**bool**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchImportQueryBatch()`

```php
batchImportQueryBatch($culture, $body, $status): \OpenAPI\Client\Model\BatchStatus
```

Query the batch by id and status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$body = 'body_example'; // string
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BatchImportStatus(); // \OpenAPI\Client\Model\BatchImportStatus

try {
    $result = $apiInstance->batchImportQueryBatch($culture, $body, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportQueryBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **body** | **string**|  |
 **status** | [**\OpenAPI\Client\Model\BatchImportStatus**](../Model/.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BatchStatus**](../Model/BatchStatus.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchImportQueryBatchHistory()`

```php
batchImportQueryBatchHistory($culture): \OpenAPI\Client\Model\BatchHistory
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string

try {
    $result = $apiInstance->batchImportQueryBatchHistory($culture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportQueryBatchHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\BatchHistory**](../Model/BatchHistory.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchImportRetrySimpleDocuments()`

```php
batchImportRetrySimpleDocuments($culture, $batch_import_retry): bool
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$batch_import_retry = new \OpenAPI\Client\Model\BatchImportRetry(); // \OpenAPI\Client\Model\BatchImportRetry

try {
    $result = $apiInstance->batchImportRetrySimpleDocuments($culture, $batch_import_retry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportRetrySimpleDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **batch_import_retry** | [**\OpenAPI\Client\Model\BatchImportRetry**](../Model/BatchImportRetry.md)|  |

### Return type

**bool**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchImportUpsertCustomTemplate()`

```php
batchImportUpsertCustomTemplate($culture, $custom_template): \SplFileObject
```

Create or Update (Upsert) custom template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (Reference) authorization: bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BatchImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$culture = 'culture_example'; // string
$custom_template = new \OpenAPI\Client\Model\CustomTemplate(); // \OpenAPI\Client\Model\CustomTemplate

try {
    $result = $apiInstance->batchImportUpsertCustomTemplate($culture, $custom_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchImportApi->batchImportUpsertCustomTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  |
 **custom_template** | [**\OpenAPI\Client\Model\CustomTemplate**](../Model/CustomTemplate.md)|  |

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
