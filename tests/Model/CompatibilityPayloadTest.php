<?php
/**
 * CompatibilityPayloadTest
 *
 * PHP version 8.1
 *
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Browse API
 *
 * The Browse API has the following resources:<ul><li><b>item_summary:</b><br>Allows shoppers to search for specific items by keyword, GTIN, category, charity, product, image <a href=\"/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Method\" title=\"Experimental Method\" />(Experimental Method)</a>, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values, or UI parameters.</li><li><b>item:</b><br>Allows shoppers to retrieve the details of a specific item or all items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.<br><br>This resource also provides a bridge between the eBay legacy APIs, such as the <a href=\"/api-docs/user-guides/static/finding-user-guide-landing.html\" target=\"_blank\">Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li></ul>The <b>item_summary</b>, <b>search_by_image</b>, and <b>item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\" target=\"_blank\">Application access token</a>.
 *
 * The version of the OpenAPI document: v1.19.7
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace eBay\Buy\Browse\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * CompatibilityPayloadTest Class Doc Comment
 *
 * @description An array of attribute name/value pairs used to define a specific product. For example: If you wanted to specify a specific car, one of the name/value pairs would be:&lt;br&gt;&lt;br&gt;&lt;code&gt;\&quot;name\&quot; : \&quot;Year\&quot;,&lt;br&gt;\&quot;value\&quot; : \&quot;2019\&quot;&lt;/code&gt;&lt;br&gt;&lt;br&gt;For a list of the attributes required for cars and trucks and motorcycles refer to &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Check\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Check compatibility&lt;/a&gt; in the &lt;a href&#x3D;\&quot;/api-docs/buy/static/buying-ig-landing.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Buying Integration Guide&lt;/a&gt;.
 * @package     eBay\Buy\Browse
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CompatibilityPayloadTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "CompatibilityPayload"
     */
    public function testCompatibilityPayload()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "compatibility_properties"
     */
    public function testPropertyCompatibilityProperties()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
