# Swagger\Client\ModelsApi

All URIs are relative to *https://api.remapdb.com/v1/vehicles*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getModel**](ModelsApi.md#getmodel) | **GET** /models/{model_id} | Show all model metadata along with its corresponding generations
[**listModels**](ModelsApi.md#listmodels) | **GET** /models/manufacturer/{manufacturer_id} | Show all models from specific manufacturer

# **getModel**
> \Swagger\Client\Model\ModelWGenerations getModel($model_id, $accept_language)

Show all model metadata along with its corresponding generations

Show all model metadata along with its corresponding generations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_id = 56; // int | Model ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->getModel($model_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->getModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_id** | **int**| Model ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\ModelWGenerations**](../Model/ModelWGenerations.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listModels**
> \Swagger\Client\Model\ManufacturerModel[] listModels($manufacturer_id, $accept_language)

Show all models from specific manufacturer

Show all models from specific manufacturer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manufacturer_id = 56; // int | Manufacturer ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->listModels($manufacturer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->listModels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **int**| Manufacturer ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\ManufacturerModel[]**](../Model/ManufacturerModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

