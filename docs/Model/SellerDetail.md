# SellerDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feedback_percentage** | **string** | The percentage of the total positive feedback. | [optional]
**feedback_score** | **int** | The feedback score of the seller. This value is based on the ratings from eBay members that bought items from this seller. | [optional]
**seller_account_type** | **string** | This indicates if the seller is a business or an individual. This is determined when the seller registers with eBay. If they register for a business account, this value will be &lt;code&gt;BUSINESS&lt;/code&gt;. If they register for a private account, this value will be &lt;code&gt;INDIVIDUAL&lt;/code&gt;. This designation is required by the tax laws in the following countries:  &lt;br&gt;&lt;br&gt; This field is applicable only on the following marketplaces: &lt;br&gt;&lt;ul&gt;&lt;li&gt;EBAY_AT&lt;/li&gt;&lt;li&gt;EBAY_BE&lt;/li&gt;&lt;li&gt;EBAY_CH&lt;/li&gt;&lt;li&gt;EBAY_DE&lt;/li&gt;&lt;li&gt;EBAY_ES&lt;/li&gt;&lt;li&gt;EBAY_FR&lt;/li&gt;&lt;li&gt;EBAY_GB&lt;/li&gt;&lt;li&gt;EBAY_IE&lt;/li&gt;&lt;li&gt;EBAY_IT&lt;/li&gt;&lt;li&gt;EBAY_PL&lt;/li&gt;&lt;/ul&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This field will be returned empty on unsupported marketplaces.&lt;/span&gt;&lt;br&gt;&lt;b&gt; Valid Values:&lt;/b&gt; &lt;code&gt;BUSINESS&lt;/code&gt; or &lt;code&gt;INDIVIDUAL&lt;/code&gt; | [optional]
**seller_legal_info** | [**\eBay\Buy\Browse\Model\SellerLegalInfo**](SellerLegalInfo.md) | The container with the seller&#39;s contact info and fields that are required by law. | [optional]
**user_id** | **string** | The unique identifier of an eBay user across all eBay sites. This value does not change, even when a user changes their username. | [optional]
**username** | **string** | The user name created by the seller for use on eBay.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to &lt;a href&#x3D;\&quot;/api-docs/static/data-handling-update.html\&quot;&gt;Data Handling Compliance&lt;/a&gt;. &lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
