# Org.OpenAPITools.Api.ReceiptApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ReceiptActorCreate**](ReceiptApi.md#receiptactorcreate) | **POST** /{culture}/receipts/simple-document | 
[**ReceiptActorCreateInline**](ReceiptApi.md#receiptactorcreateinline) | **POST** /{culture}/receipts/inline-document | 
[**ReceiptChangeStatusByKey**](ReceiptApi.md#receiptchangestatusbykey) | **POST** /{culture}/receipts/{documentId}/status-key/{statusKey} | 
[**ReceiptDelete**](ReceiptApi.md#receiptdelete) | **DELETE** /{culture}/receipts/{id} | 
[**ReceiptDetails**](ReceiptApi.md#receiptdetails) | **GET** /{culture}/receipts/{id} | 
[**ReceiptEdit**](ReceiptApi.md#receiptedit) | **PUT** /{culture}/receipts/simple-document/{id} | 
[**ReceiptEdit2**](ReceiptApi.md#receiptedit2) | **PUT** /{culture}/receipts/inline-document/{id} | 
[**ReceiptGetBusinessCategories**](ReceiptApi.md#receiptgetbusinesscategories) | **GET** /{culture}/receipts/categories/business | 
[**ReceiptGetChartOfAccounts**](ReceiptApi.md#receiptgetchartofaccounts) | **GET** /{culture}/receipts/categories/accounting | 
[**ReceiptIndex**](ReceiptApi.md#receiptindex) | **GET** /{culture}/receipts | 
[**ReceiptReceivePayment**](ReceiptApi.md#receiptreceivepayment) | **POST** /{culture}/receipts/{id}/payments | 


<a name="receiptactorcreate"></a>
# **ReceiptActorCreate**
> MessageSent ReceiptActorCreate (string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptActorCreateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                MessageSent result = apiInstance.ReceiptActorCreate(culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptActorCreate: " + e.Message );
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

<a name="receiptactorcreateinline"></a>
# **ReceiptActorCreateInline**
> MessageSent ReceiptActorCreateInline (string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptActorCreateInlineExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                MessageSent result = apiInstance.ReceiptActorCreateInline(culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptActorCreateInline: " + e.Message );
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

<a name="receiptchangestatusbykey"></a>
# **ReceiptChangeStatusByKey**
> System.IO.Stream ReceiptChangeStatusByKey (long documentId, string statusKey, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptChangeStatusByKeyExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var documentId = 789L;  // long | 
            var statusKey = "statusKey_example";  // string | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptChangeStatusByKey(documentId, statusKey, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptChangeStatusByKey: " + e.Message );
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

<a name="receiptdelete"></a>
# **ReceiptDelete**
> System.IO.Stream ReceiptDelete (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptDeleteExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptDelete(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptDelete: " + e.Message );
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

<a name="receiptdetails"></a>
# **ReceiptDetails**
> System.IO.Stream ReceiptDetails (long id, string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptDetailsExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptDetails(id, culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptDetails: " + e.Message );
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

<a name="receiptedit"></a>
# **ReceiptEdit**
> System.IO.Stream ReceiptEdit (long id, string culture, SimpleDocument simpleDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptEditExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var simpleDocument = new SimpleDocument(); // SimpleDocument | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptEdit(id, culture, simpleDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptEdit: " + e.Message );
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

<a name="receiptedit2"></a>
# **ReceiptEdit2**
> System.IO.Stream ReceiptEdit2 (long id, string culture, InlineDocument inlineDocument)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptEdit2Example
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var inlineDocument = new InlineDocument(); // InlineDocument | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptEdit2(id, culture, inlineDocument);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptEdit2: " + e.Message );
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

<a name="receiptgetbusinesscategories"></a>
# **ReceiptGetBusinessCategories**
> System.IO.Stream ReceiptGetBusinessCategories (string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptGetBusinessCategoriesExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptGetBusinessCategories(culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptGetBusinessCategories: " + e.Message );
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

<a name="receiptgetchartofaccounts"></a>
# **ReceiptGetChartOfAccounts**
> System.IO.Stream ReceiptGetChartOfAccounts (string culture)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptGetChartOfAccountsExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var culture = "culture_example";  // string | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptGetChartOfAccounts(culture);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptGetChartOfAccounts: " + e.Message );
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

<a name="receiptindex"></a>
# **ReceiptIndex**
> System.IO.Stream ReceiptIndex (string culture, string sortBy = null, string currentPage = null, string pageSize = null, string filter = null, string searchString = null, string customDocumentModels = null, string range = null, string month = null, string year = null, string startDate = null, string endDate = null)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptIndexExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
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
                System.IO.Stream result = apiInstance.ReceiptIndex(culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptIndex: " + e.Message );
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

<a name="receiptreceivepayment"></a>
# **ReceiptReceivePayment**
> System.IO.Stream ReceiptReceivePayment (long id, string culture, PaymentModel paymentModel)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class ReceiptReceivePaymentExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new ReceiptApi(config);
            var id = 789L;  // long | 
            var culture = "culture_example";  // string | 
            var paymentModel = new PaymentModel(); // PaymentModel | 

            try
            {
                System.IO.Stream result = apiInstance.ReceiptReceivePayment(id, culture, paymentModel);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling ReceiptApi.ReceiptReceivePayment: " + e.Message );
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

