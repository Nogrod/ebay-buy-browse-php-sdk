# Seller

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feedback_percentage** | **string** | The percentage of the total positive feedback. | [optional]
**feedback_score** | **int** | The feedback score of the seller. This value is based on the ratings from eBay members that bought items from this seller. | [optional]
**seller_account_type** | **string** | Indicates if the seller is a business or an individual. This is determined when the seller registers with eBay:&lt;ul&gt;&lt;li&gt;If they register for a business account, this value will be &lt;code&gt;BUSINESS&lt;/code&gt;.&lt;/li&gt;&lt;li&gt;If they register for a private account, this value will be &lt;code&gt;INDIVIDUAL&lt;/code&gt;.&lt;/li&gt;&lt;/ul&gt;This designation is required by the tax laws in some countries.&lt;br&gt;&lt;br&gt;This field is returned only on the following sites:&lt;br&gt;&lt;br&gt;EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL&lt;br&gt;&lt;br&gt;&lt;b&gt;Valid Values:&lt;/b&gt; &lt;code&gt;BUSINESS&lt;/code&gt; or &lt;code&gt;INDIVIDUAL&lt;/code&gt; | [optional]
**username** | **string** | The user name created by the seller for use on eBay.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to &lt;a href&#x3D;\&quot;/api-docs/static/data-handling-update.html\&quot;&gt;Data Handling Compliance&lt;/a&gt;. &lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
