# Org.OpenAPITools.Api.DebitNoteApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

Method | HTTP request | Description
------------- | ------------- | -------------
[**DebitNoteActorCreate**](DebitNoteApi.md#debitnoteactorcreate) | **POST** /{culture}/debit-notes/simple-document | 
[**DebitNoteActorCreateInline**](DebitNoteApi.md#debitnoteactorcreateinline) | **POST** /{culture}/debit-notes/inline-document | 
[**DebitNoteChangeStatusByKey**](DebitNoteApi.md#debitnotechangestatusbykey) | **POST** /{culture}/debit-notes/{documentId}/status-key/{statusKey} | 
[**DebitNoteDelete**](DebitNoteApi.md#debitnotedelete) | **DELETE** /{culture}/debit-notes/{id} | 
[**DebitNoteDetails**](DebitNoteApi.md#debitnotedetails) | **GET** /{culture}/debit-notes/{id} | 
[**DebitNoteEdit**](DebitNoteApi.md#debitnoteedit) | **PUT** /{culture}/debit-notes/simple-document/{id} | 
[**DebitNoteEdit2**](DebitNoteApi.md#debitnoteedit2) | **PUT** /{culture}/debit-notes/inline-document/{id} | 
[**DebitNoteGetCumulativeDocumentReferenceList**](DebitNoteApi.md#debitnotegetcumulativedocumentreferencelist) | **GET** /{culture}/debit-notes/cumulative-references | 
[**DebitNoteIndex**](DebitNoteApi.md#debitnoteindex) | **GET** /{culture}/debit-notes | 
[**DebitNoteReceivePayment**](DebitNoteApi.md#debitnotereceivepayment) | **POST** /{culture}/debit-notes/{id}/payments | 


<a name="debitnoteactorcreate"></a>
# **DebitNoteActorCreate**
> MessageSent DebitNoteActorCreate (string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteActorCreateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                MessageSent result = apiInstance.DebitNoteActorCreate(culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteActorCreate: " + e.Message );
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
 **simpleDocument** | [**SimpleDocument**](SimpleDocument.md)|  | 

### Return type

[**MessageSent**](MessageSent.md)

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

<a name="debitnoteactorcreateinline"></a>
# **DebitNoteActorCreateInline**
> MessageSent DebitNoteActorCreateInline (string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteActorCreateInlineExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                MessageSent result = apiInstance.DebitNoteActorCreateInline(culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteActorCreateInline: " + e.Message );
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
 **inlineDocument** | [**InlineDocument**](InlineDocument.md)|  | 

### Return type

[**MessageSent**](MessageSent.md)

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

<a name="debitnotechangestatusbykey"></a>
# **DebitNoteChangeStatusByKey**
> System.IO.Stream DebitNoteChangeStatusByKey (long documentId, string statusKey, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteChangeStatusByKeyExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var documentId = 789L;  // long | 
            var statusKey = "statusKey_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteChangeStatusByKey(documentId, statusKey, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteChangeStatusByKey: " + e.Message );
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
 **documentId** | **long**|  | 
 **statusKey** | **string**|  | 
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

<a name="debitnotedelete"></a>
# **DebitNoteDelete**
> System.IO.Stream DebitNoteDelete (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteDeleteExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteDelete(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteDelete: " + e.Message );
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
 **id** | **long**|  | 
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

<a name="debitnotedetails"></a>
# **DebitNoteDetails**
> System.IO.Stream DebitNoteDetails (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteDetailsExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteDetails(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteDetails: " + e.Message );
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
 **id** | **long**|  | 
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

<a name="debitnoteedit"></a>
# **DebitNoteEdit**
> System.IO.Stream DebitNoteEdit (long id, string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteEditExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteEdit(id, culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteEdit: " + e.Message );
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
 **id** | **long**|  | 
 **culture** | **string**|  | 
 **simpleDocument** | [**SimpleDocument**](SimpleDocument.md)|  | 

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

<a name="debitnoteedit2"></a>
# **DebitNoteEdit2**
> System.IO.Stream DebitNoteEdit2 (long id, string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteEdit2Example
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteEdit2(id, culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteEdit2: " + e.Message );
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
 **id** | **long**|  | 
 **culture** | **string**|  | 
 **inlineDocument** | [**InlineDocument**](InlineDocument.md)|  | 

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

<a name="debitnotegetcumulativedocumentreferencelist"></a>
# **DebitNoteGetCumulativeDocumentReferenceList**
> System.IO.Stream DebitNoteGetCumulativeDocumentReferenceList (string culture, string ids = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteGetCumulativeDocumentReferenceListExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var culture = "culture_example";  // string | 
            var ids = "ids_example";  // string |  (optional) 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteGetCumulativeDocumentReferenceList(culture, ids);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteGetCumulativeDocumentReferenceList: " + e.Message );
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
 **ids** | **string**|  | [optional] 

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

<a name="debitnoteindex"></a>
# **DebitNoteIndex**
> System.IO.Stream DebitNoteIndex (string culture, string sortBy = null, string currentPage = null, string pageSize = null, string filter = null, string searchString = null, string customDocumentModels = null, string range = null, string month = null, string year = null, string startDate = null, string endDate = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteIndexExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var culture = "culture_example";  // string | 
            var sortBy = "sortBy_example";  // string |  (optional) 
            var currentPage = "currentPage_example";  // string |  (optional) 
            var pageSize = "pageSize_example";  // string |  (optional) 
            var filter = "filter_example";  // string |  (optional) 
            var searchString = "searchString_example";  // string |  (optional) 
            var customDocumentModels = "customDocumentModels_example";  // string |  (optional) 
            var range = "range_example";  // string |  (optional) 
            var month = "month_example";  // string |  (optional) 
            var year = "year_example";  // string |  (optional) 
            var startDate = "startDate_example";  // string |  (optional) 
            var endDate = "endDate_example";  // string |  (optional) 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteIndex(culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteIndex: " + e.Message );
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
 **sortBy** | **string**|  | [optional] 
 **currentPage** | **string**|  | [optional] 
 **pageSize** | **string**|  | [optional] 
 **filter** | **string**|  | [optional] 
 **searchString** | **string**|  | [optional] 
 **customDocumentModels** | **string**|  | [optional] 
 **range** | **string**|  | [optional] 
 **month** | **string**|  | [optional] 
 **year** | **string**|  | [optional] 
 **startDate** | **string**|  | [optional] 
 **endDate** | **string**|  | [optional] 

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

<a name="debitnotereceivepayment"></a>
# **DebitNoteReceivePayment**
> System.IO.Stream DebitNoteReceivePayment (long id, string culture, PaymentModel paymentModel)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DebitNoteReceivePaymentExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new DebitNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var paymentModel = new PaymentModel(); // PaymentModel | 

            try
            {
                System.IO.Stream result = apiInstance.DebitNoteReceivePayment(id, culture, paymentModel);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling DebitNoteApi.DebitNoteReceivePayment: " + e.Message );
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
 **id** | **long**|  | 
 **culture** | **string**|  | 
 **paymentModel** | [**PaymentModel**](PaymentModel.md)|  | 

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

