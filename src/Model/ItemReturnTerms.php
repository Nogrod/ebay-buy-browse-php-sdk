<?php
/**
 * ItemReturnTerms
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
 * ItemReturnTerms Class Doc Comment
 *
 * @description The type that defines the fields for the seller&#39;s return policy.
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ItemReturnTerms implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemReturnTerms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'extended_holiday_returns_offered' => 'bool',
        'refund_method' => 'string',
        'restocking_fee_percentage' => 'string',
        'return_instructions' => 'string',
        'return_method' => 'string',
        'return_period' => '\eBay\Buy\Browse\Model\TimeDuration',
        'returns_accepted' => 'bool',
        'return_shipping_cost_payer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'extended_holiday_returns_offered' => null,
        'refund_method' => null,
        'restocking_fee_percentage' => null,
        'return_instructions' => null,
        'return_method' => null,
        'return_period' => null,
        'returns_accepted' => null,
        'return_shipping_cost_payer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'extended_holiday_returns_offered' => false,
        'refund_method' => false,
        'restocking_fee_percentage' => false,
        'return_instructions' => false,
        'return_method' => false,
        'return_period' => false,
        'returns_accepted' => false,
        'return_shipping_cost_payer' => false
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
        'extended_holiday_returns_offered' => 'extendedHolidayReturnsOffered',
        'refund_method' => 'refundMethod',
        'restocking_fee_percentage' => 'restockingFeePercentage',
        'return_instructions' => 'returnInstructions',
        'return_method' => 'returnMethod',
        'return_period' => 'returnPeriod',
        'returns_accepted' => 'returnsAccepted',
        'return_shipping_cost_payer' => 'returnShippingCostPayer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'extended_holiday_returns_offered' => 'setExtendedHolidayReturnsOffered',
        'refund_method' => 'setRefundMethod',
        'restocking_fee_percentage' => 'setRestockingFeePercentage',
        'return_instructions' => 'setReturnInstructions',
        'return_method' => 'setReturnMethod',
        'return_period' => 'setReturnPeriod',
        'returns_accepted' => 'setReturnsAccepted',
        'return_shipping_cost_payer' => 'setReturnShippingCostPayer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'extended_holiday_returns_offered' => 'getExtendedHolidayReturnsOffered',
        'refund_method' => 'getRefundMethod',
        'restocking_fee_percentage' => 'getRestockingFeePercentage',
        'return_instructions' => 'getReturnInstructions',
        'return_method' => 'getReturnMethod',
        'return_period' => 'getReturnPeriod',
        'returns_accepted' => 'getReturnsAccepted',
        'return_shipping_cost_payer' => 'getReturnShippingCostPayer'
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
        $this->setIfExists('extended_holiday_returns_offered', $data ?? [], null);
        $this->setIfExists('refund_method', $data ?? [], null);
        $this->setIfExists('restocking_fee_percentage', $data ?? [], null);
        $this->setIfExists('return_instructions', $data ?? [], null);
        $this->setIfExists('return_method', $data ?? [], null);
        $this->setIfExists('return_period', $data ?? [], null);
        $this->setIfExists('returns_accepted', $data ?? [], null);
        $this->setIfExists('return_shipping_cost_payer', $data ?? [], null);
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
     * Gets extended_holiday_returns_offered
     *
     * @return bool|null
     */
    public function getExtendedHolidayReturnsOffered(): ?bool
    {
        return $this->container['extended_holiday_returns_offered'];
    }

    /**
     * Sets extended_holiday_returns_offered
     *
     * @param bool|null $extended_holiday_returns_offered This indicates if the seller has enabled the Extended Holiday Returns feature on the item. Extended Holiday Returns are only applicable during the US holiday season, and gives buyers extra time to return an item. This 'extra time' will typically extend beyond what is set through the <b> returnPeriod</b> value.
     *
     * @return $this
     */
    public function setExtendedHolidayReturnsOffered(?bool $extended_holiday_returns_offered): static
    {
        if (is_null($extended_holiday_returns_offered)) {
            throw new InvalidArgumentException('non-nullable extended_holiday_returns_offered cannot be null');
        }
        $this->container['extended_holiday_returns_offered'] = $extended_holiday_returns_offered;

        return $this;
    }

    /**
     * Gets refund_method
     *
     * @return string|null
     */
    public function getRefundMethod(): ?string
    {
        return $this->container['refund_method'];
    }

    /**
     * Sets refund_method
     *
     * @param string|null $refund_method An enumeration value that indicates how a buyer is refunded when an item is returned. <br><br><b> Valid Values: </b> MONEY_BACK or MERCHANDISE_CREDIT  <br><br>Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:RefundMethodEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setRefundMethod(?string $refund_method): static
    {
        if (is_null($refund_method)) {
            throw new InvalidArgumentException('non-nullable refund_method cannot be null');
        }
        $this->container['refund_method'] = $refund_method;

        return $this;
    }

    /**
     * Gets restocking_fee_percentage
     *
     * @return string|null
     */
    public function getRestockingFeePercentage(): ?string
    {
        return $this->container['restocking_fee_percentage'];
    }

    /**
     * Sets restocking_fee_percentage
     *
     * @param string|null $restocking_fee_percentage This string field indicates the restocking fee percentage that the seller has set on the item. Sellers have the option of setting no restocking fee for an item, or they can set the percentage to 10, 15, or 20 percent. So, if the cost of the item was $100, and the restocking percentage was 20 percent, the buyer would be charged $20 to return that item, so instead of receiving a $100 refund, they would receive $80 due to the restocking fee.
     *
     * @return $this
     */
    public function setRestockingFeePercentage(?string $restocking_fee_percentage): static
    {
        if (is_null($restocking_fee_percentage)) {
            throw new InvalidArgumentException('non-nullable restocking_fee_percentage cannot be null');
        }
        $this->container['restocking_fee_percentage'] = $restocking_fee_percentage;

        return $this;
    }

    /**
     * Gets return_instructions
     *
     * @return string|null
     */
    public function getReturnInstructions(): ?string
    {
        return $this->container['return_instructions'];
    }

    /**
     * Sets return_instructions
     *
     * @param string|null $return_instructions Text written by the seller describing what the buyer needs to do in order to return the item.
     *
     * @return $this
     */
    public function setReturnInstructions(?string $return_instructions): static
    {
        if (is_null($return_instructions)) {
            throw new InvalidArgumentException('non-nullable return_instructions cannot be null');
        }
        $this->container['return_instructions'] = $return_instructions;

        return $this;
    }

    /**
     * Gets return_method
     *
     * @return string|null
     */
    public function getReturnMethod(): ?string
    {
        return $this->container['return_method'];
    }

    /**
     * Sets return_method
     *
     * @param string|null $return_method An enumeration value that indicates the alternative methods for a full refund when an item is returned. This field is returned if the seller offers the buyer an item replacement or exchange instead of a monetary refund. <br><br><b> Valid Values: </b>  <ul><li><b> REPLACEMENT</b> -  Indicates that the buyer has the option of receiving money back for the returned item, or they can choose to have the seller replace the item with an identical item.</li>  <li><b> EXCHANGE</b> - Indicates that the buyer has the option of receiving money back for the returned item, or they can exchange the item for another similar item.</li></ul>  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ReturnMethodEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReturnMethod(?string $return_method): static
    {
        if (is_null($return_method)) {
            throw new InvalidArgumentException('non-nullable return_method cannot be null');
        }
        $this->container['return_method'] = $return_method;

        return $this;
    }

    /**
     * Gets return_period
     *
     * @return \eBay\Buy\Browse\Model\TimeDuration|null
     */
    public function getReturnPeriod(): ?\eBay\Buy\Browse\Model\TimeDuration
    {
        return $this->container['return_period'];
    }

    /**
     * Sets return_period
     *
     * @param \eBay\Buy\Browse\Model\TimeDuration|null $return_period return_period
     *
     * @return $this
     */
    public function setReturnPeriod(?\eBay\Buy\Browse\Model\TimeDuration $return_period): static
    {
        if (is_null($return_period)) {
            throw new InvalidArgumentException('non-nullable return_period cannot be null');
        }
        $this->container['return_period'] = $return_period;

        return $this;
    }

    /**
     * Gets returns_accepted
     *
     * @return bool|null
     */
    public function getReturnsAccepted(): ?bool
    {
        return $this->container['returns_accepted'];
    }

    /**
     * Sets returns_accepted
     *
     * @param bool|null $returns_accepted Indicates whether the seller accepts returns for the item.
     *
     * @return $this
     */
    public function setReturnsAccepted(?bool $returns_accepted): static
    {
        if (is_null($returns_accepted)) {
            throw new InvalidArgumentException('non-nullable returns_accepted cannot be null');
        }
        $this->container['returns_accepted'] = $returns_accepted;

        return $this;
    }

    /**
     * Gets return_shipping_cost_payer
     *
     * @return string|null
     */
    public function getReturnShippingCostPayer(): ?string
    {
        return $this->container['return_shipping_cost_payer'];
    }

    /**
     * Sets return_shipping_cost_payer
     *
     * @param string|null $return_shipping_cost_payer This enumeration value indicates whether the buyer or seller is responsible for return shipping costs when an item is returned. <br><br><b> Valid Values: </b> <ul><li><b> SELLER</b> - Indicates the seller will pay for the shipping costs to return the item.</li>  <li><b> BUYER</b> - Indicates the buyer will pay for the shipping costs to return the item.</li>  </ul>  Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ReturnShippingCostPayerEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReturnShippingCostPayer(?string $return_shipping_cost_payer): static
    {
        if (is_null($return_shipping_cost_payer)) {
            throw new InvalidArgumentException('non-nullable return_shipping_cost_payer cannot be null');
        }
        $this->container['return_shipping_cost_payer'] = $return_shipping_cost_payer;

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


