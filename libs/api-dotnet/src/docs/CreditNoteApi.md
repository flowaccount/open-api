# Org.OpenAPITools.Api.CreditNoteApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreditNoteActorCreate**](CreditNoteApi.md#creditnoteactorcreate) | **POST** /{culture}/credit-notes/simple-document | 
[**CreditNoteActorCreateInline**](CreditNoteApi.md#creditnoteactorcreateinline) | **POST** /{culture}/credit-notes/inline-document | 
[**CreditNoteChangeStatusByKey**](CreditNoteApi.md#creditnotechangestatusbykey) | **POST** /{culture}/credit-notes/{documentId}/status-key/{statusKey} | 
[**CreditNoteDelete**](CreditNoteApi.md#creditnotedelete) | **DELETE** /{culture}/credit-notes/{id} | 
[**CreditNoteDetails**](CreditNoteApi.md#creditnotedetails) | **GET** /{culture}/credit-notes/{id} | 
[**CreditNoteEdit**](CreditNoteApi.md#creditnoteedit) | **PUT** /{culture}/credit-notes/simple-document/{id} | 
[**CreditNoteEdit2**](CreditNoteApi.md#creditnoteedit2) | **PUT** /{culture}/credit-notes/inline-document/{id} | 
[**CreditNoteGetCumulativeDocumentReferenceList**](CreditNoteApi.md#creditnotegetcumulativedocumentreferencelist) | **GET** /{culture}/credit-notes/cumulative-references | 
[**CreditNoteIndex**](CreditNoteApi.md#creditnoteindex) | **GET** /{culture}/credit-notes | 
[**CreditNoteReceivePayment**](CreditNoteApi.md#creditnotereceivepayment) | **POST** /{culture}/credit-notes/{id}/payments | 


<a name="creditnoteactorcreate"></a>
# **CreditNoteActorCreate**
> MessageSent CreditNoteActorCreate (string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteActorCreateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                MessageSent result = apiInstance.CreditNoteActorCreate(culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteActorCreate: " + e.Message );
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

<a name="creditnoteactorcreateinline"></a>
# **CreditNoteActorCreateInline**
> MessageSent CreditNoteActorCreateInline (string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteActorCreateInlineExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                MessageSent result = apiInstance.CreditNoteActorCreateInline(culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteActorCreateInline: " + e.Message );
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

<a name="creditnotechangestatusbykey"></a>
# **CreditNoteChangeStatusByKey**
> System.IO.Stream CreditNoteChangeStatusByKey (long documentId, string statusKey, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteChangeStatusByKeyExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var documentId = 789L;  // long | 
            var statusKey = "statusKey_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.CreditNoteChangeStatusByKey(documentId, statusKey, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteChangeStatusByKey: " + e.Message );
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

<a name="creditnotedelete"></a>
# **CreditNoteDelete**
> System.IO.Stream CreditNoteDelete (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteDeleteExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.CreditNoteDelete(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteDelete: " + e.Message );
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

<a name="creditnotedetails"></a>
# **CreditNoteDetails**
> System.IO.Stream CreditNoteDetails (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteDetailsExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.CreditNoteDetails(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteDetails: " + e.Message );
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

<a name="creditnoteedit"></a>
# **CreditNoteEdit**
> System.IO.Stream CreditNoteEdit (long id, string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteEditExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                System.IO.Stream result = apiInstance.CreditNoteEdit(id, culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteEdit: " + e.Message );
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

<a name="creditnoteedit2"></a>
# **CreditNoteEdit2**
> System.IO.Stream CreditNoteEdit2 (long id, string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteEdit2Example
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                System.IO.Stream result = apiInstance.CreditNoteEdit2(id, culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteEdit2: " + e.Message );
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

<a name="creditnotegetcumulativedocumentreferencelist"></a>
# **CreditNoteGetCumulativeDocumentReferenceList**
> System.IO.Stream CreditNoteGetCumulativeDocumentReferenceList (string culture, string ids = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteGetCumulativeDocumentReferenceListExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var culture = "culture_example";  // string | 
            var ids = "ids_example";  // string |  (optional) 

            try
            {
                System.IO.Stream result = apiInstance.CreditNoteGetCumulativeDocumentReferenceList(culture, ids);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteGetCumulativeDocumentReferenceList: " + e.Message );
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

<a name="creditnoteindex"></a>
# **CreditNoteIndex**
> System.IO.Stream CreditNoteIndex (string culture, string sortBy = null, string currentPage = null, string pageSize = null, string filter = null, string searchString = null, string customDocumentModels = null, string range = null, string month = null, string year = null, string startDate = null, string endDate = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteIndexExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
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
                System.IO.Stream result = apiInstance.CreditNoteIndex(culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteIndex: " + e.Message );
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

<a name="creditnotereceivepayment"></a>
# **CreditNoteReceivePayment**
> System.IO.Stream CreditNoteReceivePayment (long id, string culture, PaymentModel paymentModel)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreditNoteReceivePaymentExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CreditNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var paymentModel = new PaymentModel(); // PaymentModel | 

            try
            {
                System.IO.Stream result = apiInstance.CreditNoteReceivePayment(id, culture, paymentModel);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CreditNoteApi.CreditNoteReceivePayment: " + e.Message );
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

