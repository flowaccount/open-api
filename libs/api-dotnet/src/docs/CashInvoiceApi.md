# Org.OpenAPITools.Api.CashInvoiceApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CashInvoiceActorCreate**](CashInvoiceApi.md#cashinvoiceactorcreate) | **POST** /{culture}/cash-invoices/simple-document | 
[**CashInvoiceActorCreateInline**](CashInvoiceApi.md#cashinvoiceactorcreateinline) | **POST** /{culture}/cash-invoices/inline-document | 
[**CashInvoiceChangeStatusByKey**](CashInvoiceApi.md#cashinvoicechangestatusbykey) | **POST** /{culture}/cash-invoices/{documentId}/status-key/{statusKey} | 
[**CashInvoiceDelete**](CashInvoiceApi.md#cashinvoicedelete) | **DELETE** /{culture}/cash-invoices/{id} | 
[**CashInvoiceDetails**](CashInvoiceApi.md#cashinvoicedetails) | **GET** /{culture}/cash-invoices/{id} | 
[**CashInvoiceEdit**](CashInvoiceApi.md#cashinvoiceedit) | **PUT** /{culture}/cash-invoices/simple-document/{id} | 
[**CashInvoiceEdit2**](CashInvoiceApi.md#cashinvoiceedit2) | **PUT** /{culture}/cash-invoices/inline-document/{id} | 
[**CashInvoiceIndex**](CashInvoiceApi.md#cashinvoiceindex) | **GET** /{culture}/cash-invoices | 
[**CashInvoiceReceivePayment**](CashInvoiceApi.md#cashinvoicereceivepayment) | **POST** /{culture}/cash-invoices/{id}/payments | 


<a name="cashinvoiceactorcreate"></a>
# **CashInvoiceActorCreate**
> MessageSent CashInvoiceActorCreate (string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceActorCreateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                MessageSent result = apiInstance.CashInvoiceActorCreate(culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceActorCreate: " + e.Message );
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

<a name="cashinvoiceactorcreateinline"></a>
# **CashInvoiceActorCreateInline**
> MessageSent CashInvoiceActorCreateInline (string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceActorCreateInlineExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                MessageSent result = apiInstance.CashInvoiceActorCreateInline(culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceActorCreateInline: " + e.Message );
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

<a name="cashinvoicechangestatusbykey"></a>
# **CashInvoiceChangeStatusByKey**
> System.IO.Stream CashInvoiceChangeStatusByKey (long documentId, string statusKey, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceChangeStatusByKeyExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var documentId = 789L;  // long | 
            var statusKey = "statusKey_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.CashInvoiceChangeStatusByKey(documentId, statusKey, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceChangeStatusByKey: " + e.Message );
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

<a name="cashinvoicedelete"></a>
# **CashInvoiceDelete**
> System.IO.Stream CashInvoiceDelete (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceDeleteExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.CashInvoiceDelete(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceDelete: " + e.Message );
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

<a name="cashinvoicedetails"></a>
# **CashInvoiceDetails**
> System.IO.Stream CashInvoiceDetails (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceDetailsExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.CashInvoiceDetails(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceDetails: " + e.Message );
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

<a name="cashinvoiceedit"></a>
# **CashInvoiceEdit**
> System.IO.Stream CashInvoiceEdit (long id, string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceEditExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                System.IO.Stream result = apiInstance.CashInvoiceEdit(id, culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceEdit: " + e.Message );
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

<a name="cashinvoiceedit2"></a>
# **CashInvoiceEdit2**
> System.IO.Stream CashInvoiceEdit2 (long id, string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceEdit2Example
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                System.IO.Stream result = apiInstance.CashInvoiceEdit2(id, culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceEdit2: " + e.Message );
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

<a name="cashinvoiceindex"></a>
# **CashInvoiceIndex**
> System.IO.Stream CashInvoiceIndex (string culture, string sortBy = null, string currentPage = null, string pageSize = null, string filter = null, string searchString = null, string customDocumentModels = null, string range = null, string month = null, string year = null, string startDate = null, string endDate = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceIndexExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
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
                System.IO.Stream result = apiInstance.CashInvoiceIndex(culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceIndex: " + e.Message );
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

<a name="cashinvoicereceivepayment"></a>
# **CashInvoiceReceivePayment**
> System.IO.Stream CashInvoiceReceivePayment (long id, string culture, PaymentModel paymentModel)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CashInvoiceReceivePaymentExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new CashInvoiceApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var paymentModel = new PaymentModel(); // PaymentModel | 

            try
            {
                System.IO.Stream result = apiInstance.CashInvoiceReceivePayment(id, culture, paymentModel);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling CashInvoiceApi.CashInvoiceReceivePayment: " + e.Message );
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

