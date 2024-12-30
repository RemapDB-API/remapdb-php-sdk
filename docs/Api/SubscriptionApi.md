# Swagger\Client\SubscriptionApi

All URIs are relative to *https://api.remapdb.com/v1/vehicles*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkSubscription**](SubscriptionApi.md#checksubscription) | **GET** /subscription | Check for active subscription

# **checkSubscription**
> \Swagger\Client\Model\Subscription checkSubscription()

Check for active subscription

This method allows you to check if the authenticated API key has access to RemapDB’s API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->checkSubscription();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->checkSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

