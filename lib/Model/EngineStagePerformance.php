<?php
/**
 * EngineStagePerformance
 *
 * PHP version 5
 *
 * @category Class
 * @package  RemapDB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RemapDB REST API Documentation
 *
 * Vehicle Tuning Database API - For Tuning services and Tuners.  Access comprehensive vehicle details, including types, manufacturers, models, engines, ECU and TCU info, tuning tools, dyno charts, and available tuning or remap stages with their performance gains.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.64
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RemapDB\Model;

use \ArrayAccess;
use \RemapDB\ObjectSerializer;

/**
 * EngineStagePerformance Class Doc Comment
 *
 * @category Class
 * @description Tuning/Remap stage performance object
 * @package  RemapDB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EngineStagePerformance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'engine_stage_performance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'power' => 'int',
        'torque' => 'int',
        'top_speed' => 'int',
        'zero_to_hundred' => 'float',
        'dyno_values' => '\RemapDB\Model\EnginePerformanceDyno'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'power' => null,
        'torque' => null,
        'top_speed' => null,
        'zero_to_hundred' => null,
        'dyno_values' => null
    ];

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
     * @var string[]
     */
    protected static $attributeMap = [
        'power' => 'power',
        'torque' => 'torque',
        'top_speed' => 'top_speed',
        'zero_to_hundred' => 'zero_to_hundred',
        'dyno_values' => 'dyno_values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'power' => 'setPower',
        'torque' => 'setTorque',
        'top_speed' => 'setTopSpeed',
        'zero_to_hundred' => 'setZeroToHundred',
        'dyno_values' => 'setDynoValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'power' => 'getPower',
        'torque' => 'getTorque',
        'top_speed' => 'getTopSpeed',
        'zero_to_hundred' => 'getZeroToHundred',
        'dyno_values' => 'getDynoValues'
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
        return self::$swaggerModelName;
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
        $this->container['power'] = isset($data['power']) ? $data['power'] : null;
        $this->container['torque'] = isset($data['torque']) ? $data['torque'] : null;
        $this->container['top_speed'] = isset($data['top_speed']) ? $data['top_speed'] : null;
        $this->container['zero_to_hundred'] = isset($data['zero_to_hundred']) ? $data['zero_to_hundred'] : null;
        $this->container['dyno_values'] = isset($data['dyno_values']) ? $data['dyno_values'] : null;
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
     * Gets power
     *
     * @return int
     */
    public function getPower()
    {
        return $this->container['power'];
    }

    /**
     * Sets power
     *
     * @param int $power Horse power (afrer remap) (metric).
     *
     * @return $this
     */
    public function setPower($power)
    {
        $this->container['power'] = $power;

        return $this;
    }

    /**
     * Gets torque
     *
     * @return int
     */
    public function getTorque()
    {
        return $this->container['torque'];
    }

    /**
     * Sets torque
     *
     * @param int $torque Torque (after remap) in Nm.
     *
     * @return $this
     */
    public function setTorque($torque)
    {
        $this->container['torque'] = $torque;

        return $this;
    }

    /**
     * Gets top_speed
     *
     * @return int
     */
    public function getTopSpeed()
    {
        return $this->container['top_speed'];
    }

    /**
     * Sets top_speed
     *
     * @param int $top_speed Maximum speed (kmh).
     *
     * @return $this
     */
    public function setTopSpeed($top_speed)
    {
        $this->container['top_speed'] = $top_speed;

        return $this;
    }

    /**
     * Gets zero_to_hundred
     *
     * @return float
     */
    public function getZeroToHundred()
    {
        return $this->container['zero_to_hundred'];
    }

    /**
     * Sets zero_to_hundred
     *
     * @param float $zero_to_hundred Time to get from 0kmh to 100kmh (in seconds).
     *
     * @return $this
     */
    public function setZeroToHundred($zero_to_hundred)
    {
        $this->container['zero_to_hundred'] = $zero_to_hundred;

        return $this;
    }

    /**
     * Gets dyno_values
     *
     * @return \RemapDB\Model\EnginePerformanceDyno
     */
    public function getDynoValues()
    {
        return $this->container['dyno_values'];
    }

    /**
     * Sets dyno_values
     *
     * @param \RemapDB\Model\EnginePerformanceDyno $dyno_values dyno_values
     *
     * @return $this
     */
    public function setDynoValues($dyno_values)
    {
        $this->container['dyno_values'] = $dyno_values;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
