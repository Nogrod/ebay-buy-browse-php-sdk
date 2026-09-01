# RangeValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end** | **string** | Specifies the end or upper limit of the range. This can be empty which equates to greater than or equal to the start or lower limit. | [optional]
**exclusive_end** | **bool** | Specifies whether the &lt;code&gt;end&lt;/code&gt; value is to be included in the range. For example, if &lt;code&gt; end&lt;/code&gt; is &lt;code&gt;100&lt;/code&gt;, and &lt;code&gt;exclusiveEnd&lt;/code&gt; is &lt;code&gt;true&lt;/code&gt;, the end range would be &amp;lt;100. But if it is set to &lt;code&gt;false&lt;/code&gt;, it is &amp;lt;&#x3D;100. | [optional]
**exclusive_start** | **bool** | Specifies whether the &lt;code&gt;start&lt;/code&gt; value is to be included in the range. For example, if &lt;code&gt;start&lt;/code&gt; is &lt;code&gt;60&lt;/code&gt;, and &lt;code&gt;exclusiveStart&lt;/code&gt; is &lt;code&gt;true&lt;/code&gt;, the start range would be &amp;gt;60. But if it is set to &lt;code&gt;false&lt;/code&gt;, it is &amp;gt;&#x3D;60. | [optional]
**range** | **bool** | Specifies whether the filter is for a range of values. | [optional]
**start** | **string** | Specifies the start or lower limit of the range. This can be empty which equates to lesser than or equal to the end or upper limit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
