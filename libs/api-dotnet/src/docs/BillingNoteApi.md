# Org.OpenAPITools.Api.BillingNoteApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

Method | HTTP request | Description
------------- | ------------- | -------------
[**BillingNoteActorCreate**](BillingNoteApi.md#billingnoteactorcreate) | **POST** /{culture}/billing-notes/simple-document | 
[**BillingNoteActorCreateInline**](BillingNoteApi.md#billingnoteactorcreateinline) | **POST** /{culture}/billing-notes/inline-document | 
[**BillingNoteChangeStatusByKey**](BillingNoteApi.md#billingnotechangestatusbykey) | **POST** /{culture}/billing-notes/{documentId}/status-key/{statusKey} | 
[**BillingNoteDelete**](BillingNoteApi.md#billingnotedelete) | **DELETE** /{culture}/billing-notes/{id} | 
[**BillingNoteDetails**](BillingNoteApi.md#billingnotedetails) | **GET** /{culture}/billing-notes/{id} | 
[**BillingNoteEdit**](BillingNoteApi.md#billingnoteedit) | **PUT** /{culture}/billing-notes/simple-document/{id} | 
[**BillingNoteEdit2**](BillingNoteApi.md#billingnoteedit2) | **PUT** /{culture}/billing-notes/inline-document/{id} | 
[**BillingNoteIndex**](BillingNoteApi.md#billingnoteindex) | **GET** /{culture}/billing-notes | 
[**BillingNoteReceivePayment**](BillingNoteApi.md#billingnotereceivepayment) | **POST** /{culture}/billing-notes/{id}/payments | 


<a name="billingnoteactorcreate"></a>
# **BillingNoteActorCreate**
> MessageSent BillingNoteActorCreate (string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteActorCreateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                MessageSent result = apiInstance.BillingNoteActorCreate(culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteActorCreate: " + e.Message );
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

<a name="billingnoteactorcreateinline"></a>
# **BillingNoteActorCreateInline**
> MessageSent BillingNoteActorCreateInline (string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteActorCreateInlineExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                MessageSent result = apiInstance.BillingNoteActorCreateInline(culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteActorCreateInline: " + e.Message );
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

<a name="billingnotechangestatusbykey"></a>
# **BillingNoteChangeStatusByKey**
> System.IO.Stream BillingNoteChangeStatusByKey (long documentId, string statusKey, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteChangeStatusByKeyExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var documentId = 789L;  // long | 
            var statusKey = "statusKey_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.BillingNoteChangeStatusByKey(documentId, statusKey, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteChangeStatusByKey: " + e.Message );
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

<a name="billingnotedelete"></a>
# **BillingNoteDelete**
> System.IO.Stream BillingNoteDelete (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteDeleteExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.BillingNoteDelete(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteDelete: " + e.Message );
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

<a name="billingnotedetails"></a>
# **BillingNoteDetails**
> System.IO.Stream BillingNoteDetails (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteDetailsExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.BillingNoteDetails(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteDetails: " + e.Message );
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

<a name="billingnoteedit"></a>
# **BillingNoteEdit**
> System.IO.Stream BillingNoteEdit (long id, string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteEditExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                System.IO.Stream result = apiInstance.BillingNoteEdit(id, culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteEdit: " + e.Message );
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

<a name="billingnoteedit2"></a>
# **BillingNoteEdit2**
> System.IO.Stream BillingNoteEdit2 (long id, string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteEdit2Example
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                System.IO.Stream result = apiInstance.BillingNoteEdit2(id, culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteEdit2: " + e.Message );
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

<a name="billingnoteindex"></a>
# **BillingNoteIndex**
> System.IO.Stream BillingNoteIndex (string culture, string sortBy = null, string currentPage = null, string pageSize = null, string filter = null, string searchString = null, string customDocumentModels = null, string range = null, string month = null, string year = null, string startDate = null, string endDate = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteIndexExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
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
                System.IO.Stream result = apiInstance.BillingNoteIndex(culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteIndex: " + e.Message );
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

<a name="billingnotereceivepayment"></a>
# **BillingNoteReceivePayment**
> System.IO.Stream BillingNoteReceivePayment (long id, string culture, PaymentModel paymentModel)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class BillingNoteReceivePaymentExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new BillingNoteApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var paymentModel = new PaymentModel(); // PaymentModel | 

            try
            {
                System.IO.Stream result = apiInstance.BillingNoteReceivePayment(id, culture, paymentModel);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling BillingNoteApi.BillingNoteReceivePayment: " + e.Message );
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

