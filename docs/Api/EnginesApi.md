# RemapDB\EnginesApi

All URIs are relative to *https://api.remapdb.com/v1/vehicles*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEngine**](EnginesApi.md#getengine) | **GET** /engines/{engine_id} | Show engine metadata along with its performance and tuning information
[**listEngines**](EnginesApi.md#listengines) | **GET** /engines/generation/{generation_id} | Show all engines from specific generation

# **getEngine**
> \RemapDB\Model\EngineWTuning getEngine($engine_id, $accept_language)

Show engine metadata along with its performance and tuning information

Show engine metadata along with its performance and tuning information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = RemapDB\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RemapDB\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new RemapDB\api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = 56; // int | Engine ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting.

try {
    $result = $apiInstance->getEngine($engine_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->getEngine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_id** | **int**| Engine ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. | [optional]

### Return type

[**\RemapDB\Model\EngineWTuning**](../Model/EngineWTuning.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEngines**
> \RemapDB\Model\Engine[] listEngines($generation_id, $accept_language)

Show all engines from specific generation

Show all engines from specific generation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = RemapDB\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RemapDB\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new RemapDB\api\EnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generation_id = 56; // int | Generation ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting.

try {
    $result = $apiInstance->listEngines($generation_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnginesApi->listEngines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generation_id** | **int**| Generation ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. | [optional]

### Return type

[**\RemapDB\Model\Engine[]**](../Model/Engine.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

