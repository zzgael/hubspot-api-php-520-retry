<?php
/**
 * PublicRollingDateRangePropertyOperation
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
 * PublicRollingDateRangePropertyOperation Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Lists
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicRollingDateRangePropertyOperation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicRollingDateRangePropertyOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'include_objects_with_no_value_set' => 'bool',
        'requires_time_zone_conversion' => 'bool',
        'operation_type' => 'string',
        'number_of_days' => 'int',
        'operator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'include_objects_with_no_value_set' => null,
        'requires_time_zone_conversion' => null,
        'operation_type' => null,
        'number_of_days' => 'int32',
        'operator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'include_objects_with_no_value_set' => false,
        'requires_time_zone_conversion' => false,
        'operation_type' => false,
        'number_of_days' => false,
        'operator' => false
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
        'include_objects_with_no_value_set' => 'includeObjectsWithNoValueSet',
        'requires_time_zone_conversion' => 'requiresTimeZoneConversion',
        'operation_type' => 'operationType',
        'number_of_days' => 'numberOfDays',
        'operator' => 'operator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'include_objects_with_no_value_set' => 'setIncludeObjectsWithNoValueSet',
        'requires_time_zone_conversion' => 'setRequiresTimeZoneConversion',
        'operation_type' => 'setOperationType',
        'number_of_days' => 'setNumberOfDays',
        'operator' => 'setOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'include_objects_with_no_value_set' => 'getIncludeObjectsWithNoValueSet',
        'requires_time_zone_conversion' => 'getRequiresTimeZoneConversion',
        'operation_type' => 'getOperationType',
        'number_of_days' => 'getNumberOfDays',
        'operator' => 'getOperator'
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

    public const OPERATION_TYPE_ROLLING_DATE_RANGE = 'ROLLING_DATE_RANGE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_ROLLING_DATE_RANGE,
        ];
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
        $this->setIfExists('include_objects_with_no_value_set', $data ?? [], null);
        $this->setIfExists('requires_time_zone_conversion', $data ?? [], null);
        $this->setIfExists('operation_type', $data ?? [], 'ROLLING_DATE_RANGE');
        $this->setIfExists('number_of_days', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
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

        if ($this->container['include_objects_with_no_value_set'] === null) {
            $invalidProperties[] = "'include_objects_with_no_value_set' can't be null";
        }
        if ($this->container['requires_time_zone_conversion'] === null) {
            $invalidProperties[] = "'requires_time_zone_conversion' can't be null";
        }
        if ($this->container['operation_type'] === null) {
            $invalidProperties[] = "'operation_type' can't be null";
        }
        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!is_null($this->container['operation_type']) && !in_array($this->container['operation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operation_type', must be one of '%s'",
                $this->container['operation_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['number_of_days'] === null) {
            $invalidProperties[] = "'number_of_days' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
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
     * Gets include_objects_with_no_value_set
     *
     * @return bool
     */
    public function getIncludeObjectsWithNoValueSet()
    {
        return $this->container['include_objects_with_no_value_set'];
    }

    /**
     * Sets include_objects_with_no_value_set
     *
     * @param bool $include_objects_with_no_value_set include_objects_with_no_value_set
     *
     * @return self
     */
    public function setIncludeObjectsWithNoValueSet($include_objects_with_no_value_set)
    {
        if (is_null($include_objects_with_no_value_set)) {
            throw new \InvalidArgumentException('non-nullable include_objects_with_no_value_set cannot be null');
        }
        $this->container['include_objects_with_no_value_set'] = $include_objects_with_no_value_set;

        return $this;
    }

    /**
     * Gets requires_time_zone_conversion
     *
     * @return bool
     */
    public function getRequiresTimeZoneConversion()
    {
        return $this->container['requires_time_zone_conversion'];
    }

    /**
     * Sets requires_time_zone_conversion
     *
     * @param bool $requires_time_zone_conversion requires_time_zone_conversion
     *
     * @return self
     */
    public function setRequiresTimeZoneConversion($requires_time_zone_conversion)
    {
        if (is_null($requires_time_zone_conversion)) {
            throw new \InvalidArgumentException('non-nullable requires_time_zone_conversion cannot be null');
        }
        $this->container['requires_time_zone_conversion'] = $requires_time_zone_conversion;

        return $this;
    }

    /**
     * Gets operation_type
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param string $operation_type operation_type
     *
     * @return self
     */
    public function setOperationType($operation_type)
    {
        if (is_null($operation_type)) {
            throw new \InvalidArgumentException('non-nullable operation_type cannot be null');
        }
        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!in_array($operation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operation_type', must be one of '%s'",
                    $operation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets number_of_days
     *
     * @return int
     */
    public function getNumberOfDays()
    {
        return $this->container['number_of_days'];
    }

    /**
     * Sets number_of_days
     *
     * @param int $number_of_days number_of_days
     *
     * @return self
     */
    public function setNumberOfDays($number_of_days)
    {
        if (is_null($number_of_days)) {
            throw new \InvalidArgumentException('non-nullable number_of_days cannot be null');
        }
        $this->container['number_of_days'] = $number_of_days;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $this->container['operator'] = $operator;

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


