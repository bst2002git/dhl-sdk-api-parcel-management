<?php
/**
 * AvailableServicesMap
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dhl\ParcelManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DHL Parcel Management API
 *
 * OpenAPI spec version: 1.3.1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dhl\ParcelManagement\Model;

use ArrayAccess;
use Dhl\ParcelManagement\ObjectSerializer;

/**
 * AvailableServicesMap Class Doc Comment
 *
 * @category Class
 * @description An map from Service types to respective instances. Each type of available Service is contained at most
 *     once.
 * @package  Dhl\ParcelManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailableServicesMap implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AvailableServicesMap';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'preferredLocation' => '\Dhl\ParcelManagement\Model\ServiceAvailable',
        'preferredNeighbour' => '\Dhl\ParcelManagement\Model\ServiceAvailable',
        'preferredDay' => '\Dhl\ParcelManagement\Model\PreferredDayAvailable',
        'preferredTime' => '\Dhl\ParcelManagement\Model\PreferredTimeAvailable',
        'inCarDelivery' => '\Dhl\ParcelManagement\Model\ServiceAvailable',
        'sameDayDelivery' => '\Dhl\ParcelManagement\Model\SameDayDeliveryAvailable',
        'noNeighbourDelivery' => '\Dhl\ParcelManagement\Model\ServiceAvailable',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'preferredLocation' => null,
        'preferredNeighbour' => null,
        'preferredDay' => null,
        'preferredTime' => null,
        'inCarDelivery' => null,
        'sameDayDelivery' => null,
        'noNeighbourDelivery' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'preferredLocation' => 'preferredLocation',
        'preferredNeighbour' => 'preferredNeighbour',
        'preferredDay' => 'preferredDay',
        'preferredTime' => 'preferredTime',
        'inCarDelivery' => 'inCarDelivery',
        'sameDayDelivery' => 'sameDayDelivery',
        'noNeighbourDelivery' => 'noNeighbourDelivery',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preferredLocation' => 'setPreferredLocation',
        'preferredNeighbour' => 'setPreferredNeighbour',
        'preferredDay' => 'setPreferredDay',
        'preferredTime' => 'setPreferredTime',
        'inCarDelivery' => 'setInCarDelivery',
        'sameDayDelivery' => 'setSameDayDelivery',
        'noNeighbourDelivery' => 'setNoNeighbourDelivery',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preferredLocation' => 'getPreferredLocation',
        'preferredNeighbour' => 'getPreferredNeighbour',
        'preferredDay' => 'getPreferredDay',
        'preferredTime' => 'getPreferredTime',
        'inCarDelivery' => 'getInCarDelivery',
        'sameDayDelivery' => 'getSameDayDelivery',
        'noNeighbourDelivery' => 'getNoNeighbourDelivery',
    ];

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
        $this->container['preferredLocation'] = isset($data['preferredLocation']) ? $data['preferredLocation'] : null;
        $this->container['preferredNeighbour'] = isset($data['preferredNeighbour']) ? $data['preferredNeighbour'] : null;
        $this->container['preferredDay'] = isset($data['preferredDay']) ? $data['preferredDay'] : null;
        $this->container['preferredTime'] = isset($data['preferredTime']) ? $data['preferredTime'] : null;
        $this->container['inCarDelivery'] = isset($data['inCarDelivery']) ? $data['inCarDelivery'] : null;
        $this->container['sameDayDelivery'] = isset($data['sameDayDelivery']) ? $data['sameDayDelivery'] : null;
        $this->container['noNeighbourDelivery'] = isset($data['noNeighbourDelivery']) ? $data['noNeighbourDelivery'] : null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

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
        return self::$swaggerModelName;
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
     * Gets preferredLocation
     *
     * @return \Dhl\ParcelManagement\Model\ServiceAvailable
     */
    public function getPreferredLocation()
    {
        return $this->container['preferredLocation'];
    }

    /**
     * Sets preferredLocation
     *
     * @param \Dhl\ParcelManagement\Model\ServiceAvailable $preferredLocation preferredLocation
     *
     * @return $this
     */
    public function setPreferredLocation($preferredLocation)
    {
        $this->container['preferredLocation'] = $preferredLocation;

        return $this;
    }

    /**
     * Gets preferredNeighbour
     *
     * @return \Dhl\ParcelManagement\Model\ServiceAvailable
     */
    public function getPreferredNeighbour()
    {
        return $this->container['preferredNeighbour'];
    }

    /**
     * Sets preferredNeighbour
     *
     * @param \Dhl\ParcelManagement\Model\ServiceAvailable $preferredNeighbour preferredNeighbour
     *
     * @return $this
     */
    public function setPreferredNeighbour($preferredNeighbour)
    {
        $this->container['preferredNeighbour'] = $preferredNeighbour;

        return $this;
    }

    /**
     * Gets preferredDay
     *
     * @return \Dhl\ParcelManagement\Model\PreferredDayAvailable
     */
    public function getPreferredDay()
    {
        return $this->container['preferredDay'];
    }

    /**
     * Sets preferredDay
     *
     * @param \Dhl\ParcelManagement\Model\PreferredDayAvailable $preferredDay preferredDay
     *
     * @return $this
     */
    public function setPreferredDay($preferredDay)
    {
        $this->container['preferredDay'] = $preferredDay;

        return $this;
    }

    /**
     * Gets preferredTime
     *
     * @return \Dhl\ParcelManagement\Model\PreferredTimeAvailable
     */
    public function getPreferredTime()
    {
        return $this->container['preferredTime'];
    }

    /**
     * Sets preferredTime
     *
     * @param \Dhl\ParcelManagement\Model\PreferredTimeAvailable $preferredTime preferredTime
     *
     * @return $this
     */
    public function setPreferredTime($preferredTime)
    {
        $this->container['preferredTime'] = $preferredTime;

        return $this;
    }

    /**
     * Gets inCarDelivery
     *
     * @return \Dhl\ParcelManagement\Model\ServiceAvailable
     */
    public function getInCarDelivery()
    {
        return $this->container['inCarDelivery'];
    }

    /**
     * Sets inCarDelivery
     *
     * @param \Dhl\ParcelManagement\Model\ServiceAvailable $inCarDelivery inCarDelivery
     *
     * @return $this
     */
    public function setInCarDelivery($inCarDelivery)
    {
        $this->container['inCarDelivery'] = $inCarDelivery;

        return $this;
    }

    /**
     * Gets sameDayDelivery
     *
     * @return \Dhl\ParcelManagement\Model\SameDayDeliveryAvailable
     */
    public function getSameDayDelivery()
    {
        return $this->container['sameDayDelivery'];
    }

    /**
     * Sets sameDayDelivery
     *
     * @param \Dhl\ParcelManagement\Model\SameDayDeliveryAvailable $sameDayDelivery sameDayDelivery
     *
     * @return $this
     */
    public function setSameDayDelivery($sameDayDelivery)
    {
        $this->container['sameDayDelivery'] = $sameDayDelivery;

        return $this;
    }

    /**
     * Gets noNeighbourDelivery
     *
     * @return \Dhl\ParcelManagement\Model\ServiceAvailable
     */
    public function getNoNeighbourDelivery()
    {
        return $this->container['noNeighbourDelivery'];
    }

    /**
     * Sets noNeighbourDelivery
     *
     * @param \Dhl\ParcelManagement\Model\ServiceAvailable $noNeighbourDelivery noNeighbourDelivery
     *
     * @return $this
     */
    public function setNoNeighbourDelivery($noNeighbourDelivery)
    {
        $this->container['noNeighbourDelivery'] = $noNeighbourDelivery;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
