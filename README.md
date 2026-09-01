# OpenAPIClient-php

The <b>Browse API</b> lets shoppers search eBay listings by keyword, category, GTIN, product, charity, compatibility criteria, or image, and refine results with filters such as aspects, compatibility, field values, and UI parameters through the <b>item_summary</b> resource.<br><br>The <b>item</b> resource lets applications retrieve detailed information for a specific item or all items in an item group, and check whether a product is compatible with a specified item, such as whether a specific vehicle is compatible with a specific part. The <b>item</b> resource also supports legacy item identifiers alongside RESTful item IDs, which use different formats. This helps developers work with stored or historical legacy item IDs when using the <b>Browse API</b>.<br><br>All methods in the <b>Browse API</b> require an Application access token, which is obtained using the <a href=\"/develop/guides-v2/authorization#the-client-credentials-grant-flow\"  target=\"_blank\">client credentials grant flow</a>.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/nogrod/ebay-buy-browse-php-sdk.git"
    }
  ],
  "require": {
    "nogrod/ebay-buy-browse-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = eBay\Buy\Browse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new eBay\Buy\Browse\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | This path parameter specifies the unique RESTful identifier of an item (such as the park you want to check).<br><br><b>RESTful Item ID Format: </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code><br><br>For a single SKU listing, pass in the item ID: <pre>v1|2**********2|0</pre>For a multi-SKU listing, pass in the identifier of the variation:<pre>v1|1**********2|4**********2</pre><br>For more information about item IDs for RESTful APIs, refer to <a href=\"/api-docs/buy/static/api-browse.html#Legacy\" target=\"_blank\">Item ID legacy API compatibility overview</a> in the <a href=\"/api-docs/buy/static/buying-ig-landing.html\" target=\"_blank\">Buying Integration Guide</a>.
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header identifies the seller's eBay marketplace. It is required for all marketplaces outside of the US.<br><br><span class=\"tablenote\"><b>Note:</b> If the marketplace ID value is invalid or missing, the default value of <code>EBAY_US</code> is used.</span><br>See <a href=\"/develop/api/buy/browse_api#buy-browse_api-item-getitem.marketplaceidenum\">MarketplaceIdEnum</a> for a list of supported marketplaces.<br><br><b>Default:</b> <code>EBAY_US</code>
$accept_language = 'accept_language_example'; // string | This header is used to indicate the natural language and locale preferred by the user for the response.<br><br>This header is required when targeting a specific locale of a marketplace that supports multiple locales. For example:<ul><li>When targeting the French locale of the Belgium marketplace, it is required to pass in <code>fr-BE</code> to specify this. If this locale is not specified, the language will default to Dutch.</li><li>When targeting the French locale of the Canadian marketplace, it is required to pass in <code>fr-CA</code> to specify this. If this locale is not specified, the language will default to English.</li></ul>
$compatibility_payload = new \eBay\Buy\Browse\Model\CompatibilityPayload(); // \eBay\Buy\Browse\Model\CompatibilityPayload

try {
    $result = $apiInstance->checkCompatibility($item_id, $x_ebay_c_marketplace_id, $accept_language, $compatibility_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->checkCompatibility: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/buy/browse/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ItemApi* | [**checkCompatibility**](docs/Api/ItemApi.md#checkcompatibility) | **POST** /item/{item_id}/check_compatibility | 
*ItemApi* | [**getItem**](docs/Api/ItemApi.md#getitem) | **GET** /item/{item_id} | 
*ItemApi* | [**getItemByLegacyId**](docs/Api/ItemApi.md#getitembylegacyid) | **GET** /item/get_item_by_legacy_id | 
*ItemApi* | [**getItems**](docs/Api/ItemApi.md#getitems) | **GET** /item | 
*ItemApi* | [**getItemsByItemGroup**](docs/Api/ItemApi.md#getitemsbyitemgroup) | **GET** /item/get_items_by_item_group | 
*ItemSummaryApi* | [**search**](docs/Api/ItemSummaryApi.md#search) | **GET** /item_summary/search | 
*ItemSummaryApi* | [**searchByImage**](docs/Api/ItemSummaryApi.md#searchbyimage) | **POST** /item_summary/search_by_image | 

## Models

- [AdditionalProductIdentity](docs/Model/AdditionalProductIdentity.md)
- [AddonService](docs/Model/AddonService.md)
- [AddonServiceSelectionEnum](docs/Model/AddonServiceSelectionEnum.md)
- [AddonServiceTypeEnum](docs/Model/AddonServiceTypeEnum.md)
- [Address](docs/Model/Address.md)
- [Amount](docs/Model/Amount.md)
- [Aspect](docs/Model/Aspect.md)
- [AspectDistribution](docs/Model/AspectDistribution.md)
- [AspectFilter](docs/Model/AspectFilter.md)
- [AspectGroup](docs/Model/AspectGroup.md)
- [AspectValueDistribution](docs/Model/AspectValueDistribution.md)
- [AttributeNameValue](docs/Model/AttributeNameValue.md)
- [AuthenticityGuaranteeProgram](docs/Model/AuthenticityGuaranteeProgram.md)
- [AuthenticityVerificationProgram](docs/Model/AuthenticityVerificationProgram.md)
- [AutoCorrections](docs/Model/AutoCorrections.md)
- [AvailabilityStatusEnum](docs/Model/AvailabilityStatusEnum.md)
- [AvailabilityThresholdEnum](docs/Model/AvailabilityThresholdEnum.md)
- [AvailableCoupon](docs/Model/AvailableCoupon.md)
- [BuyingOptionDistribution](docs/Model/BuyingOptionDistribution.md)
- [Category](docs/Model/Category.md)
- [CategoryDistribution](docs/Model/CategoryDistribution.md)
- [CommonDescriptions](docs/Model/CommonDescriptions.md)
- [CompanyAddress](docs/Model/CompanyAddress.md)
- [CompatibilityFilter](docs/Model/CompatibilityFilter.md)
- [CompatibilityMatchEnum](docs/Model/CompatibilityMatchEnum.md)
- [CompatibilityPayload](docs/Model/CompatibilityPayload.md)
- [CompatibilityProperty](docs/Model/CompatibilityProperty.md)
- [CompatibilityResponse](docs/Model/CompatibilityResponse.md)
- [CompatibilityStatus](docs/Model/CompatibilityStatus.md)
- [CompatibilityStatusEnum](docs/Model/CompatibilityStatusEnum.md)
- [ConditionDescriptor](docs/Model/ConditionDescriptor.md)
- [ConditionDescriptorValue](docs/Model/ConditionDescriptorValue.md)
- [ConditionDistribution](docs/Model/ConditionDistribution.md)
- [ConvertedAmount](docs/Model/ConvertedAmount.md)
- [CoreItem](docs/Model/CoreItem.md)
- [CountryCodeEnum](docs/Model/CountryCodeEnum.md)
- [CouponConstraint](docs/Model/CouponConstraint.md)
- [CouponDiscountType](docs/Model/CouponDiscountType.md)
- [CouponDiscountTypeEnum](docs/Model/CouponDiscountTypeEnum.md)
- [CurrencyCodeEnum](docs/Model/CurrencyCodeEnum.md)
- [DeliveryOptionsEnum](docs/Model/DeliveryOptionsEnum.md)
- [EconomicOperator](docs/Model/EconomicOperator.md)
- [Error](docs/Model/Error.md)
- [ErrorDetailV3](docs/Model/ErrorDetailV3.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [ErrorParameterV3](docs/Model/ErrorParameterV3.md)
- [EstimatedAvailability](docs/Model/EstimatedAvailability.md)
- [FilterField](docs/Model/FilterField.md)
- [FulfilledThroughEnum](docs/Model/FulfilledThroughEnum.md)
- [HazardPictogram](docs/Model/HazardPictogram.md)
- [HazardStatement](docs/Model/HazardStatement.md)
- [HazardousMaterialsLabels](docs/Model/HazardousMaterialsLabels.md)
- [Image](docs/Model/Image.md)
- [Item](docs/Model/Item.md)
- [ItemCharityTerms](docs/Model/ItemCharityTerms.md)
- [ItemGroup](docs/Model/ItemGroup.md)
- [ItemGroupSummary](docs/Model/ItemGroupSummary.md)
- [ItemGroupTypeEnum](docs/Model/ItemGroupTypeEnum.md)
- [ItemLocationImpl](docs/Model/ItemLocationImpl.md)
- [ItemReturnTerms](docs/Model/ItemReturnTerms.md)
- [ItemSummary](docs/Model/ItemSummary.md)
- [Items](docs/Model/Items.md)
- [LegalAddress](docs/Model/LegalAddress.md)
- [MarketingPrice](docs/Model/MarketingPrice.md)
- [MarketplaceIdEnum](docs/Model/MarketplaceIdEnum.md)
- [PaymentInstructionEnum](docs/Model/PaymentInstructionEnum.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodBrand](docs/Model/PaymentMethodBrand.md)
- [PaymentMethodBrandEnum](docs/Model/PaymentMethodBrandEnum.md)
- [PaymentMethodTypeEnum](docs/Model/PaymentMethodTypeEnum.md)
- [PickupOptionSummary](docs/Model/PickupOptionSummary.md)
- [PriceDisplayConditionEnum](docs/Model/PriceDisplayConditionEnum.md)
- [PriceTreatmentEnum](docs/Model/PriceTreatmentEnum.md)
- [Product](docs/Model/Product.md)
- [ProductIdentity](docs/Model/ProductIdentity.md)
- [ProductSafetyLabelPictogram](docs/Model/ProductSafetyLabelPictogram.md)
- [ProductSafetyLabelStatement](docs/Model/ProductSafetyLabelStatement.md)
- [ProductSafetyLabels](docs/Model/ProductSafetyLabels.md)
- [RangeValue](docs/Model/RangeValue.md)
- [RatingHistogram](docs/Model/RatingHistogram.md)
- [Refinement](docs/Model/Refinement.md)
- [RefundMethodEnum](docs/Model/RefundMethodEnum.md)
- [Region](docs/Model/Region.md)
- [RegionTypeEnum](docs/Model/RegionTypeEnum.md)
- [ResponsiblePerson](docs/Model/ResponsiblePerson.md)
- [ResponsiblePersonTypeEnum](docs/Model/ResponsiblePersonTypeEnum.md)
- [ReturnMethodEnum](docs/Model/ReturnMethodEnum.md)
- [ReturnShippingCostPayerEnum](docs/Model/ReturnShippingCostPayerEnum.md)
- [ReviewRating](docs/Model/ReviewRating.md)
- [SearchByImageRequest](docs/Model/SearchByImageRequest.md)
- [SearchPagedCollection](docs/Model/SearchPagedCollection.md)
- [Seller](docs/Model/Seller.md)
- [SellerCustomPolicy](docs/Model/SellerCustomPolicy.md)
- [SellerCustomPolicyTypeEnum](docs/Model/SellerCustomPolicyTypeEnum.md)
- [SellerDetail](docs/Model/SellerDetail.md)
- [SellerInstructionEnum](docs/Model/SellerInstructionEnum.md)
- [SellerLegalInfo](docs/Model/SellerLegalInfo.md)
- [ShipToLocation](docs/Model/ShipToLocation.md)
- [ShipToLocations](docs/Model/ShipToLocations.md)
- [ShipToRegion](docs/Model/ShipToRegion.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [ShippingOptionSummary](docs/Model/ShippingOptionSummary.md)
- [SortField](docs/Model/SortField.md)
- [TargetLocation](docs/Model/TargetLocation.md)
- [TaxJurisdiction](docs/Model/TaxJurisdiction.md)
- [TaxType](docs/Model/TaxType.md)
- [TaxTypeEnum](docs/Model/TaxTypeEnum.md)
- [Taxes](docs/Model/Taxes.md)
- [TimeDuration](docs/Model/TimeDuration.md)
- [TimeDurationUnitEnum](docs/Model/TimeDurationUnitEnum.md)
- [TypedNameValue](docs/Model/TypedNameValue.md)
- [ValueTypeEnum](docs/Model/ValueTypeEnum.md)
- [VatDetail](docs/Model/VatDetail.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.item.bulk**: Retrieve eBay items in bulk.
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.20.4`
    - Generator version: `7.25.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
