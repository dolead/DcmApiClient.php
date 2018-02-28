<?php
/**
 * Keyword
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dcm
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dolead Campaign Manager API v1.0
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dcm\Model;

use \ArrayAccess;

/**
 * Keyword Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Dcm
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Keyword implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Keyword';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account' => 'string',
        'ad_group' => 'string',
        'advertiser' => 'string',
        'campaign' => 'string',
        'destination_url' => 'string',
        'final_app_urls' => 'string[]',
        'final_mobile_urls' => 'string[]',
        'final_urls' => 'string[]',
        'id' => 'string',
        'publisher_id' => 'string',
        'status' => 'string',
        'target' => 'string',
        'text' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'account' => 'account',
        'ad_group' => 'ad_group',
        'advertiser' => 'advertiser',
        'campaign' => 'campaign',
        'destination_url' => 'destination_url',
        'final_app_urls' => 'final_app_urls',
        'final_mobile_urls' => 'final_mobile_urls',
        'final_urls' => 'final_urls',
        'id' => 'id',
        'publisher_id' => 'publisher_id',
        'status' => 'status',
        'target' => 'target',
        'text' => 'text'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'account' => 'setAccount',
        'ad_group' => 'setAdGroup',
        'advertiser' => 'setAdvertiser',
        'campaign' => 'setCampaign',
        'destination_url' => 'setDestinationUrl',
        'final_app_urls' => 'setFinalAppUrls',
        'final_mobile_urls' => 'setFinalMobileUrls',
        'final_urls' => 'setFinalUrls',
        'id' => 'setId',
        'publisher_id' => 'setPublisherId',
        'status' => 'setStatus',
        'target' => 'setTarget',
        'text' => 'setText'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'account' => 'getAccount',
        'ad_group' => 'getAdGroup',
        'advertiser' => 'getAdvertiser',
        'campaign' => 'getCampaign',
        'destination_url' => 'getDestinationUrl',
        'final_app_urls' => 'getFinalAppUrls',
        'final_mobile_urls' => 'getFinalMobileUrls',
        'final_urls' => 'getFinalUrls',
        'id' => 'getId',
        'publisher_id' => 'getPublisherId',
        'status' => 'getStatus',
        'target' => 'getTarget',
        'text' => 'getText'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PAUSED = 'PAUSED';
    const STATUS_DELETED = 'DELETED';
    const TARGET_BROAD = 'BROAD';
    const TARGET_PHRASE = 'PHRASE';
    const TARGET_EXACT = 'EXACT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PAUSED,
            self::STATUS_DELETED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTargetAllowableValues()
    {
        return [
            self::TARGET_BROAD,
            self::TARGET_PHRASE,
            self::TARGET_EXACT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['ad_group'] = isset($data['ad_group']) ? $data['ad_group'] : null;
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['destination_url'] = isset($data['destination_url']) ? $data['destination_url'] : null;
        $this->container['final_app_urls'] = isset($data['final_app_urls']) ? $data['final_app_urls'] : null;
        $this->container['final_mobile_urls'] = isset($data['final_mobile_urls']) ? $data['final_mobile_urls'] : null;
        $this->container['final_urls'] = isset($data['final_urls']) ? $data['final_urls'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("ACTIVE", "PAUSED", "DELETED");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        $allowed_values = array("BROAD", "PHRASE", "EXACT");
        if (!in_array($this->container['target'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'target', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("ACTIVE", "PAUSED", "DELETED");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("BROAD", "PHRASE", "EXACT");
        if (!in_array($this->container['target'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets account
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     * @param string $account ID of the account in Dolead system.
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets ad_group
     * @return string
     */
    public function getAdGroup()
    {
        return $this->container['ad_group'];
    }

    /**
     * Sets ad_group
     * @param string $ad_group ID of the adgroup in Dolead system.
     * @return $this
     */
    public function setAdGroup($ad_group)
    {
        $this->container['ad_group'] = $ad_group;

        return $this;
    }

    /**
     * Gets advertiser
     * @return string
     */
    public function getAdvertiser()
    {
        return $this->container['advertiser'];
    }

    /**
     * Sets advertiser
     * @param string $advertiser ID of the advertiser in Dolead system.
     * @return $this
     */
    public function setAdvertiser($advertiser)
    {
        $this->container['advertiser'] = $advertiser;

        return $this;
    }

    /**
     * Gets campaign
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     * @param string $campaign ID of the campaign in Dolead system.
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets destination_url
     * @return string
     */
    public function getDestinationUrl()
    {
        return $this->container['destination_url'];
    }

    /**
     * Sets destination_url
     * @param string $destination_url The keyword's destination URL
     * @return $this
     */
    public function setDestinationUrl($destination_url)
    {
        $this->container['destination_url'] = $destination_url;

        return $this;
    }

    /**
     * Gets final_app_urls
     * @return string[]
     */
    public function getFinalAppUrls()
    {
        return $this->container['final_app_urls'];
    }

    /**
     * Sets final_app_urls
     * @param string[] $final_app_urls The landing page's URLs (app only)
     * @return $this
     */
    public function setFinalAppUrls($final_app_urls)
    {
        $this->container['final_app_urls'] = $final_app_urls;

        return $this;
    }

    /**
     * Gets final_mobile_urls
     * @return string[]
     */
    public function getFinalMobileUrls()
    {
        return $this->container['final_mobile_urls'];
    }

    /**
     * Sets final_mobile_urls
     * @param string[] $final_mobile_urls The landing page's URLs (mobile only)
     * @return $this
     */
    public function setFinalMobileUrls($final_mobile_urls)
    {
        $this->container['final_mobile_urls'] = $final_mobile_urls;

        return $this;
    }

    /**
     * Gets final_urls
     * @return string[]
     */
    public function getFinalUrls()
    {
        return $this->container['final_urls'];
    }

    /**
     * Sets final_urls
     * @param string[] $final_urls The landing page's URLs
     * @return $this
     */
    public function setFinalUrls($final_urls)
    {
        $this->container['final_urls'] = $final_urls;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id ID of the adgroup in Dolead system.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets publisher_id
     * @return string
     */
    public function getPublisherId()
    {
        return $this->container['publisher_id'];
    }

    /**
     * Sets publisher_id
     * @param string $publisher_id Publisher's (Bing, Adwords, Yahoo) ID
     * @return $this
     */
    public function setPublisherId($publisher_id)
    {
        $this->container['publisher_id'] = $publisher_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the ad
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('ACTIVE', 'PAUSED', 'DELETED');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ACTIVE', 'PAUSED', 'DELETED'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets target
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param string $target The keyword's target
     * @return $this
     */
    public function setTarget($target)
    {
        $allowed_values = array('BROAD', 'PHRASE', 'EXACT');
        if (!in_array($target, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'target', must be one of 'BROAD', 'PHRASE', 'EXACT'");
        }
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text The keyword's text
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Dcm\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Dcm\ObjectSerializer::sanitizeForSerialization($this));
    }
}


