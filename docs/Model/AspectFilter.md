# AspectFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The ID of the category. This limits the aspects filtering to this category. | [optional]
**filters** | [**\eBay\Buy\Browse\Model\FilterField[]**](FilterField.md) | An array of aspects of the category identified by &lt;b&gt;categoryId&lt;/b&gt;, with one or more aspect values in the form &lt;code&gt;&lt;i&gt;name&lt;/i&gt;:{&lt;i&gt;value1&lt;/i&gt;|&lt;i&gt;value2&lt;/i&gt;}&lt;/code&gt;. e.g. &lt;code&gt;Brand:{adidas|Nike}&lt;/code&gt;. Possible values can be found in the category&#39;s &lt;b&gt;refinement.aspectDistributions&lt;/b&gt; container. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
