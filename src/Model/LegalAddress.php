<?php
/**
 * LegalAddress
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
 * LegalAddress Class Doc Comment
 *
 * @description Type that defines the fields for the seller&#39;s address.
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LegalAddress implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LegalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'country' => 'string',
        'country_name' => 'string',
        'county' => 'string',
        'postal_code' => 'string',
        'state_or_province' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'city' => null,
        'country' => null,
        'country_name' => null,
        'county' => null,
        'postal_code' => null,
        'state_or_province' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'address_line1' => false,
        'address_line2' => false,
        'city' => false,
        'country' => false,
        'country_name' => false,
        'county' => false,
        'postal_code' => false,
        'state_or_province' => false
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
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'city' => 'city',
        'country' => 'country',
        'country_name' => 'countryName',
        'county' => 'county',
        'postal_code' => 'postalCode',
        'state_or_province' => 'stateOrProvince'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'country' => 'setCountry',
        'country_name' => 'setCountryName',
        'county' => 'setCounty',
        'postal_code' => 'setPostalCode',
        'state_or_province' => 'setStateOrProvince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'country' => 'getCountry',
        'country_name' => 'getCountryName',
        'county' => 'getCounty',
        'postal_code' => 'getPostalCode',
        'state_or_province' => 'getStateOrProvince'
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
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('country_name', $data ?? [], null);
        $this->setIfExists('county', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('state_or_province', $data ?? [], null);
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
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 The first line of the street address.
     *
     * @return $this
     */
    public function setAddressLine1(?string $address_line1): static
    {
        if (is_null($address_line1)) {
            throw new InvalidArgumentException('non-nullable address_line1 cannot be null');
        }
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 The second line of the street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'.
     *
     * @return $this
     */
    public function setAddressLine2(?string $address_line2): static
    {
        if (is_null($address_line2)) {
            throw new InvalidArgumentException('non-nullable address_line2 cannot be null');
        }
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city of the address.
     *
     * @return $this
     */
    public function setCity(?string $city): static
    {
        if (is_null($city)) {
            throw new InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The two-letter <a href=\"https://www.iso.org/iso-3166-country-codes.html \" target=\"_blank\">ISO 3166</a> standard of the country of the address. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCountry(?string $country): static
    {
        if (is_null($country)) {
            throw new InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string|null $country_name The name of the country of the address.
     *
     * @return $this
     */
    public function setCountryName(?string $country_name): static
    {
        if (is_null($country_name)) {
            throw new InvalidArgumentException('non-nullable country_name cannot be null');
        }
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty(): ?string
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county The name of the county of the address.
     *
     * @return $this
     */
    public function setCounty(?string $county): static
    {
        if (is_null($county)) {
            throw new InvalidArgumentException('non-nullable county cannot be null');
        }
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code of the address.
     *
     * @return $this
     */
    public function setPostalCode(?string $postal_code): static
    {
        if (is_null($postal_code)) {
            throw new InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_or_province
     *
     * @return string|null
     */
    public function getStateOrProvince(): ?string
    {
        return $this->container['state_or_province'];
    }

    /**
     * Sets state_or_province
     *
     * @param string|null $state_or_province The state or province of the address.
     *
     * @return $this
     */
    public function setStateOrProvince(?string $state_or_province): static
    {
        if (is_null($state_or_province)) {
            throw new InvalidArgumentException('non-nullable state_or_province cannot be null');
        }
        $this->container['state_or_province'] = $state_or_province;

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

