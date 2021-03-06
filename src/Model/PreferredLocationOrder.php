<?php
/**
 * PreferredLocationOrder
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
 * PreferredLocationOrder Class Doc Comment
 *
 * @category Class
 * @description Orders for selecting a preferred drop location at the recipients home address (e.g. &#39;garage&#39;)
 * @package  Dhl\ParcelManagement
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PreferredLocationOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PreferredLocationOrder';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'description' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'description' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 80)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 80.";
        }

        if (!preg_match(
            "/[a-z,A-Z,0-9,Ä,Ü,Ö,ä,ü,ö,ß,\\s,\\,,\\.,\\(,\\),\\!,\\-,\/]*$/",
            $this->container['description']
        )) {
            $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[a-z,A-Z,0-9,Ä,Ü,Ö,ä,ü,ö,ß,\\s,\\,,\\.,\\(,\\),\\!,\\-,\/]*$/.";
        }

        return $invalidProperties;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The location where the shipment is supposed to be dropped (e.g., `garage`), if the
     *     original recipient is absent.   - The recipient must be aware that the value of the `description` will be
     *     tranferred as-is to the  deliverer's scanner. Thus, `description` must contain a value that is  (a) existent
     *     and accessible at the recipients home address and  (b) comprehensible for the deliverer. For now, orders
     *     will just be applicable for shipments with recipients addresses within Austria and Germany. Therefore, the
     *     `description` SHOULD be at least written in German. - **Common values for `description`**. We cannot forsee
     *     all possible drop locations that might be found at recipients addresses. Therefore, the `type` of
     *     `description` is not some [enum](http://json-schema.org/latest/json-schema-validation.html#rfc.section.5.20)
     *     in this specification but a `string`. However, there are common drop locations, whose are best expressed by
     *     the following values for `description`.    - `Garage`      - `Wintergarten`      - `Gartenhaus/Schuppen`
     *      - `Balkon`      - `Terrasse`    - **Prohibited values for `description`**. There are blacklisted values for descriptions that will be rejected since they pose a misconception of the recipient service \"preferred location\". All descriptions that *include* the following strings will be rejected:    - `Paketbox`      - `Packstation`      - `Postfach`      - `Postfiliale`      - `Filiale`      - `Postfiliale Direkt`      - `Filiale Direkt`      - `Paketkasten`      - `DHL`      - `P-A-C-K-S-T-A-T-I-O-N`      - `Paketstation`      - `Pack Station`      - `P.A.C.K.S.T.A.T.I.O.N.`      - `Pakcstation`      - `Paackstation`      - `Pakstation`      - `Backstation`      - `Bakstation`      - `P A C K S T A T I O N`      - `Wunschfiliale`      - `Deutsche Post`
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 80)) {
            throw new \InvalidArgumentException(
                'invalid length for $description when calling PreferredLocationOrder., must be smaller than or equal to 80.'
            );
        }
        if ((!preg_match("/[a-z,A-Z,0-9,Ä,Ü,Ö,ä,ü,ö,ß,\\s,\\,,\\.,\\(,\\),\\!,\\-,\/]*$/", $description))) {
            throw new \InvalidArgumentException(
                "invalid value for $description when calling PreferredLocationOrder., must conform to the pattern /[a-z,A-Z,0-9,Ä,Ü,Ö,ä,ü,ö,ß,\\s,\\,,\\.,\\(,\\),\\!,\\-,\/]*$/."
            );
        }

        $this->container['description'] = $description;

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
