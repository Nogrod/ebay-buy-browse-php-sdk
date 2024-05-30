<?php
/**
 * ShipToRegion
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
 * Do not edit the class manually.
 */

namespace eBay\Buy\Browse\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use eBay\Buy\Browse\ObjectSerializer;

/**
 * ShipToRegion Class Doc Comment
 *
 * @description This type is used provide details about included and excluded shipping regions.
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ShipToRegion implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipToRegion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'region_id' => 'string',
        'region_name' => 'string',
        'region_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'region_id' => null,
        'region_name' => null,
        'region_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'region_id' => false,
        'region_name' => false,
        'region_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'region_id' => 'regionId',
        'region_name' => 'regionName',
        'region_type' => 'regionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'region_id' => 'setRegionId',
        'region_name' => 'setRegionName',
        'region_type' => 'setRegionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'region_id' => 'getRegionId',
        'region_name' => 'getRegionName',
        'region_type' => 'getRegionType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('region_id', $data ?? [], null);
        $this->setIfExists('region_name', $data ?? [], null);
        $this->setIfExists('region_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets region_id
     *
     * @return string|null
     */
    public function getRegionId(): ?string
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string|null $region_id The unique identifier of the shipping region. The value returned here is dependent on the corresponding <b>regionType</b> value. The <b>regionId</b> value for a region does not vary based on the eBay marketplace. However, the corresponding <b>regionName</b> value for a region is a localized, text-based description of the shipping region. <br><br> If the <b>regionType</b> value is <code>WORLDWIDE</code>, the <b>regionId</b> value will also be <code>WORLDWIDE</code>.<br><br> If the <b>regionType</b> value is <code>WORLD_REGION</code>, the <b>regionId</b> value will be one of the following: <code>AFRICA</code>, <code>AMERICAS</code>, <code>ASIA</code>, <code>AUSTRALIA</code>, <code>CENTRAL_AMERICA_AND_CARIBBEAN</code>, <code>EUROPE</code>, <code>EUROPEAN_UNION</code>, <code>GREATER_CHINA</code>, <code>MIDDLE_EAST</code>, <code>NORTH_AMERICA</code>, <code>OCEANIA</code>, <code>SOUTH_AMERICA</code>, <code>SOUTHEAST_ASIA</code> or <code>CHANNEL_ISLANDS</code>.<br><br>If the <b>regionType</b> value is <code>COUNTRY</code>, the <b>regionId</b> value will be the two-letter code for the country, as defined in the <a href=\"https://www.iso.org/iso-3166-country-codes.html \" target=\"_blank\">ISO 3166</a> standard.<br><br>If the <b>regionType</b> value is <code>STATE_OR_PROVINCE</code>, the <b>regionId</b> value will either be the two-letter code for US states and DC (as defined on this <a href=\"https://www.ssa.gov/international/coc-docs/states.html \" target=\"_blank\">Social Security Administration</a> page), or the two-letter code for Canadian provinces (as defined by this <a href=\"https://www.canadapost.ca/tools/pg/manual/PGaddress-e.asp?ecid=murl10006450#1442131 \" target=\"_blank\">Canada Post</a> page).<br><br>If the <b>regionType</b> value is <code>COUNTRY_REGION</code>, the <b>regionId</b> value may be one of following: <code>_AH</code> (if a seller is not willing to ship to Alaska/Hawaii), <code>_PR</code> (if the seller is not willing to ship to US Protectorates), <code>_AP</code> (if seller is not willing to ship to a US Army or Fleet Post Office), and <code>PO_BOX</code> (if the seller is not willing to ship to a Post Office Box).
     *
     * @return $this
     */
    public function setRegionId(?string $region_id): static
    {
        if (is_null($region_id)) {
            throw new InvalidArgumentException('non-nullable region_id cannot be null');
        }
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets region_name
     *
     * @return string|null
     */
    public function getRegionName(): ?string
    {
        return $this->container['region_name'];
    }

    /**
     * Sets region_name
     *
     * @param string|null $region_name A localized text string that indicates the name of the shipping region. The value returned here is dependent on the corresponding <b>regionType</b> value. <br><br> If the <b>regionType</b> value is <code>WORLDWIDE</code>, the <b>regionName</b> value will show <code>Worldwide</code>.<br><br> If the <b>regionType</b> value is <code>WORLD_REGION</code>, the <b>regionName</b> value will be a localized text string for one of the following large geographical regions: Africa, Americas, Asia, Australia, Central America and Caribbean, Europe, European Union, Greater China, Middle East, North America, Oceania, South America, Southeast Asia, or Channel Islands.<br><br>If the <b>regionType</b> value is <code>COUNTRY</code>, the <b>regionName</b> value will be a localized text string for any country in the world.<br><br>If the <b>regionType</b> value is <code>STATE_OR_PROVINCE</code>, the <b>regionName</b> value will be a localized text string for any US state or Canadian province. <br><br>If the <b>regionType</b> value is <code>COUNTRY_REGION</code>, the <b>regionName</b> value may be a localized version of one of the following: Alaska/Hawaii, US Protectorates, APO/FPO (Army or Fleet Post Office), or PO BOX.
     *
     * @return $this
     */
    public function setRegionName(?string $region_name): static
    {
        if (is_null($region_name)) {
            throw new InvalidArgumentException('non-nullable region_name cannot be null');
        }
        $this->container['region_name'] = $region_name;

        return $this;
    }

    /**
     * Gets region_type
     *
     * @return string|null
     */
    public function getRegionType(): ?string
    {
        return $this->container['region_type'];
    }

    /**
     * Sets region_type
     *
     * @param string|null $region_type An enumeration value that indicates the level or type of shipping region. <br><br><b> Valid Values: </b> <ul><li><b> COUNTRY_REGION </b> - Indicates the region is a domestic region or special location within a country.</li><li><b> STATE_OR_PROVINCE </b> - Indicates the region is a state or province within a country, such as California or New York in the US, or Ontario or Alberta in Canada.</li><li><b> COUNTRY </b> - Indicates the region is a single country.</li><li><b> WORLD_REGION </b> - Indicates the region is a world region, such as Africa, the Middle East, or Southeast Asia.</li><li><b> WORLDWIDE </b> - Indicates the region is the entire world. This value is only applicable for included shiping regions, and not excluded shipping regions.</li></ul> For more detail on the actual <b>regionName</b>/<b>regionId</b> values that will be returned based on the <b>regionType</b> value, see the <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.shipToLocations.regionExcluded.regionId\">regionId</a> and/or <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.shipToLocations.regionExcluded.regionName\">regionName</a> field descriptions.<br><br> Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:RegionTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setRegionType(?string $region_type): static
    {
        if (is_null($region_type)) {
            throw new InvalidArgumentException('non-nullable region_type cannot be null');
        }
        $this->container['region_type'] = $region_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

