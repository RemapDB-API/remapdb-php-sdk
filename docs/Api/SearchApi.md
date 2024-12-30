# RemapDB\SearchApi

All URIs are relative to *https://api.remapdb.com/v1/vehicles*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](SearchApi.md#search) | **GET** /search | Searches through manufacturers, models, generations and engines

# **search**
> \RemapDB\Model\InlineResponse200 search($query, $accept_language)

Searches through manufacturers, models, generations and engines

Searches through manufacturers, models, generations and engines.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = RemapDB\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RemapDB\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new RemapDB\api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Search query.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->search($query, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Search query. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\RemapDB\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

