<?php
/**
 * SellerDetail
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
 * SellerDetail Class Doc Comment
 *
 * @description The type that defines the fields for basic and detailed information about the seller of the item returned by the &lt;b&gt; item&lt;/b&gt; resource.
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SellerDetail implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SellerDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'feedback_percentage' => 'string',
        'feedback_score' => 'int',
        'seller_account_type' => 'string',
        'seller_legal_info' => '\eBay\Buy\Browse\Model\SellerLegalInfo',
        'user_id' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'feedback_percentage' => null,
        'feedback_score' => 'int32',
        'seller_account_type' => null,
        'seller_legal_info' => null,
        'user_id' => null,
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'feedback_percentage' => false,
        'feedback_score' => false,
        'seller_account_type' => false,
        'seller_legal_info' => false,
        'user_id' => false,
        'username' => false
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
        'feedback_percentage' => 'feedbackPercentage',
        'feedback_score' => 'feedbackScore',
        'seller_account_type' => 'sellerAccountType',
        'seller_legal_info' => 'sellerLegalInfo',
        'user_id' => 'userId',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'feedback_percentage' => 'setFeedbackPercentage',
        'feedback_score' => 'setFeedbackScore',
        'seller_account_type' => 'setSellerAccountType',
        'seller_legal_info' => 'setSellerLegalInfo',
        'user_id' => 'setUserId',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'feedback_percentage' => 'getFeedbackPercentage',
        'feedback_score' => 'getFeedbackScore',
        'seller_account_type' => 'getSellerAccountType',
        'seller_legal_info' => 'getSellerLegalInfo',
        'user_id' => 'getUserId',
        'username' => 'getUsername'
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
        $this->setIfExists('feedback_percentage', $data ?? [], null);
        $this->setIfExists('feedback_score', $data ?? [], null);
        $this->setIfExists('seller_account_type', $data ?? [], null);
        $this->setIfExists('seller_legal_info', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
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
     * Gets feedback_percentage
     *
     * @return string|null
     */
    public function getFeedbackPercentage(): ?string
    {
        return $this->container['feedback_percentage'];
    }

    /**
     * Sets feedback_percentage
     *
     * @param string|null $feedback_percentage The percentage of the total positive feedback.
     *
     * @return $this
     */
    public function setFeedbackPercentage(?string $feedback_percentage): static
    {
        if (is_null($feedback_percentage)) {
            throw new InvalidArgumentException('non-nullable feedback_percentage cannot be null');
        }
        $this->container['feedback_percentage'] = $feedback_percentage;

        return $this;
    }

    /**
     * Gets feedback_score
     *
     * @return int|null
     */
    public function getFeedbackScore(): ?int
    {
        return $this->container['feedback_score'];
    }

    /**
     * Sets feedback_score
     *
     * @param int|null $feedback_score The feedback score of the seller. This value is based on the ratings from eBay members that bought items from this seller.
     *
     * @return $this
     */
    public function setFeedbackScore(?int $feedback_score): static
    {
        if (is_null($feedback_score)) {
            throw new InvalidArgumentException('non-nullable feedback_score cannot be null');
        }
        $this->container['feedback_score'] = $feedback_score;

        return $this;
    }

    /**
     * Gets seller_account_type
     *
     * @return string|null
     */
    public function getSellerAccountType(): ?string
    {
        return $this->container['seller_account_type'];
    }

    /**
     * Sets seller_account_type
     *
     * @param string|null $seller_account_type This indicates if the seller is a business or an individual. This is determined when the seller registers with eBay. If they register for a business account, this value will be BUSINESS. If they register for a private account, this value will be INDIVIDUAL. This designation is required by the tax laws in the following countries:  <br><br> This field is returned only on the following sites. <br><br>EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR, EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL <br><br><b> Valid Values:</b> BUSINESS or INDIVIDUAL <br><br>Code so that your app gracefully handles any future changes to this list.
     *
     * @return $this
     */
    public function setSellerAccountType(?string $seller_account_type): static
    {
        if (is_null($seller_account_type)) {
            throw new InvalidArgumentException('non-nullable seller_account_type cannot be null');
        }
        $this->container['seller_account_type'] = $seller_account_type;

        return $this;
    }

    /**
     * Gets seller_legal_info
     *
     * @return \eBay\Buy\Browse\Model\SellerLegalInfo|null
     */
    public function getSellerLegalInfo(): ?\eBay\Buy\Browse\Model\SellerLegalInfo
    {
        return $this->container['seller_legal_info'];
    }

    /**
     * Sets seller_legal_info
     *
     * @param \eBay\Buy\Browse\Model\SellerLegalInfo|null $seller_legal_info seller_legal_info
     *
     * @return $this
     */
    public function setSellerLegalInfo(?\eBay\Buy\Browse\Model\SellerLegalInfo $seller_legal_info): static
    {
        if (is_null($seller_legal_info)) {
            throw new InvalidArgumentException('non-nullable seller_legal_info cannot be null');
        }
        $this->container['seller_legal_info'] = $seller_legal_info;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The unique identifier of an eBay user across all eBay sites. This value does not change, even when a user changes their username.
     *
     * @return $this
     */
    public function setUserId(?string $user_id): static
    {
        if (is_null($user_id)) {
            throw new InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username The user name created by the seller for use on eBay.
     *
     * @return $this
     */
    public function setUsername(?string $username): static
    {
        if (is_null($username)) {
            throw new InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

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


