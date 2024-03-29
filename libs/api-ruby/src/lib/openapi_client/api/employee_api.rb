=begin
#FlowAccount Open API

#No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.4.0

=end

require 'cgi'

module OpenapiClient
  class EmployeeApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end
    # Count employees
    # @param [Hash] opts the optional parameters
    # @return [File]
    def employee_count(opts = {})
      data, _status_code, _headers = employee_count_with_http_info(opts)
      data
    end

    # Count employees
    # @param [Hash] opts the optional parameters
    # @return [Array<(File, Integer, Hash)>] File data, response status code and response headers
    def employee_count_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EmployeeApi.employee_count ...'
      end
      # resource path
      local_var_path = '/Employee/count'

      # query parameters
      query_params = opts[:query_params] || {}

      # header parameters
      header_params = opts[:header_params] || {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/octet-stream'])

      # form parameters
      form_params = opts[:form_params] || {}

      # http body (model)
      post_body = opts[:debug_body]

      # return_type
      return_type = opts[:debug_return_type] || 'File'

      # auth_names
      auth_names = opts[:debug_auth_names] || ['bearer']

      new_options = opts.merge(
        :operation => :"EmployeeApi.employee_count",
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => return_type
      )

      data, status_code, headers = @api_client.call_api(:GET, local_var_path, new_options)
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EmployeeApi#employee_count\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # Create Employee
    # @param employee_model [EmployeeModel] 
    # @param [Hash] opts the optional parameters
    # @return [File]
    def employee_create(employee_model, opts = {})
      data, _status_code, _headers = employee_create_with_http_info(employee_model, opts)
      data
    end

    # Create Employee
    # @param employee_model [EmployeeModel] 
    # @param [Hash] opts the optional parameters
    # @return [Array<(File, Integer, Hash)>] File data, response status code and response headers
    def employee_create_with_http_info(employee_model, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EmployeeApi.employee_create ...'
      end
      # verify the required parameter 'employee_model' is set
      if @api_client.config.client_side_validation && employee_model.nil?
        fail ArgumentError, "Missing the required parameter 'employee_model' when calling EmployeeApi.employee_create"
      end
      # resource path
      local_var_path = '/Employee'

      # query parameters
      query_params = opts[:query_params] || {}

      # header parameters
      header_params = opts[:header_params] || {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/octet-stream'])
      # HTTP header 'Content-Type'
      content_type = @api_client.select_header_content_type(['application/json'])
      if !content_type.nil?
          header_params['Content-Type'] = content_type
      end

      # form parameters
      form_params = opts[:form_params] || {}

      # http body (model)
      post_body = opts[:debug_body] || @api_client.object_to_http_body(employee_model)

      # return_type
      return_type = opts[:debug_return_type] || 'File'

      # auth_names
      auth_names = opts[:debug_auth_names] || ['bearer']

      new_options = opts.merge(
        :operation => :"EmployeeApi.employee_create",
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => return_type
      )

      data, status_code, headers = @api_client.call_api(:POST, local_var_path, new_options)
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EmployeeApi#employee_create\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # Update Employee
    # @param employee_model [EmployeeModel] 
    # @param [Hash] opts the optional parameters
    # @return [File]
    def employee_edit(employee_model, opts = {})
      data, _status_code, _headers = employee_edit_with_http_info(employee_model, opts)
      data
    end

    # Update Employee
    # @param employee_model [EmployeeModel] 
    # @param [Hash] opts the optional parameters
    # @return [Array<(File, Integer, Hash)>] File data, response status code and response headers
    def employee_edit_with_http_info(employee_model, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EmployeeApi.employee_edit ...'
      end
      # verify the required parameter 'employee_model' is set
      if @api_client.config.client_side_validation && employee_model.nil?
        fail ArgumentError, "Missing the required parameter 'employee_model' when calling EmployeeApi.employee_edit"
      end
      # resource path
      local_var_path = '/Employee'

      # query parameters
      query_params = opts[:query_params] || {}

      # header parameters
      header_params = opts[:header_params] || {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/octet-stream'])
      # HTTP header 'Content-Type'
      content_type = @api_client.select_header_content_type(['application/json'])
      if !content_type.nil?
          header_params['Content-Type'] = content_type
      end

      # form parameters
      form_params = opts[:form_params] || {}

      # http body (model)
      post_body = opts[:debug_body] || @api_client.object_to_http_body(employee_model)

      # return_type
      return_type = opts[:debug_return_type] || 'File'

      # auth_names
      auth_names = opts[:debug_auth_names] || ['bearer']

      new_options = opts.merge(
        :operation => :"EmployeeApi.employee_edit",
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => return_type
      )

      data, status_code, headers = @api_client.call_api(:PUT, local_var_path, new_options)
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EmployeeApi#employee_edit\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # Get employee by Id
    # @param id [Integer] 
    # @param [Hash] opts the optional parameters
    # @return [File]
    def employee_get_by_id(id, opts = {})
      data, _status_code, _headers = employee_get_by_id_with_http_info(id, opts)
      data
    end

    # Get employee by Id
    # @param id [Integer] 
    # @param [Hash] opts the optional parameters
    # @return [Array<(File, Integer, Hash)>] File data, response status code and response headers
    def employee_get_by_id_with_http_info(id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EmployeeApi.employee_get_by_id ...'
      end
      # verify the required parameter 'id' is set
      if @api_client.config.client_side_validation && id.nil?
        fail ArgumentError, "Missing the required parameter 'id' when calling EmployeeApi.employee_get_by_id"
      end
      # resource path
      local_var_path = '/Employee/{id}'.sub('{' + 'id' + '}', CGI.escape(id.to_s))

      # query parameters
      query_params = opts[:query_params] || {}

      # header parameters
      header_params = opts[:header_params] || {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/octet-stream'])

      # form parameters
      form_params = opts[:form_params] || {}

      # http body (model)
      post_body = opts[:debug_body]

      # return_type
      return_type = opts[:debug_return_type] || 'File'

      # auth_names
      auth_names = opts[:debug_auth_names] || ['bearer']

      new_options = opts.merge(
        :operation => :"EmployeeApi.employee_get_by_id",
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => return_type
      )

      data, status_code, headers = @api_client.call_api(:GET, local_var_path, new_options)
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EmployeeApi#employee_get_by_id\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # Get employee list with payrollQuery model
    # @param payroll_query [PayrollQuery] 
    # @param [Hash] opts the optional parameters
    # @return [File]
    def employee_get_list(payroll_query, opts = {})
      data, _status_code, _headers = employee_get_list_with_http_info(payroll_query, opts)
      data
    end

    # Get employee list with payrollQuery model
    # @param payroll_query [PayrollQuery] 
    # @param [Hash] opts the optional parameters
    # @return [Array<(File, Integer, Hash)>] File data, response status code and response headers
    def employee_get_list_with_http_info(payroll_query, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EmployeeApi.employee_get_list ...'
      end
      # verify the required parameter 'payroll_query' is set
      if @api_client.config.client_side_validation && payroll_query.nil?
        fail ArgumentError, "Missing the required parameter 'payroll_query' when calling EmployeeApi.employee_get_list"
      end
      # resource path
      local_var_path = '/Employee'

      # query parameters
      query_params = opts[:query_params] || {}

      # header parameters
      header_params = opts[:header_params] || {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/octet-stream'])
      # HTTP header 'Content-Type'
      content_type = @api_client.select_header_content_type(['application/json'])
      if !content_type.nil?
          header_params['Content-Type'] = content_type
      end

      # form parameters
      form_params = opts[:form_params] || {}

      # http body (model)
      post_body = opts[:debug_body] || @api_client.object_to_http_body(payroll_query)

      # return_type
      return_type = opts[:debug_return_type] || 'File'

      # auth_names
      auth_names = opts[:debug_auth_names] || ['bearer']

      new_options = opts.merge(
        :operation => :"EmployeeApi.employee_get_list",
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => return_type
      )

      data, status_code, headers = @api_client.call_api(:GET, local_var_path, new_options)
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EmployeeApi#employee_get_list\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # Delete/Remove Employee by Id
    # @param id [Integer] 
    # @param [Hash] opts the optional parameters
    # @return [File]
    def employee_remove(id, opts = {})
      data, _status_code, _headers = employee_remove_with_http_info(id, opts)
      data
    end

    # Delete/Remove Employee by Id
    # @param id [Integer] 
    # @param [Hash] opts the optional parameters
    # @return [Array<(File, Integer, Hash)>] File data, response status code and response headers
    def employee_remove_with_http_info(id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug 'Calling API: EmployeeApi.employee_remove ...'
      end
      # verify the required parameter 'id' is set
      if @api_client.config.client_side_validation && id.nil?
        fail ArgumentError, "Missing the required parameter 'id' when calling EmployeeApi.employee_remove"
      end
      # resource path
      local_var_path = '/Employee/{id}'.sub('{' + 'id' + '}', CGI.escape(id.to_s))

      # query parameters
      query_params = opts[:query_params] || {}

      # header parameters
      header_params = opts[:header_params] || {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/octet-stream'])

      # form parameters
      form_params = opts[:form_params] || {}

      # http body (model)
      post_body = opts[:debug_body]

      # return_type
      return_type = opts[:debug_return_type] || 'File'

      # auth_names
      auth_names = opts[:debug_auth_names] || ['bearer']

      new_options = opts.merge(
        :operation => :"EmployeeApi.employee_remove",
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => return_type
      )

      data, status_code, headers = @api_client.call_api(:DELETE, local_var_path, new_options)
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: EmployeeApi#employee_remove\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
