<?php
/**
 * EstimatedAvailability
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
 * EstimatedAvailability Class Doc Comment
 *
 * @description The type that defines the fields for the estimated item availability information.
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class EstimatedAvailability implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EstimatedAvailability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'availability_threshold' => 'int',
        'availability_threshold_type' => 'string',
        'delivery_options' => 'string[]',
        'estimated_availability_status' => 'string',
        'estimated_available_quantity' => 'int',
        'estimated_remaining_quantity' => 'int',
        'estimated_sold_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'availability_threshold' => 'int32',
        'availability_threshold_type' => null,
        'delivery_options' => null,
        'estimated_availability_status' => null,
        'estimated_available_quantity' => 'int32',
        'estimated_remaining_quantity' => 'int32',
        'estimated_sold_quantity' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'availability_threshold' => false,
        'availability_threshold_type' => false,
        'delivery_options' => false,
        'estimated_availability_status' => false,
        'estimated_available_quantity' => false,
        'estimated_remaining_quantity' => false,
        'estimated_sold_quantity' => false
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
        'availability_threshold' => 'availabilityThreshold',
        'availability_threshold_type' => 'availabilityThresholdType',
        'delivery_options' => 'deliveryOptions',
        'estimated_availability_status' => 'estimatedAvailabilityStatus',
        'estimated_available_quantity' => 'estimatedAvailableQuantity',
        'estimated_remaining_quantity' => 'estimatedRemainingQuantity',
        'estimated_sold_quantity' => 'estimatedSoldQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'availability_threshold' => 'setAvailabilityThreshold',
        'availability_threshold_type' => 'setAvailabilityThresholdType',
        'delivery_options' => 'setDeliveryOptions',
        'estimated_availability_status' => 'setEstimatedAvailabilityStatus',
        'estimated_available_quantity' => 'setEstimatedAvailableQuantity',
        'estimated_remaining_quantity' => 'setEstimatedRemainingQuantity',
        'estimated_sold_quantity' => 'setEstimatedSoldQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'availability_threshold' => 'getAvailabilityThreshold',
        'availability_threshold_type' => 'getAvailabilityThresholdType',
        'delivery_options' => 'getDeliveryOptions',
        'estimated_availability_status' => 'getEstimatedAvailabilityStatus',
        'estimated_available_quantity' => 'getEstimatedAvailableQuantity',
        'estimated_remaining_quantity' => 'getEstimatedRemainingQuantity',
        'estimated_sold_quantity' => 'getEstimatedSoldQuantity'
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
        $this->setIfExists('availability_threshold', $data ?? [], null);
        $this->setIfExists('availability_threshold_type', $data ?? [], null);
        $this->setIfExists('delivery_options', $data ?? [], null);
        $this->setIfExists('estimated_availability_status', $data ?? [], null);
        $this->setIfExists('estimated_available_quantity', $data ?? [], null);
        $this->setIfExists('estimated_remaining_quantity', $data ?? [], null);
        $this->setIfExists('estimated_sold_quantity', $data ?? [], null);
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
     * Gets availability_threshold
     *
     * @return int|null
     */
    public function getAvailabilityThreshold(): ?int
    {
        return $this->container['availability_threshold'];
    }

    /**
     * Sets availability_threshold
     *
     * @param int|null $availability_threshold This field is return only when the seller sets their '<a href=\"#display-item-quantity\">display item quantity</a>' preference to <b> Display \"More than 10 available\" in your listing (if applicable)</b>. The value of this field will be \"10\", which is the threshold value. <br><br>Code so that your app gracefully handles any future changes to this value.
     *
     * @return $this
     */
    public function setAvailabilityThreshold(?int $availability_threshold): static
    {
        if (is_null($availability_threshold)) {
            throw new InvalidArgumentException('non-nullable availability_threshold cannot be null');
        }
        $this->container['availability_threshold'] = $availability_threshold;

        return $this;
    }

    /**
     * Gets availability_threshold_type
     *
     * @return string|null
     */
    public function getAvailabilityThresholdType(): ?string
    {
        return $this->container['availability_threshold_type'];
    }

    /**
     * Sets availability_threshold_type
     *
     * @param string|null $availability_threshold_type <a name=\"display-item-quantity\"></a> This field is return only when the seller sets their <b> Display Item Quantity</b> preference to <b> Display \"More than 10 available\" in your listing (if applicable)</b>. The value of this field will be <code> MORE_THAN</code>. This indicates that the seller has more than the 'quantity display preference', which is 10, in stock for this item.    <br><br> The following are the display item quantity preferences the seller can set. <br><ul><li> <b> Display \"More than 10 available\" in your listing (if applicable) </b><ul> <li>If the seller enables this preference, this field is returned as long as there are more than 10 of this item in inventory.</li>  <li> If the quantity is equal to 10 or drops below 10, this field is not returned and the estimated quantity of the item is returned in the <b> estimatedAvailableQuantity</b> field.</li></ul> </li> <li> <b> Display the exact quantity in your items</b> <br>If the seller enables this preference, the <b> availabilityThresholdType</b> and <b> availabilityThreshold</b> fields are not returned and the estimated quantity of the item is returned in the <b> estimatedAvailableQuantity</b> field.<br><br><b> Note: </b> Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. </li></ul>   <br>Code so that your app gracefully handles any future changes to these preferences. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityThresholdEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAvailabilityThresholdType(?string $availability_threshold_type): static
    {
        if (is_null($availability_threshold_type)) {
            throw new InvalidArgumentException('non-nullable availability_threshold_type cannot be null');
        }
        $this->container['availability_threshold_type'] = $availability_threshold_type;

        return $this;
    }

    /**
     * Gets delivery_options
     *
     * @return string[]|null
     */
    public function getDeliveryOptions(): ?array
    {
        return $this->container['delivery_options'];
    }

    /**
     * Sets delivery_options
     *
     * @param string[]|null $delivery_options An array of available delivery options. <br><br><b> Valid Values: </b> SHIP_TO_HOME, SELLER_ARRANGED_LOCAL_PICKUP, IN_STORE_PICKUP, PICKUP_DROP_OFF, or DIGITAL_DELIVERY <br><br>Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setDeliveryOptions(?array $delivery_options): static
    {
        if (is_null($delivery_options)) {
            throw new InvalidArgumentException('non-nullable delivery_options cannot be null');
        }
        $this->container['delivery_options'] = $delivery_options;

        return $this;
    }

    /**
     * Gets estimated_availability_status
     *
     * @return string|null
     */
    public function getEstimatedAvailabilityStatus(): ?string
    {
        return $this->container['estimated_availability_status'];
    }

    /**
     * Sets estimated_availability_status
     *
     * @param string|null $estimated_availability_status An enumeration value representing the inventory status of this item.<br><br><span class=\"tablenote\"><b> Note: </b>Be sure to review the <b>itemEndDate</b> field to determine whether the item is available for purchase.</span><br><br><b> Valid Values: </b> IN_STOCK, LIMITED_STOCK, or OUT_OF_STOCK <br><br>Code so that your app gracefully handles any future changes to this list. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AvailabilityStatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setEstimatedAvailabilityStatus(?string $estimated_availability_status): static
    {
        if (is_null($estimated_availability_status)) {
            throw new InvalidArgumentException('non-nullable estimated_availability_status cannot be null');
        }
        $this->container['estimated_availability_status'] = $estimated_availability_status;

        return $this;
    }

    /**
     * Gets estimated_available_quantity
     *
     * @return int|null
     */
    public function getEstimatedAvailableQuantity(): ?int
    {
        return $this->container['estimated_available_quantity'];
    }

    /**
     * Sets estimated_available_quantity
     *
     * @param int|null $estimated_available_quantity The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned.<br><br><span class=\"tablenote\"><b>Note:</b> To see if a listing is available for purchase, review the <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.itemEndDate\">itemEndDate</a> and <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.estimatedAvailabilities.estimatedAvailabilityStatus\">estimatedAvailablityStatus</a> fields. If the item has an <b>EndDate</b> in the past, or the <b>estimatedAvailabilityStatus</b> is <code>OUT_OF_STOCK</code>, the item is unavailable for purchase.</span>
     *
     * @return $this
     */
    public function setEstimatedAvailableQuantity(?int $estimated_available_quantity): static
    {
        if (is_null($estimated_available_quantity)) {
            throw new InvalidArgumentException('non-nullable estimated_available_quantity cannot be null');
        }
        $this->container['estimated_available_quantity'] = $estimated_available_quantity;

        return $this;
    }

    /**
     * Gets estimated_remaining_quantity
     *
     * @return int|null
     */
    public function getEstimatedRemainingQuantity(): ?int
    {
        return $this->container['estimated_remaining_quantity'];
    }

    /**
     * Sets estimated_remaining_quantity
     *
     * @param int|null $estimated_remaining_quantity The estimated number of this item that are available for purchase. Because the quantity of an item can change several times within a second, it is impossible to return the exact quantity. So instead of returning quantity, the estimated availability of the item is returned.<br><br><span class=\"tablenote\"><b>Note:</b> To see if a listing is available for purchase, review the <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.itemEndDate\">itemEndDate</a> and <a href=\"/api-docs/buy/browse/resources/item/methods/getItem#response.estimatedAvailabilities.estimatedAvailabilityStatus\">estimatedAvailablityStatus</a> fields. If the item has an <b>EndDate</b> in the past, or the <b>estimatedAvailabilityStatus</b> is <code>OUT_OF_STOCK</code>, the item is unavailable for purchase.</span>
     *
     * @return $this
     */
    public function setEstimatedRemainingQuantity(?int $estimated_remaining_quantity): static
    {
        if (is_null($estimated_remaining_quantity)) {
            throw new InvalidArgumentException('non-nullable estimated_remaining_quantity cannot be null');
        }
        $this->container['estimated_remaining_quantity'] = $estimated_remaining_quantity;

        return $this;
    }

    /**
     * Gets estimated_sold_quantity
     *
     * @return int|null
     */
    public function getEstimatedSoldQuantity(): ?int
    {
        return $this->container['estimated_sold_quantity'];
    }

    /**
     * Sets estimated_sold_quantity
     *
     * @param int|null $estimated_sold_quantity The estimated number of this item that have been sold.
     *
     * @return $this
     */
    public function setEstimatedSoldQuantity(?int $estimated_sold_quantity): static
    {
        if (is_null($estimated_sold_quantity)) {
            throw new InvalidArgumentException('non-nullable estimated_sold_quantity cannot be null');
        }
        $this->container['estimated_sold_quantity'] = $estimated_sold_quantity;

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


