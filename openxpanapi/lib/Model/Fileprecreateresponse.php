<?php
/**
 * Fileprecreateresponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * xpan
 *
 * xpanapi
 *
 * The version of the OpenAPI document: 0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Fileprecreateresponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Fileprecreateresponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fileprecreateresponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uploadid' => 'string',
        'return_type' => 'int',
        'block_list' => 'string[]',
        'errno' => 'int',
        'request_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uploadid' => null,
        'return_type' => null,
        'block_list' => null,
        'errno' => null,
        'request_id' => 'int64'
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
        'uploadid' => 'uploadid',
        'return_type' => 'return_type',
        'block_list' => 'block_list',
        'errno' => 'errno',
        'request_id' => 'request_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uploadid' => 'setUploadid',
        'return_type' => 'setReturnType',
        'block_list' => 'setBlockList',
        'errno' => 'setErrno',
        'request_id' => 'setRequestId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uploadid' => 'getUploadid',
        'return_type' => 'getReturnType',
        'block_list' => 'getBlockList',
        'errno' => 'getErrno',
        'request_id' => 'getRequestId'
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
        $this->container['uploadid'] = isset($data['uploadid']) ? $data['uploadid'] : null;
        $this->container['return_type'] = isset($data['return_type']) ? $data['return_type'] : null;
        $this->container['block_list'] = isset($data['block_list']) ? $data['block_list'] : null;
        $this->container['errno'] = isset($data['errno']) ? $data['errno'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
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
     * Gets uploadid
     *
     * @return string|null
     */
    public function getUploadid()
    {
        return $this->container['uploadid'];
    }

    /**
     * Sets uploadid
     *
     * @param string|null $uploadid uploadid
     *
     * @return self
     */
    public function setUploadid($uploadid)
    {
        $this->container['uploadid'] = $uploadid;

        return $this;
    }

    /**
     * Gets return_type
     *
     * @return int|null
     */
    public function getReturnType()
    {
        return $this->container['return_type'];
    }

    /**
     * Sets return_type
     *
     * @param int|null $return_type return_type
     *
     * @return self
     */
    public function setReturnType($return_type)
    {
        $this->container['return_type'] = $return_type;

        return $this;
    }

    /**
     * Gets block_list
     *
     * @return string[]|null
     */
    public function getBlockList()
    {
        return $this->container['block_list'];
    }

    /**
     * Sets block_list
     *
     * @param string[]|null $block_list block_list
     *
     * @return self
     */
    public function setBlockList($block_list)
    {
        $this->container['block_list'] = $block_list;

        return $this;
    }

    /**
     * Gets errno
     *
     * @return int|null
     */
    public function getErrno()
    {
        return $this->container['errno'];
    }

    /**
     * Sets errno
     *
     * @param int|null $errno errno
     *
     * @return self
     */
    public function setErrno($errno)
    {
        $this->container['errno'] = $errno;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return int|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param int|null $request_id request_id
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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

