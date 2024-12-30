<?php
/**
 * PublicActionDefinition
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Automation Actions V4
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Automation\Actions\Model;

use \ArrayAccess;
use \HubSpot\Client\Automation\Actions\ObjectSerializer;

/**
 * PublicActionDefinition Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicActionDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicActionDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'functions' => '\HubSpot\Client\Automation\Actions\Model\PublicActionFunctionIdentifier[]',
        'action_url' => 'string',
        'published' => 'bool',
        'labels' => 'array<string,\HubSpot\Client\Automation\Actions\Model\PublicActionLabels>',
        'input_fields' => '\HubSpot\Client\Automation\Actions\Model\InputFieldDefinition[]',
        'output_fields' => '\HubSpot\Client\Automation\Actions\Model\OutputFieldDefinition[]',
        'revision_id' => 'string',
        'archived_at' => 'int',
        'input_field_dependencies' => '\HubSpot\Client\Automation\Actions\Model\PublicActionDefinitionInputFieldDependenciesInner[]',
        'execution_rules' => '\HubSpot\Client\Automation\Actions\Model\PublicExecutionTranslationRule[]',
        'id' => 'string',
        'object_types' => 'string[]',
        'object_request_options' => '\HubSpot\Client\Automation\Actions\Model\PublicObjectRequestOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'functions' => null,
        'action_url' => null,
        'published' => null,
        'labels' => null,
        'input_fields' => null,
        'output_fields' => null,
        'revision_id' => null,
        'archived_at' => 'int64',
        'input_field_dependencies' => null,
        'execution_rules' => null,
        'id' => null,
        'object_types' => null,
        'object_request_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'functions' => false,
        'action_url' => false,
        'published' => false,
        'labels' => false,
        'input_fields' => false,
        'output_fields' => false,
        'revision_id' => false,
        'archived_at' => false,
        'input_field_dependencies' => false,
        'execution_rules' => false,
        'id' => false,
        'object_types' => false,
        'object_request_options' => false
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
        'functions' => 'functions',
        'action_url' => 'actionUrl',
        'published' => 'published',
        'labels' => 'labels',
        'input_fields' => 'inputFields',
        'output_fields' => 'outputFields',
        'revision_id' => 'revisionId',
        'archived_at' => 'archivedAt',
        'input_field_dependencies' => 'inputFieldDependencies',
        'execution_rules' => 'executionRules',
        'id' => 'id',
        'object_types' => 'objectTypes',
        'object_request_options' => 'objectRequestOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'functions' => 'setFunctions',
        'action_url' => 'setActionUrl',
        'published' => 'setPublished',
        'labels' => 'setLabels',
        'input_fields' => 'setInputFields',
        'output_fields' => 'setOutputFields',
        'revision_id' => 'setRevisionId',
        'archived_at' => 'setArchivedAt',
        'input_field_dependencies' => 'setInputFieldDependencies',
        'execution_rules' => 'setExecutionRules',
        'id' => 'setId',
        'object_types' => 'setObjectTypes',
        'object_request_options' => 'setObjectRequestOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'functions' => 'getFunctions',
        'action_url' => 'getActionUrl',
        'published' => 'getPublished',
        'labels' => 'getLabels',
        'input_fields' => 'getInputFields',
        'output_fields' => 'getOutputFields',
        'revision_id' => 'getRevisionId',
        'archived_at' => 'getArchivedAt',
        'input_field_dependencies' => 'getInputFieldDependencies',
        'execution_rules' => 'getExecutionRules',
        'id' => 'getId',
        'object_types' => 'getObjectTypes',
        'object_request_options' => 'getObjectRequestOptions'
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
        $this->setIfExists('functions', $data ?? [], null);
        $this->setIfExists('action_url', $data ?? [], null);
        $this->setIfExists('published', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('input_fields', $data ?? [], null);
        $this->setIfExists('output_fields', $data ?? [], null);
        $this->setIfExists('revision_id', $data ?? [], null);
        $this->setIfExists('archived_at', $data ?? [], null);
        $this->setIfExists('input_field_dependencies', $data ?? [], null);
        $this->setIfExists('execution_rules', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('object_types', $data ?? [], null);
        $this->setIfExists('object_request_options', $data ?? [], null);
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

        if ($this->container['functions'] === null) {
            $invalidProperties[] = "'functions' can't be null";
        }
        if ($this->container['action_url'] === null) {
            $invalidProperties[] = "'action_url' can't be null";
        }
        if ($this->container['published'] === null) {
            $invalidProperties[] = "'published' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['input_fields'] === null) {
            $invalidProperties[] = "'input_fields' can't be null";
        }
        if ($this->container['revision_id'] === null) {
            $invalidProperties[] = "'revision_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['object_types'] === null) {
            $invalidProperties[] = "'object_types' can't be null";
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
     * Gets functions
     *
     * @return \HubSpot\Client\Automation\Actions\Model\PublicActionFunctionIdentifier[]
     */
    public function getFunctions()
    {
        return $this->container['functions'];
    }

    /**
     * Sets functions
     *
     * @param \HubSpot\Client\Automation\Actions\Model\PublicActionFunctionIdentifier[] $functions functions
     *
     * @return self
     */
    public function setFunctions($functions)
    {
        if (is_null($functions)) {
            throw new \InvalidArgumentException('non-nullable functions cannot be null');
        }
        $this->container['functions'] = $functions;

        return $this;
    }

    /**
     * Gets action_url
     *
     * @return string
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string $action_url action_url
     *
     * @return self
     */
    public function setActionUrl($action_url)
    {
        if (is_null($action_url)) {
            throw new \InvalidArgumentException('non-nullable action_url cannot be null');
        }
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published published
     *
     * @return self
     */
    public function setPublished($published)
    {
        if (is_null($published)) {
            throw new \InvalidArgumentException('non-nullable published cannot be null');
        }
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return array<string,\HubSpot\Client\Automation\Actions\Model\PublicActionLabels>
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param array<string,\HubSpot\Client\Automation\Actions\Model\PublicActionLabels> $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets input_fields
     *
     * @return \HubSpot\Client\Automation\Actions\Model\InputFieldDefinition[]
     */
    public function getInputFields()
    {
        return $this->container['input_fields'];
    }

    /**
     * Sets input_fields
     *
     * @param \HubSpot\Client\Automation\Actions\Model\InputFieldDefinition[] $input_fields input_fields
     *
     * @return self
     */
    public function setInputFields($input_fields)
    {
        if (is_null($input_fields)) {
            throw new \InvalidArgumentException('non-nullable input_fields cannot be null');
        }
        $this->container['input_fields'] = $input_fields;

        return $this;
    }

    /**
     * Gets output_fields
     *
     * @return \HubSpot\Client\Automation\Actions\Model\OutputFieldDefinition[]|null
     */
    public function getOutputFields()
    {
        return $this->container['output_fields'];
    }

    /**
     * Sets output_fields
     *
     * @param \HubSpot\Client\Automation\Actions\Model\OutputFieldDefinition[]|null $output_fields output_fields
     *
     * @return self
     */
    public function setOutputFields($output_fields)
    {
        if (is_null($output_fields)) {
            throw new \InvalidArgumentException('non-nullable output_fields cannot be null');
        }
        $this->container['output_fields'] = $output_fields;

        return $this;
    }

    /**
     * Gets revision_id
     *
     * @return string
     */
    public function getRevisionId()
    {
        return $this->container['revision_id'];
    }

    /**
     * Sets revision_id
     *
     * @param string $revision_id revision_id
     *
     * @return self
     */
    public function setRevisionId($revision_id)
    {
        if (is_null($revision_id)) {
            throw new \InvalidArgumentException('non-nullable revision_id cannot be null');
        }
        $this->container['revision_id'] = $revision_id;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return int|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param int|null $archived_at archived_at
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        if (is_null($archived_at)) {
            throw new \InvalidArgumentException('non-nullable archived_at cannot be null');
        }
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets input_field_dependencies
     *
     * @return \HubSpot\Client\Automation\Actions\Model\PublicActionDefinitionInputFieldDependenciesInner[]|null
     */
    public function getInputFieldDependencies()
    {
        return $this->container['input_field_dependencies'];
    }

    /**
     * Sets input_field_dependencies
     *
     * @param \HubSpot\Client\Automation\Actions\Model\PublicActionDefinitionInputFieldDependenciesInner[]|null $input_field_dependencies input_field_dependencies
     *
     * @return self
     */
    public function setInputFieldDependencies($input_field_dependencies)
    {
        if (is_null($input_field_dependencies)) {
            throw new \InvalidArgumentException('non-nullable input_field_dependencies cannot be null');
        }
        $this->container['input_field_dependencies'] = $input_field_dependencies;

        return $this;
    }

    /**
     * Gets execution_rules
     *
     * @return \HubSpot\Client\Automation\Actions\Model\PublicExecutionTranslationRule[]|null
     */
    public function getExecutionRules()
    {
        return $this->container['execution_rules'];
    }

    /**
     * Sets execution_rules
     *
     * @param \HubSpot\Client\Automation\Actions\Model\PublicExecutionTranslationRule[]|null $execution_rules execution_rules
     *
     * @return self
     */
    public function setExecutionRules($execution_rules)
    {
        if (is_null($execution_rules)) {
            throw new \InvalidArgumentException('non-nullable execution_rules cannot be null');
        }
        $this->container['execution_rules'] = $execution_rules;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_types
     *
     * @return string[]
     */
    public function getObjectTypes()
    {
        return $this->container['object_types'];
    }

    /**
     * Sets object_types
     *
     * @param string[] $object_types object_types
     *
     * @return self
     */
    public function setObjectTypes($object_types)
    {
        if (is_null($object_types)) {
            throw new \InvalidArgumentException('non-nullable object_types cannot be null');
        }
        $this->container['object_types'] = $object_types;

        return $this;
    }

    /**
     * Gets object_request_options
     *
     * @return \HubSpot\Client\Automation\Actions\Model\PublicObjectRequestOptions|null
     */
    public function getObjectRequestOptions()
    {
        return $this->container['object_request_options'];
    }

    /**
     * Sets object_request_options
     *
     * @param \HubSpot\Client\Automation\Actions\Model\PublicObjectRequestOptions|null $object_request_options object_request_options
     *
     * @return self
     */
    public function setObjectRequestOptions($object_request_options)
    {
        if (is_null($object_request_options)) {
            throw new \InvalidArgumentException('non-nullable object_request_options cannot be null');
        }
        $this->container['object_request_options'] = $object_request_options;

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

