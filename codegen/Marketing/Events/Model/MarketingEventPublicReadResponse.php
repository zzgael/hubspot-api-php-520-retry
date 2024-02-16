<?php
/**
 * MarketingEventPublicReadResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing Events
 *
 * These APIs allow you to interact with HubSpot's Marketing Events Extension. It allows you to: * Create, Read or update Marketing Event information in HubSpot * Specify whether a HubSpot contact has registered, attended or cancelled a registration to a Marketing Event. * Specify a URL that can be called to get the details of a Marketing Event.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Marketing\Events\Model;

use \ArrayAccess;
use \HubSpot\Client\Marketing\Events\ObjectSerializer;

/**
 * MarketingEventPublicReadResponse Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Marketing\Events
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MarketingEventPublicReadResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MarketingEventPublicReadResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'registrants' => 'int',
        'event_organizer' => 'string',
        'event_url' => 'string',
        'attendees' => 'int',
        'event_type' => 'string',
        'end_date_time' => '\DateTime',
        'no_shows' => 'int',
        'cancellations' => 'int',
        'created_at' => '\DateTime',
        'start_date_time' => '\DateTime',
        'custom_properties' => '\HubSpot\Client\Marketing\Events\Model\PropertyValue[]',
        'event_cancelled' => 'bool',
        'external_event_id' => 'string',
        'event_description' => 'string',
        'event_name' => 'string',
        'id' => 'string',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'registrants' => 'int32',
        'event_organizer' => null,
        'event_url' => null,
        'attendees' => 'int32',
        'event_type' => null,
        'end_date_time' => 'date-time',
        'no_shows' => 'int32',
        'cancellations' => 'int32',
        'created_at' => 'date-time',
        'start_date_time' => 'date-time',
        'custom_properties' => null,
        'event_cancelled' => null,
        'external_event_id' => null,
        'event_description' => null,
        'event_name' => null,
        'id' => null,
        'updated_at' => 'date-time'
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'registrants' => 'registrants',
        'event_organizer' => 'eventOrganizer',
        'event_url' => 'eventUrl',
        'attendees' => 'attendees',
        'event_type' => 'eventType',
        'end_date_time' => 'endDateTime',
        'no_shows' => 'noShows',
        'cancellations' => 'cancellations',
        'created_at' => 'createdAt',
        'start_date_time' => 'startDateTime',
        'custom_properties' => 'customProperties',
        'event_cancelled' => 'eventCancelled',
        'external_event_id' => 'externalEventId',
        'event_description' => 'eventDescription',
        'event_name' => 'eventName',
        'id' => 'id',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'registrants' => 'setRegistrants',
        'event_organizer' => 'setEventOrganizer',
        'event_url' => 'setEventUrl',
        'attendees' => 'setAttendees',
        'event_type' => 'setEventType',
        'end_date_time' => 'setEndDateTime',
        'no_shows' => 'setNoShows',
        'cancellations' => 'setCancellations',
        'created_at' => 'setCreatedAt',
        'start_date_time' => 'setStartDateTime',
        'custom_properties' => 'setCustomProperties',
        'event_cancelled' => 'setEventCancelled',
        'external_event_id' => 'setExternalEventId',
        'event_description' => 'setEventDescription',
        'event_name' => 'setEventName',
        'id' => 'setId',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'registrants' => 'getRegistrants',
        'event_organizer' => 'getEventOrganizer',
        'event_url' => 'getEventUrl',
        'attendees' => 'getAttendees',
        'event_type' => 'getEventType',
        'end_date_time' => 'getEndDateTime',
        'no_shows' => 'getNoShows',
        'cancellations' => 'getCancellations',
        'created_at' => 'getCreatedAt',
        'start_date_time' => 'getStartDateTime',
        'custom_properties' => 'getCustomProperties',
        'event_cancelled' => 'getEventCancelled',
        'external_event_id' => 'getExternalEventId',
        'event_description' => 'getEventDescription',
        'event_name' => 'getEventName',
        'id' => 'getId',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['registrants'] = $data['registrants'] ?? null;
        $this->container['event_organizer'] = $data['event_organizer'] ?? null;
        $this->container['event_url'] = $data['event_url'] ?? null;
        $this->container['attendees'] = $data['attendees'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['end_date_time'] = $data['end_date_time'] ?? null;
        $this->container['no_shows'] = $data['no_shows'] ?? null;
        $this->container['cancellations'] = $data['cancellations'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['start_date_time'] = $data['start_date_time'] ?? null;
        $this->container['custom_properties'] = $data['custom_properties'] ?? null;
        $this->container['event_cancelled'] = $data['event_cancelled'] ?? null;
        $this->container['external_event_id'] = $data['external_event_id'] ?? null;
        $this->container['event_description'] = $data['event_description'] ?? null;
        $this->container['event_name'] = $data['event_name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['registrants'] === null) {
            $invalidProperties[] = "'registrants' can't be null";
        }
        if ($this->container['event_organizer'] === null) {
            $invalidProperties[] = "'event_organizer' can't be null";
        }
        if ($this->container['attendees'] === null) {
            $invalidProperties[] = "'attendees' can't be null";
        }
        if ($this->container['no_shows'] === null) {
            $invalidProperties[] = "'no_shows' can't be null";
        }
        if ($this->container['cancellations'] === null) {
            $invalidProperties[] = "'cancellations' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['external_event_id'] === null) {
            $invalidProperties[] = "'external_event_id' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets registrants
     *
     * @return int
     */
    public function getRegistrants()
    {
        return $this->container['registrants'];
    }

    /**
     * Sets registrants
     *
     * @param int $registrants The number of HubSpot contacts that registered for this marketing event.
     *
     * @return self
     */
    public function setRegistrants($registrants)
    {
        $this->container['registrants'] = $registrants;

        return $this;
    }

    /**
     * Gets event_organizer
     *
     * @return string
     */
    public function getEventOrganizer()
    {
        return $this->container['event_organizer'];
    }

    /**
     * Sets event_organizer
     *
     * @param string $event_organizer The name of the organizer of the marketing event.
     *
     * @return self
     */
    public function setEventOrganizer($event_organizer)
    {
        $this->container['event_organizer'] = $event_organizer;

        return $this;
    }

    /**
     * Gets event_url
     *
     * @return string|null
     */
    public function getEventUrl()
    {
        return $this->container['event_url'];
    }

    /**
     * Sets event_url
     *
     * @param string|null $event_url A URL in the external event application where the marketing event can be managed.
     *
     * @return self
     */
    public function setEventUrl($event_url)
    {
        $this->container['event_url'] = $event_url;

        return $this;
    }

    /**
     * Gets attendees
     *
     * @return int
     */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
     * Sets attendees
     *
     * @param int $attendees The number of HubSpot contacts that attended this marketing event.
     *
     * @return self
     */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type The type of the marketing event.
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime|null
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime|null $end_date_time The end date and time of the marketing event.
     *
     * @return self
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets no_shows
     *
     * @return int
     */
    public function getNoShows()
    {
        return $this->container['no_shows'];
    }

    /**
     * Sets no_shows
     *
     * @param int $no_shows The number of HubSpot contacts that registered for this marketing event, but did not attend. This field only had a value when the event is over.
     *
     * @return self
     */
    public function setNoShows($no_shows)
    {
        $this->container['no_shows'] = $no_shows;

        return $this;
    }

    /**
     * Gets cancellations
     *
     * @return int
     */
    public function getCancellations()
    {
        return $this->container['cancellations'];
    }

    /**
     * Sets cancellations
     *
     * @param int $cancellations The number of HubSpot contacts that registered for this marketing event, but later cancelled their registration.
     *
     * @return self
     */
    public function setCancellations($cancellations)
    {
        $this->container['cancellations'] = $cancellations;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at 
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime|null
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime|null $start_date_time The start date and time of the marketing event.
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets custom_properties
     *
     * @return \HubSpot\Client\Marketing\Events\Model\PropertyValue[]|null
     */
    public function getCustomProperties()
    {
        return $this->container['custom_properties'];
    }

    /**
     * Sets custom_properties
     *
     * @param \HubSpot\Client\Marketing\Events\Model\PropertyValue[]|null $custom_properties A list of PropertyValues. These can be whatever kind of property names and values you want. However, they must already exist on the HubSpot account's definition of the MarketingEvent Object. If they don't they will be filtered out and not set. In order to do this you'll need to create a new PropertyGroup on the HubSpot account's MarketingEvent object for your specific app and create the Custom Property you want to track on that HubSpot account. Do not create any new default properties on the MarketingEvent object as that will apply to all HubSpot accounts.
     *
     * @return self
     */
    public function setCustomProperties($custom_properties)
    {
        $this->container['custom_properties'] = $custom_properties;

        return $this;
    }

    /**
     * Gets event_cancelled
     *
     * @return bool|null
     */
    public function getEventCancelled()
    {
        return $this->container['event_cancelled'];
    }

    /**
     * Sets event_cancelled
     *
     * @param bool|null $event_cancelled Indicates if the marketing event has been cancelled.
     *
     * @return self
     */
    public function setEventCancelled($event_cancelled)
    {
        $this->container['event_cancelled'] = $event_cancelled;

        return $this;
    }

    /**
     * Gets external_event_id
     *
     * @return string
     */
    public function getExternalEventId()
    {
        return $this->container['external_event_id'];
    }

    /**
     * Sets external_event_id
     *
     * @param string $external_event_id The id of the marketing event in the external event application.
     *
     * @return self
     */
    public function setExternalEventId($external_event_id)
    {
        $this->container['external_event_id'] = $external_event_id;

        return $this;
    }

    /**
     * Gets event_description
     *
     * @return string|null
     */
    public function getEventDescription()
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description
     *
     * @param string|null $event_description The description of the marketing event.
     *
     * @return self
     */
    public function setEventDescription($event_description)
    {
        $this->container['event_description'] = $event_description;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name The name of the marketing event.
     *
     * @return self
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

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
     * @param string $id 
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at 
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


