<?php
/**
 * Campaign
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
 * Campaign Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Dcm
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Campaign implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account' => 'string',
        'advertiser' => 'string',
        'base_campaign' => 'string',
        'budget' => 'int',
        'campaign_goal' => 'string',
        'campaign_goal_value' => 'float',
        'campaign_type' => 'string',
        'id' => 'string',
        'lead_customer_id' => 'string',
        'lead_form_ids' => 'string[]',
        'name' => 'string',
        'negative_geo_criterions' => 'string[]',
        'positive_geo_criterions' => 'string[]',
        'publisher_id' => 'string',
        'status' => 'string'
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
        'advertiser' => 'advertiser',
        'base_campaign' => 'base_campaign',
        'budget' => 'budget',
        'campaign_goal' => 'campaign_goal',
        'campaign_goal_value' => 'campaign_goal_value',
        'campaign_type' => 'campaign_type',
        'id' => 'id',
        'lead_customer_id' => 'lead_customer_id',
        'lead_form_ids' => 'lead_form_ids',
        'name' => 'name',
        'negative_geo_criterions' => 'negative_geo_criterions',
        'positive_geo_criterions' => 'positive_geo_criterions',
        'publisher_id' => 'publisher_id',
        'status' => 'status'
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
        'advertiser' => 'setAdvertiser',
        'base_campaign' => 'setBaseCampaign',
        'budget' => 'setBudget',
        'campaign_goal' => 'setCampaignGoal',
        'campaign_goal_value' => 'setCampaignGoalValue',
        'campaign_type' => 'setCampaignType',
        'id' => 'setId',
        'lead_customer_id' => 'setLeadCustomerId',
        'lead_form_ids' => 'setLeadFormIds',
        'name' => 'setName',
        'negative_geo_criterions' => 'setNegativeGeoCriterions',
        'positive_geo_criterions' => 'setPositiveGeoCriterions',
        'publisher_id' => 'setPublisherId',
        'status' => 'setStatus'
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
        'advertiser' => 'getAdvertiser',
        'base_campaign' => 'getBaseCampaign',
        'budget' => 'getBudget',
        'campaign_goal' => 'getCampaignGoal',
        'campaign_goal_value' => 'getCampaignGoalValue',
        'campaign_type' => 'getCampaignType',
        'id' => 'getId',
        'lead_customer_id' => 'getLeadCustomerId',
        'lead_form_ids' => 'getLeadFormIds',
        'name' => 'getName',
        'negative_geo_criterions' => 'getNegativeGeoCriterions',
        'positive_geo_criterions' => 'getPositiveGeoCriterions',
        'publisher_id' => 'getPublisherId',
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const CAMPAIGN_GOAL_TRAFFIC = 'TRAFFIC';
    const CAMPAIGN_GOAL_CONVERSIONS = 'CONVERSIONS';
    const CAMPAIGN_GOAL_COS = 'COS';
    const CAMPAIGN_TYPE_SEARCH = 'SEARCH';
    const CAMPAIGN_TYPE_DISPLAY = 'DISPLAY';
    const CAMPAIGN_TYPE_SHOPPING = 'SHOPPING';
    const CAMPAIGN_TYPE_NATIVE = 'NATIVE';
    const CAMPAIGN_TYPE_MULTI_CHANNEL = 'MULTI_CHANNEL';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PAUSED = 'PAUSED';
    const STATUS_DELETED = 'DELETED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCampaignGoalAllowableValues()
    {
        return [
            self::CAMPAIGN_GOAL_TRAFFIC,
            self::CAMPAIGN_GOAL_CONVERSIONS,
            self::CAMPAIGN_GOAL_COS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCampaignTypeAllowableValues()
    {
        return [
            self::CAMPAIGN_TYPE_SEARCH,
            self::CAMPAIGN_TYPE_DISPLAY,
            self::CAMPAIGN_TYPE_SHOPPING,
            self::CAMPAIGN_TYPE_NATIVE,
            self::CAMPAIGN_TYPE_MULTI_CHANNEL,
        ];
    }
    
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
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['base_campaign'] = isset($data['base_campaign']) ? $data['base_campaign'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['campaign_goal'] = isset($data['campaign_goal']) ? $data['campaign_goal'] : null;
        $this->container['campaign_goal_value'] = isset($data['campaign_goal_value']) ? $data['campaign_goal_value'] : null;
        $this->container['campaign_type'] = isset($data['campaign_type']) ? $data['campaign_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lead_customer_id'] = isset($data['lead_customer_id']) ? $data['lead_customer_id'] : null;
        $this->container['lead_form_ids'] = isset($data['lead_form_ids']) ? $data['lead_form_ids'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['negative_geo_criterions'] = isset($data['negative_geo_criterions']) ? $data['negative_geo_criterions'] : null;
        $this->container['positive_geo_criterions'] = isset($data['positive_geo_criterions']) ? $data['positive_geo_criterions'] : null;
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("TRAFFIC", "CONVERSIONS", "COS");
        if (!in_array($this->container['campaign_goal'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'campaign_goal', must be one of #{allowed_values}.";
        }

        $allowed_values = array("SEARCH", "DISPLAY", "SHOPPING", "NATIVE", "MULTI_CHANNEL");
        if (!in_array($this->container['campaign_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'campaign_type', must be one of #{allowed_values}.";
        }

        $allowed_values = array("ACTIVE", "PAUSED", "DELETED");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        $allowed_values = array("TRAFFIC", "CONVERSIONS", "COS");
        if (!in_array($this->container['campaign_goal'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("SEARCH", "DISPLAY", "SHOPPING", "NATIVE", "MULTI_CHANNEL");
        if (!in_array($this->container['campaign_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("ACTIVE", "PAUSED", "DELETED");
        if (!in_array($this->container['status'], $allowed_values)) {
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
     * Gets base_campaign
     * @return string
     */
    public function getBaseCampaign()
    {
        return $this->container['base_campaign'];
    }

    /**
     * Sets base_campaign
     * @param string $base_campaign A trial campaign's link to the base campaign
     * @return $this
     */
    public function setBaseCampaign($base_campaign)
    {
        $this->container['base_campaign'] = $base_campaign;

        return $this;
    }

    /**
     * Gets budget
     * @return int
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     * @param int $budget Daily budget allowed for the campaign
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets campaign_goal
     * @return string
     */
    public function getCampaignGoal()
    {
        return $this->container['campaign_goal'];
    }

    /**
     * Sets campaign_goal
     * @param string $campaign_goal Campaign goal type.
     * @return $this
     */
    public function setCampaignGoal($campaign_goal)
    {
        $allowed_values = array('TRAFFIC', 'CONVERSIONS', 'COS');
        if (!in_array($campaign_goal, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'campaign_goal', must be one of 'TRAFFIC', 'CONVERSIONS', 'COS'");
        }
        $this->container['campaign_goal'] = $campaign_goal;

        return $this;
    }

    /**
     * Gets campaign_goal_value
     * @return float
     */
    public function getCampaignGoalValue()
    {
        return $this->container['campaign_goal_value'];
    }

    /**
     * Sets campaign_goal_value
     * @param float $campaign_goal_value Campaign goal value.
     * @return $this
     */
    public function setCampaignGoalValue($campaign_goal_value)
    {
        $this->container['campaign_goal_value'] = $campaign_goal_value;

        return $this;
    }

    /**
     * Gets campaign_type
     * @return string
     */
    public function getCampaignType()
    {
        return $this->container['campaign_type'];
    }

    /**
     * Sets campaign_type
     * @param string $campaign_type Filter over the campaign type
     * @return $this
     */
    public function setCampaignType($campaign_type)
    {
        $allowed_values = array('SEARCH', 'DISPLAY', 'SHOPPING', 'NATIVE', 'MULTI_CHANNEL');
        if (!in_array($campaign_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'campaign_type', must be one of 'SEARCH', 'DISPLAY', 'SHOPPING', 'NATIVE', 'MULTI_CHANNEL'");
        }
        $this->container['campaign_type'] = $campaign_type;

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
     * @param string $id ID of the campaign in Dolead system.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lead_customer_id
     * @return string
     */
    public function getLeadCustomerId()
    {
        return $this->container['lead_customer_id'];
    }

    /**
     * Sets lead_customer_id
     * @param string $lead_customer_id Dolead Perf's customer ID (forced value)
     * @return $this
     */
    public function setLeadCustomerId($lead_customer_id)
    {
        $this->container['lead_customer_id'] = $lead_customer_id;

        return $this;
    }

    /**
     * Gets lead_form_ids
     * @return string[]
     */
    public function getLeadFormIds()
    {
        return $this->container['lead_form_ids'];
    }

    /**
     * Sets lead_form_ids
     * @param string[] $lead_form_ids Dolead Perf's form IDs (forced values)
     * @return $this
     */
    public function setLeadFormIds($lead_form_ids)
    {
        $this->container['lead_form_ids'] = $lead_form_ids;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The campaign name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets negative_geo_criterions
     * @return string[]
     */
    public function getNegativeGeoCriterions()
    {
        return $this->container['negative_geo_criterions'];
    }

    /**
     * Sets negative_geo_criterions
     * @param string[] $negative_geo_criterions
     * @return $this
     */
    public function setNegativeGeoCriterions($negative_geo_criterions)
    {
        $this->container['negative_geo_criterions'] = $negative_geo_criterions;

        return $this;
    }

    /**
     * Gets positive_geo_criterions
     * @return string[]
     */
    public function getPositiveGeoCriterions()
    {
        return $this->container['positive_geo_criterions'];
    }

    /**
     * Sets positive_geo_criterions
     * @param string[] $positive_geo_criterions
     * @return $this
     */
    public function setPositiveGeoCriterions($positive_geo_criterions)
    {
        $this->container['positive_geo_criterions'] = $positive_geo_criterions;

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
     * @param string $status Status of the campaign
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


