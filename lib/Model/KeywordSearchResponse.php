<?php
/**
 * KeywordSearchResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Axesso Api
 *
 * Use this api to fetch information to Amazon products and more.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@axesso.de
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * KeywordSearchResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KeywordSearchResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KeywordSearchResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response_status' => 'string',
        'response_message' => 'string',
        'sort_strategy' => 'string',
        'domain_code' => 'string',
        'keyword' => 'string',
        'number_of_products' => 'int',
        'found_products' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response_status' => null,
        'response_message' => null,
        'sort_strategy' => null,
        'domain_code' => null,
        'keyword' => null,
        'number_of_products' => 'int64',
        'found_products' => null
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
        'response_status' => 'responseStatus',
        'response_message' => 'responseMessage',
        'sort_strategy' => 'sortStrategy',
        'domain_code' => 'domainCode',
        'keyword' => 'keyword',
        'number_of_products' => 'numberOfProducts',
        'found_products' => 'foundProducts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_status' => 'setResponseStatus',
        'response_message' => 'setResponseMessage',
        'sort_strategy' => 'setSortStrategy',
        'domain_code' => 'setDomainCode',
        'keyword' => 'setKeyword',
        'number_of_products' => 'setNumberOfProducts',
        'found_products' => 'setFoundProducts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_status' => 'getResponseStatus',
        'response_message' => 'getResponseMessage',
        'sort_strategy' => 'getSortStrategy',
        'domain_code' => 'getDomainCode',
        'keyword' => 'getKeyword',
        'number_of_products' => 'getNumberOfProducts',
        'found_products' => 'getFoundProducts'
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
        $this->container['response_status'] = isset($data['response_status']) ? $data['response_status'] : null;
        $this->container['response_message'] = isset($data['response_message']) ? $data['response_message'] : null;
        $this->container['sort_strategy'] = isset($data['sort_strategy']) ? $data['sort_strategy'] : null;
        $this->container['domain_code'] = isset($data['domain_code']) ? $data['domain_code'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['number_of_products'] = isset($data['number_of_products']) ? $data['number_of_products'] : null;
        $this->container['found_products'] = isset($data['found_products']) ? $data['found_products'] : null;
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
     * Gets response_status
     *
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->container['response_status'];
    }

    /**
     * Sets response_status
     *
     * @param string $response_status response_status
     *
     * @return $this
     */
    public function setResponseStatus($response_status)
    {
        $this->container['response_status'] = $response_status;

        return $this;
    }

    /**
     * Gets response_message
     *
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->container['response_message'];
    }

    /**
     * Sets response_message
     *
     * @param string $response_message response_message
     *
     * @return $this
     */
    public function setResponseMessage($response_message)
    {
        $this->container['response_message'] = $response_message;

        return $this;
    }

    /**
     * Gets sort_strategy
     *
     * @return string
     */
    public function getSortStrategy()
    {
        return $this->container['sort_strategy'];
    }

    /**
     * Sets sort_strategy
     *
     * @param string $sort_strategy sort_strategy
     *
     * @return $this
     */
    public function setSortStrategy($sort_strategy)
    {
        $this->container['sort_strategy'] = $sort_strategy;

        return $this;
    }

    /**
     * Gets domain_code
     *
     * @return string
     */
    public function getDomainCode()
    {
        return $this->container['domain_code'];
    }

    /**
     * Sets domain_code
     *
     * @param string $domain_code domain_code
     *
     * @return $this
     */
    public function setDomainCode($domain_code)
    {
        $this->container['domain_code'] = $domain_code;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string $keyword keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets number_of_products
     *
     * @return int
     */
    public function getNumberOfProducts()
    {
        return $this->container['number_of_products'];
    }

    /**
     * Sets number_of_products
     *
     * @param int $number_of_products number_of_products
     *
     * @return $this
     */
    public function setNumberOfProducts($number_of_products)
    {
        $this->container['number_of_products'] = $number_of_products;

        return $this;
    }

    /**
     * Gets found_products
     *
     * @return string[]
     */
    public function getFoundProducts()
    {
        return $this->container['found_products'];
    }

    /**
     * Sets found_products
     *
     * @param string[] $found_products found_products
     *
     * @return $this
     */
    public function setFoundProducts($found_products)
    {
        $this->container['found_products'] = $found_products;

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


