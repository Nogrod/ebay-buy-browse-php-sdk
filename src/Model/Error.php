<?php
/**
 * Error
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
 * Error Class Doc Comment
 *
 * @description The type that defines the fields that can be returned in an error.
 * @package  eBay\Buy\Browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Error implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'category' => 'string',
        'domain' => 'string',
        'error_id' => 'int',
        'input_ref_ids' => 'string[]',
        'long_message' => 'string',
        'message' => 'string',
        'output_ref_ids' => 'string[]',
        'parameters' => '\eBay\Buy\Browse\Model\ErrorParameter[]',
        'subdomain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'category' => null,
        'domain' => null,
        'error_id' => 'int32',
        'input_ref_ids' => null,
        'long_message' => null,
        'message' => null,
        'output_ref_ids' => null,
        'parameters' => null,
        'subdomain' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'category' => false,
        'domain' => false,
        'error_id' => false,
        'input_ref_ids' => false,
        'long_message' => false,
        'message' => false,
        'output_ref_ids' => false,
        'parameters' => false,
        'subdomain' => false
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
        'category' => 'category',
        'domain' => 'domain',
        'error_id' => 'errorId',
        'input_ref_ids' => 'inputRefIds',
        'long_message' => 'longMessage',
        'message' => 'message',
        'output_ref_ids' => 'outputRefIds',
        'parameters' => 'parameters',
        'subdomain' => 'subdomain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'category' => 'setCategory',
        'domain' => 'setDomain',
        'error_id' => 'setErrorId',
        'input_ref_ids' => 'setInputRefIds',
        'long_message' => 'setLongMessage',
        'message' => 'setMessage',
        'output_ref_ids' => 'setOutputRefIds',
        'parameters' => 'setParameters',
        'subdomain' => 'setSubdomain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'category' => 'getCategory',
        'domain' => 'getDomain',
        'error_id' => 'getErrorId',
        'input_ref_ids' => 'getInputRefIds',
        'long_message' => 'getLongMessage',
        'message' => 'getMessage',
        'output_ref_ids' => 'getOutputRefIds',
        'parameters' => 'getParameters',
        'subdomain' => 'getSubdomain'
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
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('error_id', $data ?? [], null);
        $this->setIfExists('input_ref_ids', $data ?? [], null);
        $this->setIfExists('long_message', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('output_ref_ids', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('subdomain', $data ?? [], null);
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
     * Gets category
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category This string value indicates the error category. There are three categories of errors: <i>request errors</i>, <i>application errors</i>, and <i>system errors</i>.
     *
     * @return $this
     */
    public function setCategory(?string $category): static
    {
        if (is_null($category)) {
            throw new InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain The name of the primary system where the error occurred. This is relevant for application errors.
     *
     * @return $this
     */
    public function setDomain(?string $domain): static
    {
        if (is_null($domain)) {
            throw new InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets error_id
     *
     * @return int|null
     */
    public function getErrorId(): ?int
    {
        return $this->container['error_id'];
    }

    /**
     * Sets error_id
     *
     * @param int|null $error_id A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     *
     * @return $this
     */
    public function setErrorId(?int $error_id): static
    {
        if (is_null($error_id)) {
            throw new InvalidArgumentException('non-nullable error_id cannot be null');
        }
        $this->container['error_id'] = $error_id;

        return $this;
    }

    /**
     * Gets input_ref_ids
     *
     * @return string[]|null
     */
    public function getInputRefIds(): ?array
    {
        return $this->container['input_ref_ids'];
    }

    /**
     * Sets input_ref_ids
     *
     * @param string[]|null $input_ref_ids An array of reference IDs that identify the specific request elements most closely associated to the error or warning, if any.
     *
     * @return $this
     */
    public function setInputRefIds(?array $input_ref_ids): static
    {
        if (is_null($input_ref_ids)) {
            throw new InvalidArgumentException('non-nullable input_ref_ids cannot be null');
        }
        $this->container['input_ref_ids'] = $input_ref_ids;

        return $this;
    }

    /**
     * Gets long_message
     *
     * @return string|null
     */
    public function getLongMessage(): ?string
    {
        return $this->container['long_message'];
    }

    /**
     * Sets long_message
     *
     * @param string|null $long_message A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem.
     *
     * @return $this
     */
    public function setLongMessage(?string $long_message): static
    {
        if (is_null($long_message)) {
            throw new InvalidArgumentException('non-nullable long_message cannot be null');
        }
        $this->container['long_message'] = $long_message;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message A description of the condition that caused the error or warning.
     *
     * @return $this
     */
    public function setMessage(?string $message): static
    {
        if (is_null($message)) {
            throw new InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets output_ref_ids
     *
     * @return string[]|null
     */
    public function getOutputRefIds(): ?array
    {
        return $this->container['output_ref_ids'];
    }

    /**
     * Sets output_ref_ids
     *
     * @param string[]|null $output_ref_ids An array of reference IDs that identify the specific response elements most closely associated to the error or warning, if any.
     *
     * @return $this
     */
    public function setOutputRefIds(?array $output_ref_ids): static
    {
        if (is_null($output_ref_ids)) {
            throw new InvalidArgumentException('non-nullable output_ref_ids cannot be null');
        }
        $this->container['output_ref_ids'] = $output_ref_ids;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \eBay\Buy\Browse\Model\ErrorParameter[]|null
     */
    public function getParameters(): ?array
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \eBay\Buy\Browse\Model\ErrorParameter[]|null $parameters An array of warning and error messages that return one or more variables contextual information about the error or warning. This is often the field or value that triggered the error or warning.
     *
     * @return $this
     */
    public function setParameters(?array $parameters): static
    {
        if (is_null($parameters)) {
            throw new InvalidArgumentException('non-nullable parameters cannot be null');
        }
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets subdomain
     *
     * @return string|null
     */
    public function getSubdomain(): ?string
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param string|null $subdomain The name of the subdomain in which the error or warning occurred.
     *
     * @return $this
     */
    public function setSubdomain(?string $subdomain): static
    {
        if (is_null($subdomain)) {
            throw new InvalidArgumentException('non-nullable subdomain cannot be null');
        }
        $this->container['subdomain'] = $subdomain;

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


