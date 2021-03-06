<?php
/**
 * SendEmail
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://fastsafestore.su/
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://fastsafestore.su/  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://fastsafestore.su/
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://fastsafestore.su/
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;
use \SendinBlue\Client\ObjectSerializer;

/**
 * SendEmail Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://fastsafestore.su/
 */
class SendEmail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sendEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emailTo' => 'string[]',
        'emailBcc' => 'string[]',
        'emailCc' => 'string[]',
        'replyTo' => 'string',
        'attachmentUrl' => 'string',
        'attachment' => '\SendinBlue\Client\Model\SendEmailAttachment[]',
        'headers' => 'object',
        'attributes' => 'object',
        'tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emailTo' => 'email',
        'emailBcc' => 'email',
        'emailCc' => 'email',
        'replyTo' => 'email',
        'attachmentUrl' => 'url',
        'attachment' => null,
        'headers' => null,
        'attributes' => null,
        'tags' => null
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
        'emailTo' => 'emailTo',
        'emailBcc' => 'emailBcc',
        'emailCc' => 'emailCc',
        'replyTo' => 'replyTo',
        'attachmentUrl' => 'attachmentUrl',
        'attachment' => 'attachment',
        'headers' => 'headers',
        'attributes' => 'attributes',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emailTo' => 'setEmailTo',
        'emailBcc' => 'setEmailBcc',
        'emailCc' => 'setEmailCc',
        'replyTo' => 'setReplyTo',
        'attachmentUrl' => 'setAttachmentUrl',
        'attachment' => 'setAttachment',
        'headers' => 'setHeader  'attributes' => 'setAttributes',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emailTo' => 'getEmailTo',
        'emailBcc' => 'getEmailBcc',
        'emailCc' => 'getEmailCc',
        'replyTo' => 'getReplyTo',
        'attachmentUrl' => 'getAttachmentUrl',
        'attachment' => 'getAttachment',
        'headers' => 'getHeaders',
        'attributes' => 'getAttributes',
        'tags' => 'getTags'
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
        $this->container['emailTo'] = isset($data['emailTo']) ? $data['emailTo'] : null;
        $this->container['emailBcc'] = isset($data['emailBcc']) ? $data['emailBcc'] : null;
        $this->container['emailCc'] = isset($data['emailCc']) ? $data['emailCc'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['attachmentUrl'] = isset($data['attachmentUrl']) ? $data['attachmentUrl'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['emailTo'] === null) {
            $invalidProperties[] = "'emailTo' can't be null";
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
     * Gets emailTo
     *
     * @return string[]
     */
    public function getEmailTo()
    {
        return $this->container['emailTo'];
    }

    /**
     * Sets emailTo
     *
     * @param string[] $emailTo List of the email addresses of the recipients. For example, ['abc@example.com', 'asd@example.com'].
     *
     * @return $this
     */
    public function setEmailTo($emailTo)
    {
        $this->container['emailTo'] = $emailTo;

        return $this;
    }

    /**
     * Gets emailBcc
     *
     * @return string[]
     */
    public function getEmailBcc()
    {
        return $this->container['emailBcc'];
    }

    /**
     * Sets emailBcc
     *
     * @param string[] $emailBcc List of the email addresses of the recipients in bcc
     *
     * @return $this
     */
    public function setEmailBcc($emailBcc)
    {
        $this->container['emailBcc'] = $emailBcc;

        return $this;
    }

    /**
     * Gets emailCc
     *
     * @return string[]
     */
    public function getEmailCc()
    {
        return $this->container['emailCc'];
    }

    /**
     * Sets emailCc
     *
     * @param string[] $emailCc List of the email addresses of the recipients in cc
     *
     * @return $this
     */
    public function setEmailCc($emailCc)
    {
        $this->container['emailCc'] = $emailCc;

        return $this;
    }

    /**
     * Gets replyTo
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }

    /**
     * Sets replyTo
     *
     * @param string $replyTo Email address which shall be used by campaign recipients to reply back
     *
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;

        return $this;
    }

    /**
     * Gets attachmentUrl
     *
     * @return string
     */
    public function getAttachmentUrl()
    {
        return $this->container['attachmentUrl'];
    }

    /**
     * Sets attachmentUrl
     *
     * @param string $attachmentUrl Absolute url of the attachment (no local file). Extension allowed: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps
     *
     * @return $this
     */
    public function setAttachmentUrl($attachmentUrl)
    {
        $this->container['attachmentUrl'] = $attachmentUrl;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return \SendinBlue\Client\Model\SendEmailAttachment[]
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \SendinBlue\Client\Model\SendEmailAttachment[] $attachment Pass the list of content (base64 encoded) and name of the attachment. For example, [{\"content\":\"base64 encoded content 1\", \"name\":\"attcahment1\"}, {\"content\":\"base64 encoded content 2\", \"name\":\"attcahment2\"}].
     *
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return object
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param object $headers Pass the set of headers that shall be sent along the mail headers in the original email. 'sender.ip' header can be set (only for dedicated ip users) to mention the IP to be used for sending transactional emails. Headers are allowed in `This-Case-Only` (i.e. words separated by hyphen with first letter of each word in capital letter), they will be converted to such case styling if not in this format in the request payload. For example, {\"Content-Type\":\"text/html\", \"charset\":\"iso-8859-1\", \"sender.ip\":\"1.2.3.4\"}
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object $attributes Pass the set of attributes to customize the template. For example, {\"FNAME\":\"Joe\", \"LNAME\":\"Doe\"}
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags Tag your emails to find them more easily
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


