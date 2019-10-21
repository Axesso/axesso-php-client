# Swagger\Client\AmzApi

All URIs are relative to *http://52.29.167.29*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordSearch**](AmzApi.md#keywordSearch) | **GET** /amz/amazon-search-by-keyword | fetch results auf a keyword search on Amazon
[**requestBuyRecommendation**](AmzApi.md#requestBuyRecommendation) | **GET** /amz/amazon-lookup-buy-recommendations | request buy recommendations to a given product
[**requestProduct**](AmzApi.md#requestProduct) | **GET** /amz/amazon-lookup-product | lookup product information
[**sortOptions**](AmzApi.md#sortOptions) | **GET** /amz/sort-options | request available sort options to use in keyword search


# **keywordSearch**
> \Swagger\Client\Model\KeywordSearchResponse keywordSearch($keyword, $domain_code, $sort_by, $number_of_products)

fetch results auf a keyword search on Amazon



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('axesso-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('axesso-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AmzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword = "keyword_example"; // string | keyword to search
$domain_code = "domain_code_example"; // string | domain for the search
$sort_by = "relevanceblender"; // string | sort option
$number_of_products = 20; // int | number of the results (max 20)

try {
    $result = $apiInstance->keywordSearch($keyword, $domain_code, $sort_by, $number_of_products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmzApi->keywordSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyword** | **string**| keyword to search |
 **domain_code** | **string**| domain for the search |
 **sort_by** | **string**| sort option | [optional] [default to relevanceblender]
 **number_of_products** | **int**| number of the results (max 20) | [optional] [default to 20]

### Return type

[**\Swagger\Client\Model\KeywordSearchResponse**](../Model/KeywordSearchResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestBuyRecommendation**
> \Swagger\Client\Model\BuyRecommendationResponse requestBuyRecommendation($url)

request buy recommendations to a given product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('axesso-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('axesso-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AmzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = "url_example"; // string | The url of the requested product.

try {
    $result = $apiInstance->requestBuyRecommendation($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmzApi->requestBuyRecommendation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| The url of the requested product. |

### Return type

[**\Swagger\Client\Model\BuyRecommendationResponse**](../Model/BuyRecommendationResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestProduct**
> \Swagger\Client\Model\ProductDetailsResponse requestProduct($url, $size)

lookup product information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('axesso-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('axesso-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AmzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = "url_example"; // string | The url of the requested product.
$size = "size_example"; // string | Size parameter if available.

try {
    $result = $apiInstance->requestProduct($url, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmzApi->requestProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| The url of the requested product. |
 **size** | **string**| Size parameter if available. | [optional]

### Return type

[**\Swagger\Client\Model\ProductDetailsResponse**](../Model/ProductDetailsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sortOptions**
> \Swagger\Client\Model\SortOptionResponse sortOptions()

request available sort options to use in keyword search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('axesso-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('axesso-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AmzApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sortOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AmzApi->sortOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SortOptionResponse**](../Model/SortOptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

