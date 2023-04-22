<?php
/**
 * Uinforesponse
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
 * Uinforesponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Uinforesponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'uinforesponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'errno' => 'int',
        'errmsg' => 'string',
        'uk' => 'int',
        'request_id' => 'string',
        'avatar_url' => 'string',
        'baidu_name' => 'string',
        'netdisk_name' => 'string',
        'vip_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'errno' => null,
        'errmsg' => null,
        'uk' => null,
        'request_id' => null,
        'avatar_url' => null,
        'baidu_name' => null,
        'netdisk_name' => null,
        'vip_type' => null
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
        'errno' => 'errno',
        'errmsg' => 'errmsg',
        'uk' => 'uk',
        'request_id' => 'request_id',
        'avatar_url' => 'avatar_url',
        'baidu_name' => 'baidu_name',
        'netdisk_name' => 'netdisk_name',
        'vip_type' => 'vip_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'errno' => 'setErrno',
        'errmsg' => 'setErrmsg',
        'uk' => 'setUk',
        'request_id' => 'setRequestId',
        'avatar_url' => 'setAvatarUrl',
        'baidu_name' => 'setBaiduName',
        'netdisk_name' => 'setNetdiskName',
        'vip_type' => 'setVipType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'errno' => 'getErrno',
        'errmsg' => 'getErrmsg',
        'uk' => 'getUk',
        'request_id' => 'getRequestId',
        'avatar_url' => 'getAvatarUrl',
        'baidu_name' => 'getBaiduName',
        'netdisk_name' => 'getNetdiskName',
        'vip_type' => 'getVipType'
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
        $this->container['errno'] = isset($data['errno']) ? $data['errno'] : null;
        $this->container['errmsg'] = isset($data['errmsg']) ? $data['errmsg'] : null;
        $this->container['uk'] = isset($data['uk']) ? $data['uk'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['baidu_name'] = isset($data['baidu_name']) ? $data['baidu_name'] : null;
        $this->container['netdisk_name'] = isset($data['netdisk_name']) ? $data['netdisk_name'] : null;
        $this->container['vip_type'] = isset($data['vip_type']) ? $data['vip_type'] : null;
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
     * Gets errmsg
     *
     * @return string|null
     */
    public function getErrmsg()
    {
        return $this->container['errmsg'];
    }

    /**
     * Sets errmsg
     *
     * @param string|null $errmsg errmsg
     *
     * @return self
     */
    public function setErrmsg($errmsg)
    {
        $this->container['errmsg'] = $errmsg;

        return $this;
    }

    /**
     * Gets uk
     *
     * @return int|null
     */
    public function getUk()
    {
        return $this->container['uk'];
    }

    /**
     * Sets uk
     *
     * @param int|null $uk uk
     *
     * @return self
     */
    public function setUk($uk)
    {
        $this->container['uk'] = $uk;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id request_id
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string|null
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string|null $avatar_url avatar_url
     *
     * @return self
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets baidu_name
     *
     * @return string|null
     */
    public function getBaiduName()
    {
        return $this->container['baidu_name'];
    }

    /**
     * Sets baidu_name
     *
     * @param string|null $baidu_name baidu_name
     *
     * @return self
     */
    public function setBaiduName($baidu_name)
    {
        $this->container['baidu_name'] = $baidu_name;

        return $this;
    }

    /**
     * Gets netdisk_name
     *
     * @return string|null
     */
    public function getNetdiskName()
    {
        return $this->container['netdisk_name'];
    }

    /**
     * Sets netdisk_name
     *
     * @param string|null $netdisk_name netdisk_name
     *
     * @return self
     */
    public function setNetdiskName($netdisk_name)
    {
        $this->container['netdisk_name'] = $netdisk_name;

        return $this;
    }

    /**
     * Gets vip_type
     *
     * @return int|null
     */
    public function getVipType()
    {
        return $this->container['vip_type'];
    }

    /**
     * Sets vip_type
     *
     * @param int|null $vip_type vip_type
     *
     * @return self
     */
    public function setVipType($vip_type)
    {
        $this->container['vip_type'] = $vip_type;

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


