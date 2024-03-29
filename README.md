# SwaggerClient-php
Use this api to fetch information to Amazon products and more.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://52.29.167.29*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AmzApi* | [**keywordSearch**](docs/Api/AmzApi.md#keywordsearch) | **GET** /amz/amazon-search-by-keyword | fetch results auf a keyword search on Amazon
*AmzApi* | [**requestBuyRecommendation**](docs/Api/AmzApi.md#requestbuyrecommendation) | **GET** /amz/amazon-lookup-buy-recommendations | request buy recommendations to a given product
*AmzApi* | [**requestProduct**](docs/Api/AmzApi.md#requestproduct) | **GET** /amz/amazon-lookup-product | lookup product information
*AmzApi* | [**sortOptions**](docs/Api/AmzApi.md#sortoptions) | **GET** /amz/sort-options | request available sort options to use in keyword search


## Documentation For Models

 - [BuyRecommendationResponse](docs/Model/BuyRecommendationResponse.md)
 - [KeywordSearchResponse](docs/Model/KeywordSearchResponse.md)
 - [ProductDetailsResponse](docs/Model/ProductDetailsResponse.md)
 - [SortOptionResponse](docs/Model/SortOptionResponse.md)
 - [SortOptionResponseSortOptions](docs/Model/SortOptionResponseSortOptions.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: axesso-api-key
- **Location**: HTTP header


## Author

support@axesso.de


