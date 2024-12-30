# Swagger\Client\ManufacturersApi

All URIs are relative to *https://api.remapdb.com/v1/vehicles*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getManufacturer**](ManufacturersApi.md#getmanufacturer) | **GET** /manufacturers/{manufacturer_id} | Show all manufacturer metadata along with its corresponding models
[**listManufacturers**](ManufacturersApi.md#listmanufacturers) | **GET** /manufacturers/type/{type_id} | Show all manufacturers from specific type

# **getManufacturer**
> \Swagger\Client\Model\ManufacturerWModels getManufacturer($manufacturer_id, $accept_language)

Show all manufacturer metadata along with its corresponding models

Show all manufacturer metadata along with its corresponding models.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manufacturer_id = 56; // int | Manufacturer ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->getManufacturer($manufacturer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->getManufacturer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **int**| Manufacturer ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\ManufacturerWModels**](../Model/ManufacturerWModels.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listManufacturers**
> \Swagger\Client\Model\Manufacturer[] listManufacturers($type_id, $accept_language)

Show all manufacturers from specific type

Show all manufacturers from specific type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | Vehicle type ID.
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->listManufacturers($type_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->listManufacturers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **int**| Vehicle type ID. |
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\Manufacturer[]**](../Model/Manufacturer.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

