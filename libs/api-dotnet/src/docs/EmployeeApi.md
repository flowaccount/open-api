# Org.OpenAPITools.Api.EmployeeApi

All URIs are relative to *https://openapi.flowaccount.com/sandbox*

Method | HTTP request | Description
------------- | ------------- | -------------
[**EmployeeAddEmployee**](EmployeeApi.md#employeeaddemployee) | **POST** /Employee/manage | 
[**EmployeeGetById**](EmployeeApi.md#employeegetbyid) | **GET** /Employee/{id} | 
[**EmployeeGetCount**](EmployeeApi.md#employeegetcount) | **GET** /Employee/manage/count | 
[**EmployeeGetList**](EmployeeApi.md#employeegetlist) | **POST** /Employee | 
[**EmployeeNotExistList**](EmployeeApi.md#employeenotexistlist) | **POST** /Employee/not-exist | 
[**EmployeeRemove**](EmployeeApi.md#employeeremove) | **DELETE** /Employee/manage/{id}/delete | 
[**EmployeeUpdate**](EmployeeApi.md#employeeupdate) | **PUT** /Employee/manage | 


<a name="employeeaddemployee"></a>
# **EmployeeAddEmployee**
> System.IO.Stream EmployeeAddEmployee (EmployeeModel employeeModel)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmployeeAddEmployeeExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new EmployeeApi(config);
            var employeeModel = new EmployeeModel(); // EmployeeModel | 

            try
            {
                System.IO.Stream result = apiInstance.EmployeeAddEmployee(employeeModel);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling EmployeeApi.EmployeeAddEmployee: " + e.Message );
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
 **employeeModel** | [**EmployeeModel**](EmployeeModel.md)|  | 

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

<a name="employeegetbyid"></a>
# **EmployeeGetById**
> System.IO.Stream EmployeeGetById (long id)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmployeeGetByIdExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new EmployeeApi(config);
            var id = 789L;  // long | 

            try
            {
                System.IO.Stream result = apiInstance.EmployeeGetById(id);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling EmployeeApi.EmployeeGetById: " + e.Message );
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

<a name="employeegetcount"></a>
# **EmployeeGetCount**
> System.IO.Stream EmployeeGetCount ()



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmployeeGetCountExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new EmployeeApi(config);

            try
            {
                System.IO.Stream result = apiInstance.EmployeeGetCount();
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling EmployeeApi.EmployeeGetCount: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

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

<a name="employeegetlist"></a>
# **EmployeeGetList**
> System.IO.Stream EmployeeGetList (PayrollQuery payrollQuery)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmployeeGetListExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new EmployeeApi(config);
            var payrollQuery = new PayrollQuery(); // PayrollQuery | 

            try
            {
                System.IO.Stream result = apiInstance.EmployeeGetList(payrollQuery);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling EmployeeApi.EmployeeGetList: " + e.Message );
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
 **payrollQuery** | [**PayrollQuery**](PayrollQuery.md)|  | 

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

<a name="employeenotexistlist"></a>
# **EmployeeNotExistList**
> System.IO.Stream EmployeeNotExistList (NotExistEmployee notExistEmployee)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmployeeNotExistListExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new EmployeeApi(config);
            var notExistEmployee = new NotExistEmployee(); // NotExistEmployee | 

            try
            {
                System.IO.Stream result = apiInstance.EmployeeNotExistList(notExistEmployee);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling EmployeeApi.EmployeeNotExistList: " + e.Message );
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
 **notExistEmployee** | [**NotExistEmployee**](NotExistEmployee.md)|  | 

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

<a name="employeeremove"></a>
# **EmployeeRemove**
> System.IO.Stream EmployeeRemove (long id)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmployeeRemoveExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new EmployeeApi(config);
            var id = 789L;  // long | 

            try
            {
                System.IO.Stream result = apiInstance.EmployeeRemove(id);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling EmployeeApi.EmployeeRemove: " + e.Message );
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

<a name="employeeupdate"></a>
# **EmployeeUpdate**
> System.IO.Stream EmployeeUpdate (EmployeeModel employeeModel)



### Example
```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmployeeUpdateExample
    {
        public static void Main()
        {
            Configuration config = new Configuration();
            config.BasePath = "https://openapi.flowaccount.com/sandbox";
            // Configure Bearer token for authorization: bearer
            config.AccessToken = "YOUR_BEARER_TOKEN";

            var apiInstance = new EmployeeApi(config);
            var employeeModel = new EmployeeModel(); // EmployeeModel | 

            try
            {
                System.IO.Stream result = apiInstance.EmployeeUpdate(employeeModel);
                Debug.WriteLine(result);
            }
            catch (ApiException  e)
            {
                Debug.Print("Exception when calling EmployeeApi.EmployeeUpdate: " + e.Message );
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
 **employeeModel** | [**EmployeeModel**](EmployeeModel.md)|  | 

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

