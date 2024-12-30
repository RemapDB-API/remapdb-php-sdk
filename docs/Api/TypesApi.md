# Swagger\Client\TypesApi

All URIs are relative to *https://api.remapdb.com/v1/vehicles*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTypes**](TypesApi.md#listtypes) | **GET** /types | Show vehicle types

# **listTypes**
> \Swagger\Client\Model\VehicleType[] listTypes($accept_language)

Show vehicle types

Provides a list of all available vehicle types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\TypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "accept_language_example"; // string | Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: `en`.

try {
    $result = $apiInstance->listTypes($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypesApi->listTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Method accept custom language. Content of the header should be the code of the language you are requesting. E.g.: &#x60;en&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\VehicleType[]**](../Model/VehicleType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

