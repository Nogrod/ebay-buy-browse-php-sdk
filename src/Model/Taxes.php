<?php
/**
 * Taxes
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
 * The Browse API has the following resources:<ul><li><b>item_summary:</b><br>Allows shoppers to search for specific items by keyword, GTIN, category, charity, product, image, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values, or UI parameters.</li><li><b>item:</b><br>Allows shoppers to retrieve the details of a specific item or all items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.<br><br>This resource also provides a bridge between the eBay legacy APIs, such as the <a href=\"/api-docs/user-guides/static/finding-user-guide-landing.html\" target=\"_blank\">Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li></ul>The <b>item_summary</b>, <b>search_by_image</b>, and <b>item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\" target=\"_blank\">Application access token</a>.
 *
 * The version of the OpenAPI document: v1.20.1
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
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
 * Taxes Class Doc Comment
 *
 * @description The type that defines the tax fields.
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Taxes implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Taxes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'ebay_collect_and_remit_tax' => 'bool',
        'included_in_price' => 'bool',
        'shipping_and_handling_taxed' => 'bool',
        'tax_jurisdiction' => '\eBay\Buy\Browse\Model\TaxJurisdiction',
        'tax_percentage' => 'string',
        'tax_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ebay_collect_and_remit_tax' => null,
        'included_in_price' => null,
        'shipping_and_handling_taxed' => null,
        'tax_jurisdiction' => null,
        'tax_percentage' => null,
        'tax_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'ebay_collect_and_remit_tax' => false,
        'included_in_price' => false,
        'shipping_and_handling_taxed' => false,
        'tax_jurisdiction' => false,
        'tax_percentage' => false,
        'tax_type' => false
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
        'ebay_collect_and_remit_tax' => 'ebayCollectAndRemitTax',
        'included_in_price' => 'includedInPrice',
        'shipping_and_handling_taxed' => 'shippingAndHandlingTaxed',
        'tax_jurisdiction' => 'taxJurisdiction',
        'tax_percentage' => 'taxPercentage',
        'tax_type' => 'taxType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'ebay_collect_and_remit_tax' => 'setEbayCollectAndRemitTax',
        'included_in_price' => 'setIncludedInPrice',
        'shipping_and_handling_taxed' => 'setShippingAndHandlingTaxed',
        'tax_jurisdiction' => 'setTaxJurisdiction',
        'tax_percentage' => 'setTaxPercentage',
        'tax_type' => 'setTaxType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'ebay_collect_and_remit_tax' => 'getEbayCollectAndRemitTax',
        'included_in_price' => 'getIncludedInPrice',
        'shipping_and_handling_taxed' => 'getShippingAndHandlingTaxed',
        'tax_jurisdiction' => 'getTaxJurisdiction',
        'tax_percentage' => 'getTaxPercentage',
        'tax_type' => 'getTaxType'
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('ebay_collect_and_remit_tax', $data ?? [], null);
        $this->setIfExists('included_in_price', $data ?? [], null);
        $this->setIfExists('shipping_and_handling_taxed', $data ?? [], null);
        $this->setIfExists('tax_jurisdiction', $data ?? [], null);
        $this->setIfExists('tax_percentage', $data ?? [], null);
        $this->setIfExists('tax_type', $data ?? [], null);
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
     * Gets ebay_collect_and_remit_tax
     *
     * @return bool|null
     */
    public function getEbayCollectAndRemitTax(): ?bool
    {
        return $this->container['ebay_collect_and_remit_tax'];
    }

    /**
     * Sets ebay_collect_and_remit_tax
     *
     * @param bool|null $ebay_collect_and_remit_tax This field is only returned if <code>true</code>, and indicates that eBay will collect tax (sales tax, Goods and Services tax, or VAT) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence.
     *
     * @return $this
     */
    public function setEbayCollectAndRemitTax(?bool $ebay_collect_and_remit_tax): static
    {
        if (is_null($ebay_collect_and_remit_tax)) {
            throw new InvalidArgumentException('non-nullable ebay_collect_and_remit_tax cannot be null');
        }
        $this->container['ebay_collect_and_remit_tax'] = $ebay_collect_and_remit_tax;

        return $this;
    }

    /**
     * Gets included_in_price
     *
     * @return bool|null
     */
    public function getIncludedInPrice(): ?bool
    {
        return $this->container['included_in_price'];
    }

    /**
     * Sets included_in_price
     *
     * @param bool|null $included_in_price This indicates if tax was applied for the cost of the item.
     *
     * @return $this
     */
    public function setIncludedInPrice(?bool $included_in_price): static
    {
        if (is_null($included_in_price)) {
            throw new InvalidArgumentException('non-nullable included_in_price cannot be null');
        }
        $this->container['included_in_price'] = $included_in_price;

        return $this;
    }

    /**
     * Gets shipping_and_handling_taxed
     *
     * @return bool|null
     */
    public function getShippingAndHandlingTaxed(): ?bool
    {
        return $this->container['shipping_and_handling_taxed'];
    }

    /**
     * Sets shipping_and_handling_taxed
     *
     * @param bool|null $shipping_and_handling_taxed This indicates if tax is applied for the shipping cost.
     *
     * @return $this
     */
    public function setShippingAndHandlingTaxed(?bool $shipping_and_handling_taxed): static
    {
        if (is_null($shipping_and_handling_taxed)) {
            throw new InvalidArgumentException('non-nullable shipping_and_handling_taxed cannot be null');
        }
        $this->container['shipping_and_handling_taxed'] = $shipping_and_handling_taxed;

        return $this;
    }

    /**
     * Gets tax_jurisdiction
     *
     * @return \eBay\Buy\Browse\Model\TaxJurisdiction|null
     */
    public function getTaxJurisdiction(): ?\eBay\Buy\Browse\Model\TaxJurisdiction
    {
        return $this->container['tax_jurisdiction'];
    }

    /**
     * Sets tax_jurisdiction
     *
     * @param \eBay\Buy\Browse\Model\TaxJurisdiction|null $tax_jurisdiction tax_jurisdiction
     *
     * @return $this
     */
    public function setTaxJurisdiction(?\eBay\Buy\Browse\Model\TaxJurisdiction $tax_jurisdiction): static
    {
        if (is_null($tax_jurisdiction)) {
            throw new InvalidArgumentException('non-nullable tax_jurisdiction cannot be null');
        }
        $this->container['tax_jurisdiction'] = $tax_jurisdiction;

        return $this;
    }

    /**
     * Gets tax_percentage
     *
     * @return string|null
     */
    public function getTaxPercentage(): ?string
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param string|null $tax_percentage The percentage of tax.
     *
     * @return $this
     */
    public function setTaxPercentage(?string $tax_percentage): static
    {
        if (is_null($tax_percentage)) {
            throw new InvalidArgumentException('non-nullable tax_percentage cannot be null');
        }
        $this->container['tax_percentage'] = $tax_percentage;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType(): ?string
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type This field indicates the type of tax that may be collected for the item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:TaxType'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setTaxType(?string $tax_type): static
    {
        if (is_null($tax_type)) {
            throw new InvalidArgumentException('non-nullable tax_type cannot be null');
        }
        $this->container['tax_type'] = $tax_type;

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


