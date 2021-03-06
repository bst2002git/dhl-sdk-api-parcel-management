<?php
/**
 * OrderMap
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
 * OrderMap Class Doc Comment
 *
 * @category Class
 * @description An map from Order types to respective instances. Each type of Order is contained at most once.
 * @package  Dhl\ParcelManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderMap implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderMap';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'preferredDay' => '\Dhl\ParcelManagement\Model\ActivePreferredDayOrder',
        'preferredNeighbour' => '\Dhl\ParcelManagement\Model\ActivePreferredNeighbourOrder',
        'preferredLocation' => '\Dhl\ParcelManagement\Model\ActivePreferredLocationOrder',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'preferredDay' => null,
        'preferredNeighbour' => null,
        'preferredLocation' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'preferredDay' => 'preferredDay',
        'preferredNeighbour' => 'preferredNeighbour',
        'preferredLocation' => 'preferredLocation',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preferredDay' => 'setPreferredDay',
        'preferredNeighbour' => 'setPreferredNeighbour',
        'preferredLocation' => 'setPreferredLocation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preferredDay' => 'getPreferredDay',
        'preferredNeighbour' => 'getPreferredNeighbour',
        'preferredLocation' => 'getPreferredLocation',
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
        $this->container['preferredDay'] = isset($data['preferredDay']) ? $data['preferredDay'] : null;
        $this->container['preferredNeighbour'] = isset($data['preferredNeighbour']) ? $data['preferredNeighbour'] : null;
        $this->container['preferredLocation'] = isset($data['preferredLocation']) ? $data['preferredLocation'] : null;
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
     * Gets preferredDay
     *
     * @return \Dhl\ParcelManagement\Model\ActivePreferredDayOrder
     */
    public function getPreferredDay()
    {
        return $this->container['preferredDay'];
    }

    /**
     * Sets preferredDay
     *
     * @param \Dhl\ParcelManagement\Model\ActivePreferredDayOrder $preferredDay preferredDay
     *
     * @return $this
     */
    public function setPreferredDay($preferredDay)
    {
        $this->container['preferredDay'] = $preferredDay;

        return $this;
    }

    /**
     * Gets preferredNeighbour
     *
     * @return \Dhl\ParcelManagement\Model\ActivePreferredNeighbourOrder
     */
    public function getPreferredNeighbour()
    {
        return $this->container['preferredNeighbour'];
    }

    /**
     * Sets preferredNeighbour
     *
     * @param \Dhl\ParcelManagement\Model\ActivePreferredNeighbourOrder $preferredNeighbour preferredNeighbour
     *
     * @return $this
     */
    public function setPreferredNeighbour($preferredNeighbour)
    {
        $this->container['preferredNeighbour'] = $preferredNeighbour;

        return $this;
    }

    /**
     * Gets preferredLocation
     *
     * @return \Dhl\ParcelManagement\Model\ActivePreferredLocationOrder
     */
    public function getPreferredLocation()
    {
        return $this->container['preferredLocation'];
    }

    /**
     * Sets preferredLocation
     *
     * @param \Dhl\ParcelManagement\Model\ActivePreferredLocationOrder $preferredLocation preferredLocation
     *
     * @return $this
     */
    public function setPreferredLocation($preferredLocation)
    {
        $this->container['preferredLocation'] = $preferredLocation;

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
