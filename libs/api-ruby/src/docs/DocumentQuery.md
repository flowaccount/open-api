# OpenapiClient::DocumentQuery

## Properties

| Name | Type | Description | Notes |
| ---- | ---- | ----------- | ----- |
| **page_size** | **Integer** |  | [optional] |
| **current_page** | **Integer** |  | [optional] |
| **total_records** | **Integer** |  | [optional] |
| **date_type** | [**DateType**](DateType.md) |  | [optional] |
| **start_date** | **Time** |  | [optional] |
| **end_date** | **Time** |  | [optional] |
| **day** | **Integer** |  | [optional] |
| **month** | **Integer** |  | [optional] |
| **year** | **Integer** |  | [optional] |
| **range** | [**DataRange**](DataRange.md) |  | [optional] |
| **is_first_current** | **Integer** |  | [optional] |
| **hash_tags** | **Array&lt;String&gt;** |  | [optional] |
| **report_type** | [**ReportTypes**](ReportTypes.md) |  | [optional] |
| **filter** | [**Array&lt;FilterOptions&gt;**](FilterOptions.md) |  | [optional] |
| **sort_by** | [**Array&lt;SortOptions&gt;**](SortOptions.md) |  | [optional] |
| **total_value** | **Float** |  | [optional] |
| **total_vat** | **Float** |  | [optional] |
| **is_received** | **Boolean** |  | [optional] |
| **document_type** | [**Array&lt;DocumentTypes&gt;**](DocumentTypes.md) |  | [optional] |
| **revenue** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **expenses** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **previous_months** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **previous_years** | [**Array&lt;ListItem&gt;**](ListItem.md) |  | [optional] |
| **custom_document_models** | [**Array&lt;CustomDocumentModel&gt;**](CustomDocumentModel.md) |  | [optional] |

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::DocumentQuery.new(
  page_size: null,
  current_page: null,
  total_records: null,
  date_type: null,
  start_date: null,
  end_date: null,
  day: null,
  month: null,
  year: null,
  range: null,
  is_first_current: null,
  hash_tags: null,
  report_type: null,
  filter: null,
  sort_by: null,
  total_value: null,
  total_vat: null,
  is_received: null,
  document_type: null,
  revenue: null,
  expenses: null,
  previous_months: null,
  previous_years: null,
  custom_document_models: null
)
```

