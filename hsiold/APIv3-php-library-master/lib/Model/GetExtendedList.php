<?php
/**
 * GetExtendedList
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://meghannleisha.ru/
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://meghannleisha.ru/  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://meghannleisha.ru/
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://meghannleisha.ru/
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;
use \SendinBlue\Client\ObjectSerializer;

/**
 * GetExtendedList Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://meghannleisha.ru/
 */
class GetExtendedList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getExtendedList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'totalBlacklisted' => 'int',
        'totalSubscribers' => 'int',
        'folderId' => 'int',
        'createdAt' => '\DateTime',
        'campaignStats' => '\SendinBlue\Client\Model\GetExtendedListCampaignStats[]',
        'dynamicList' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'totalBlacklisted' => 'int64',
        'totalSubscribers' => 'int64',
        'folderId' => 'int64',
        'createdAt' => 'date-time',
        'campaignStats' => null,
        'dynamicList' => null
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
        'id' => 'id',
        'name' => 'name',
        'totalBlacklisted' => 'totalBlacklisted',
        'totalSubscribers' => 'totalSubscribers',
        'folderId' => 'folderId',
        'createdAt' => 'createdAt',
        'campaignStats' => 'campaignStats',
        'dynamicList' => 'dynamicList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'totalBlacklisted' => 'setTotalBlacklisted',
        'totalSubscribers' => 'setTotalSubscribers',
        'folderId' => 'setFolderId',
        'createdAt' => 'setCreatedAt',
        'campaignStats' => 'setCampaignStats',
        'dynamicList' => 'setDynamicList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'totalBlacklisted' => 'getTotalBlacklisted',
        'totalSubscribers' => 'getTotalSubscribers',
        'folderId' => 'getFolderId',
        'createdAt' => 'getCreatedAt',
        'campaignStats' => 'getCampaignStats',
        'dynamicList' => 'getDynamicList'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['totalBlacklisted'] = isset($data['totalBlacklisted']) ? $data['totalBlacklisted'] : null;
        $this->container['totalSubscribers'] = isset($data['totalSubscribers']) ? $data['totalSubscribers'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['campaignStats'] = isset($data['campaignStats']) ? $data['campaignStats'] : null;
        $this->container['dynamicList'] = isset($data['dynamicList']) ? $data['dynamicList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['totalBlacklisted'] === null) {
            $invalidProperties[] = "'totalBlacklisted' can't be null";
        }
        if ($this->container['totalSubscribers'] === null) {
            $invalidProperties[] = "'totalSubscribers' can't be null";
        }
        if ($this->container['folderId'] === null) {
            $invalidProperties[] = "'folderId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the list
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the list
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets totalBlacklisted
     *
     * @return int
     */
    public function getTotalBlacklisted()
    {
        return $this->container['totalBlacklisted'];
    }

    /**
     * Sets totalBlacklisted
     *
     * @param int $totalBlacklisted Number of blacklisted contacts in the list
     *
     * @return $this
     */
    public function setTotalBlacklisted($totalBlacklisted)
    {
        $this->container['totalBlacklisted'] = $totalBlacklisted;

        return $this;
    }

    /**
     * Gets totalSubscribers
     *
     * @return int
     */
    public function getTotalSubscribers()
    {
        return $this->container['totalSubscribers'];
    }

    /**
     * Sets totalSubscribers
     *
     * @param int $totalSubscribers Number of contacts in the list
     *
     * @return $this
     */
    public function setTotalSubscribers($totalSubscribers)
    {
        $this->container['totalSubscribers'] = $totalSubscribers;

        return $this;
    }

    /**
     * Gets folderId
     *
     * @return int
     */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
     * Sets folderId
     *
     * @param int $folderId ID of the folder
     *
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt Creation UTC date-time of the list (YYYY-MM-DDTHH:mm:ss.SSSZ)
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets campaignStats
     *
     * @return \SendinBlue\Client\Model\GetExtendedListCampaignStats[]
     */
    public function getCampaignStats()
    {
        return $this->container['campaignStats'];
    }

    /**
     * Sets campaignStats
     *
     * @param \SendinBlue\Client\Model\GetExtendedListCampaignStats[] $campaignStats campaignStats
     *
     * @return $this
     */
    public function setCampaignStats($campaignStats)
    {
        $this->container['campaignStats'] = $campaignStats;

        return $this;
    }

    /**
     * Gets dynamicList
     *
     * @return bool
     */
    public function getDynamicList()
    {
        return $this->container['dynamicList'];
    }

    /**
     * Sets dynamicList
     *
     * @param bool $dynamicList Status telling if the list is dynamic or not (true=dynamic, false=not dynamic)
     *
     * @return $this
     */
    public function setDynamicList($dynamicList)
    {
        $this->container['dynamicList'] = $dynamicList;

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
     * @param mixed   $value  Value to be set
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


s));
    }
}


