<?php
/**
 * ListSearchRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lists
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Lists\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Lists\ObjectSerializer;

/**
 * ListSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'list_ids' => 'string[]',
        'offset' => 'int',
        'query' => 'string',
        'count' => 'int',
        'processing_types' => 'string[]',
        'additional_properties' => 'string[]',
        'sort' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'list_ids' => null,
        'offset' => 'int32',
        'query' => null,
        'count' => 'int32',
        'processing_types' => null,
        'additional_properties' => null,
        'sort' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'list_ids' => false,
        'offset' => false,
        'query' => false,
        'count' => false,
        'processing_types' => false,
        'additional_properties' => false,
        'sort' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'list_ids' => 'listIds',
        'offset' => 'offset',
        'query' => 'query',
        'count' => 'count',
        'processing_types' => 'processingTypes',
        'additional_properties' => 'additionalProperties',
        'sort' => 'sort'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_ids' => 'setListIds',
        'offset' => 'setOffset',
        'query' => 'setQuery',
        'count' => 'setCount',
        'processing_types' => 'setProcessingTypes',
        'additional_properties' => 'setAdditionalProperties',
        'sort' => 'setSort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_ids' => 'getListIds',
        'offset' => 'getOffset',
        'query' => 'getQuery',
        'count' => 'getCount',
        'processing_types' => 'getProcessingTypes',
        'additional_properties' => 'getAdditionalProperties',
        'sort' => 'getSort'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('list_ids', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('processing_types', $data ?? [], null);
        $this->setIfExists('additional_properties', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets list_ids
     *
     * @return string[]|null
     */
    public function getListIds()
    {
        return $this->container['list_ids'];
    }

    /**
     * Sets list_ids
     *
     * @param string[]|null $list_ids The `listIds` that will be used to filter results by `listId`. If values are provided, then the response will only include results that have a `listId` in this array.  If no value is provided, or if an empty list is provided, then the results will not be filtered by `listId`.
     *
     * @return self
     */
    public function setListIds($list_ids)
    {
        if (is_null($list_ids)) {
            throw new \InvalidArgumentException('non-nullable list_ids cannot be null');
        }
        $this->container['list_ids'] = $list_ids;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset Value used to paginate through lists. The `offset` provided in the response can be used in the next request to fetch the next page of results. Defaults to `0` if no offset is provided.
     *
     * @return self
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string|null $query The `query` that will be used to search for lists by list name. If no `query` is provided, then the results will include all lists.
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count The number of lists to include in the response. Defaults to `20` if no value is provided. The max `count` is `500`.
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets processing_types
     *
     * @return string[]|null
     */
    public function getProcessingTypes()
    {
        return $this->container['processing_types'];
    }

    /**
     * Sets processing_types
     *
     * @param string[]|null $processing_types The `processingTypes` that will be used to filter results by `processingType`. If values are provided, then the response will only include results that have a `processingType` in this array.  If no value is provided, or if an empty list is provided, then results will not be filtered by `processingType`.  Valid `processingTypes` are: `MANUAL`, `SNAPSHOT`, or `DYNAMIC`.
     *
     * @return self
     */
    public function setProcessingTypes($processing_types)
    {
        if (is_null($processing_types)) {
            throw new \InvalidArgumentException('non-nullable processing_types cannot be null');
        }
        $this->container['processing_types'] = $processing_types;

        return $this;
    }

    /**
     * Gets additional_properties
     *
     * @return string[]|null
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param string[]|null $additional_properties The property names of any additional list properties to include in the response. Properties that do not exist or that are empty for a particular list are not included in the response.  By default, all requests will fetch the following properties for each list: `hs_list_size`, `hs_last_record_added_at`, `hs_last_record_removed_at`, `hs_folder_name`, and `hs_list_reference_count`.
     *
     * @return self
     */
    public function setAdditionalProperties($additional_properties)
    {
        if (is_null($additional_properties)) {
            throw new \InvalidArgumentException('non-nullable additional_properties cannot be null');
        }
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort sort
     *
     * @return self
     */
    public function setSort($sort)
    {
        if (is_null($sort)) {
            throw new \InvalidArgumentException('non-nullable sort cannot be null');
        }
        $this->container['sort'] = $sort;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


