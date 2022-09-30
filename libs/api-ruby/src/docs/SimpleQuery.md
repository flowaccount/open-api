# OpenapiClient::SimpleQuery

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

## Example

```ruby
require 'openapi_client'

instance = OpenapiClient::SimpleQuery.new(
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
  sort_by: null
)
```

