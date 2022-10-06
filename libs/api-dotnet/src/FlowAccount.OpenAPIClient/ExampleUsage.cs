using FlowAccount.OpenAPI;
using System;
using System.Collections.Generic;
using System.Net.Http;
using System.Text;

namespace FlowAccount.OpenAPIClient
{
  internal class ExampleUsage
  {
    public ExampleUsage()
    {

    }

    public void AddSampleEmployee()
    {
      var http = new HttpClient();
      var apiClient = new EmployeeClient(http);
      apiClient.CreateAsync(new EmployeeModel()
      {

      });
    }

    public void CreateSampleDocument()
    {
      var http = new HttpClient();
      var apiClient = new CashInvoiceClient(http);
      apiClient.CreateAsync("th", new SimpleDocument()
      {

      });
    }
  }
}
