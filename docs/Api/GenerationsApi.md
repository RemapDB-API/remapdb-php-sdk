# RemapDB\GenerationsApi

All URIs are relative to *https://api.remapdb.com/v1/vehicles*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeneration**](GenerationsApi.md#getgeneration) | **GET** /generations/{generation_id} | Show all generation metadata along with its corresponding engines
[**listGenerations**](GenerationsApi.md#listgenerations) | **GET** /generations/model/{model_id} | Show all generations from specific model

# **getGeneration**
> \RemapDB\Model\GenerationWEngines getGeneration($generation_id, $accept_language)

Show all generation metadata along with its corresponding engines

Show all generation metadata along with its corresponding engines.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = RemapDB\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RemapDB\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new RemapDB\api\GenerationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generation_id = 56; // int | Generation ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->getGeneration($generation_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerationsApi->getGeneration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generation_id** | **int**| Generation ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\RemapDB\Model\GenerationWEngines**](../Model/GenerationWEngines.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGenerations**
> \RemapDB\Model\ModelGeneration[] listGenerations($model_id, $accept_language)

Show all generations from specific model

Show all generations from specific model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = RemapDB\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RemapDB\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new RemapDB\api\GenerationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_id = 56; // int | Model ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->listGenerations($model_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerationsApi->listGenerations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_id** | **int**| Model ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\RemapDB\Model\ModelGeneration[]**](../Model/ModelGeneration.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

