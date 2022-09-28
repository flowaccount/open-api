# Org.OpenAPITools.Api.BatchImportApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

Method | HTTP request | Description
------------- | ------------- | -------------
[**BatchImportDeleteCustomTemplate**](BatchImportApi.md#batchimportdeletecustomtemplate) | **DELETE** /{culture}/cash-invoices/custom-template/{templateId} | 
[**BatchImportGenerateBacthIdMetadata**](BatchImportApi.md#batchimportgeneratebacthidmetadata) | **GET** /{culture}/cash-invoices/batch-metadata | 
[**BatchImportGetBatchS3Data**](BatchImportApi.md#batchimportgetbatchs3data) | **GET** /{culture}/cash-invoices/get-batch-s3-data/{batchId} | 
[**BatchImportGetCustomTemplate**](BatchImportApi.md#batchimportgetcustomtemplate) | **GET** /{culture}/cash-invoices/custom-template/{templateId} | 
[**BatchImportGetOrgingalFile**](BatchImportApi.md#batchimportgetorgingalfile) | **GET** /{culture}/cash-invoices/get-batch-import-org-file/{batchId} | 
[**BatchImportGetPresign**](BatchImportApi.md#batchimportgetpresign) | **POST** /{culture}/cash-invoices/get-presign-for-upload-simpledoc | 
[**BatchImportMarkViewed**](BatchImportApi.md#batchimportmarkviewed) | **POST** /{culture}/cash-invoices/mark-viewed | 
[**BatchImportQueryBatch**](BatchImportApi.md#batchimportquerybatch) | **POST** /{culture}/cash-invoices/query-batch | 
[**BatchImportQueryBatchHistory**](BatchImportApi.md#batchimportquerybatchhistory) | **POST** /{culture}/cash-invoices/batch-import-history | 
[**BatchImportRetrySimpleDocuments**](BatchImportApi.md#batchimportretrysimpledocuments) | **POST** /{culture}/cash-invoices/retry-simple-documents | 
[**BatchImportUpsertCustomTemplate**](BatchImportApi.md#batchimportupsertcustomtemplate) | **POST** /{culture}/cash-invoices/custom-template | 


<a name="batchimportdeletecustomtemplate"></a>
# **BatchImportDeleteCustomTemplate**
> System.IO.Stream BatchImportDeleteCustomTemplate (string templateId, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportDeleteCustomTemplateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var templateId = "templateId_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.BatchImportDeleteCustomTemplate(templateId, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportDeleteCustomTemplate: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**|  | 
 **culture** | **string**|  | 

### Return type

**System.IO.Stream**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportgeneratebacthidmetadata"></a>
# **BatchImportGenerateBacthIdMetadata**
> BatchImportMetadata BatchImportGenerateBacthIdMetadata (string culture, string fileName = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportGenerateBacthIdMetadataExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var culture = "culture_example";  // string | 
            var fileName = "fileName_example";  // string |  (optional) 

            try
            {
                BatchImportMetadata result = apiInstance.BatchImportGenerateBacthIdMetadata(culture, fileName);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportGenerateBacthIdMetadata: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  | 
 **fileName** | **string**|  | [optional] 

### Return type

[**BatchImportMetadata**](BatchImportMetadata.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportgetbatchs3data"></a>
# **BatchImportGetBatchS3Data**
> System.IO.Stream BatchImportGetBatchS3Data (string batchId, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportGetBatchS3DataExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var batchId = "batchId_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.BatchImportGetBatchS3Data(batchId, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportGetBatchS3Data: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchId** | **string**|  | 
 **culture** | **string**|  | 

### Return type

**System.IO.Stream**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportgetcustomtemplate"></a>
# **BatchImportGetCustomTemplate**
> System.IO.Stream BatchImportGetCustomTemplate (string templateId, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportGetCustomTemplateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var templateId = "templateId_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.BatchImportGetCustomTemplate(templateId, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportGetCustomTemplate: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**|  | 
 **culture** | **string**|  | 

### Return type

**System.IO.Stream**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportgetorgingalfile"></a>
# **BatchImportGetOrgingalFile**
> System.IO.Stream BatchImportGetOrgingalFile (string batchId, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportGetOrgingalFileExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var batchId = "batchId_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.BatchImportGetOrgingalFile(batchId, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportGetOrgingalFile: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchId** | **string**|  | 
 **culture** | **string**|  | 

### Return type

**System.IO.Stream**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportgetpresign"></a>
# **BatchImportGetPresign**
> System.IO.Stream BatchImportGetPresign (string culture, BatchImportPayload batchImportPayload, long? id = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportGetPresignExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var culture = "culture_example";  // string | 
            var batchImportPayload = new BatchImportPayload(); // BatchImportPayload | 
            var id = 789L;  // long? |  (optional) 

            try
            {
                System.IO.Stream result = apiInstance.BatchImportGetPresign(culture, batchImportPayload, id);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportGetPresign: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  | 
 **batchImportPayload** | [**BatchImportPayload**](BatchImportPayload.md)|  | 
 **id** | **long?**|  | [optional] 

### Return type

**System.IO.Stream**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportmarkviewed"></a>
# **BatchImportMarkViewed**
> bool BatchImportMarkViewed (string culture, long body, long? userId = null, string batchId = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportMarkViewedExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var culture = "culture_example";  // string | 
            var body = 789L;  // long | 
            var userId = 789L;  // long? |  (optional) 
            var batchId = "batchId_example";  // string |  (optional) 

            try
            {
                bool result = apiInstance.BatchImportMarkViewed(culture, body, userId, batchId);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportMarkViewed: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  | 
 **body** | **long**|  | 
 **userId** | **long?**|  | [optional] 
 **batchId** | **string**|  | [optional] 

### Return type

**bool**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportquerybatch"></a>
# **BatchImportQueryBatch**
> BatchStatus BatchImportQueryBatch (string culture, string body, BatchImportStatus? status = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportQueryBatchExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var culture = "culture_example";  // string | 
            var body = "body_example";  // string | 
            var status = (BatchImportStatus) "0";  // BatchImportStatus? |  (optional) 

            try
            {
                BatchStatus result = apiInstance.BatchImportQueryBatch(culture, body, status);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportQueryBatch: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  | 
 **body** | **string**|  | 
 **status** | **BatchImportStatus?**|  | [optional] 

### Return type

[**BatchStatus**](BatchStatus.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportquerybatchhistory"></a>
# **BatchImportQueryBatchHistory**
> BatchHistory BatchImportQueryBatchHistory (string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportQueryBatchHistoryExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var culture = "culture_example";  // string | 

            try
            {
                BatchHistory result = apiInstance.BatchImportQueryBatchHistory(culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportQueryBatchHistory: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  | 

### Return type

[**BatchHistory**](BatchHistory.md)

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportretrysimpledocuments"></a>
# **BatchImportRetrySimpleDocuments**
> bool BatchImportRetrySimpleDocuments (string culture, BatchImportRetry batchImportRetry)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportRetrySimpleDocumentsExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var culture = "culture_example";  // string | 
            var batchImportRetry = new BatchImportRetry(); // BatchImportRetry | 

            try
            {
                bool result = apiInstance.BatchImportRetrySimpleDocuments(culture, batchImportRetry);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportRetrySimpleDocuments: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  | 
 **batchImportRetry** | [**BatchImportRetry**](BatchImportRetry.md)|  | 

### Return type

**bool**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="batchimportupsertcustomtemplate"></a>
# **BatchImportUpsertCustomTemplate**
> System.IO.Stream BatchImportUpsertCustomTemplate (string culture, CustomTemplate customTemplate)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BatchImportUpsertCustomTemplateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BatchImportApi(config);
            var culture = "culture_example";  // string | 
            var customTemplate = new CustomTemplate(); // CustomTemplate | 

            try
            {
                System.IO.Stream result = apiInstance.BatchImportUpsertCustomTemplate(culture, customTemplate);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BatchImportApi.BatchImportUpsertCustomTemplate: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **culture** | **string**|  | 
 **customTemplate** | [**CustomTemplate**](CustomTemplate.md)|  | 

### Return type

**System.IO.Stream**

### Authorization

[bearer](../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream


### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** |  |  -  |

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

