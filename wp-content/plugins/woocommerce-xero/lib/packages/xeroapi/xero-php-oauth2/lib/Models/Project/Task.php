<?php
/**
 * Task
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 28-August-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Projects API
 *
 * This is the Xero Projects API
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\ProjectObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * Task Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Task implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'task_id' => 'string',
        'name' => 'string',
        'rate' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount',
        'charge_type' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\ChargeType',
        'estimate_minutes' => 'int',
        'project_id' => 'string',
        'total_minutes' => 'int',
        'total_amount' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount',
        'minutes_invoiced' => 'int',
        'minutes_to_be_invoiced' => 'int',
        'fixed_minutes' => 'int',
        'non_chargeable_minutes' => 'int',
        'amount_to_be_invoiced' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount',
        'amount_invoiced' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'task_id' => 'uuid',
        'name' => null,
        'rate' => null,
        'charge_type' => null,
        'estimate_minutes' => null,
        'project_id' => 'uuid',
        'total_minutes' => null,
        'total_amount' => null,
        'minutes_invoiced' => null,
        'minutes_to_be_invoiced' => null,
        'fixed_minutes' => null,
        'non_chargeable_minutes' => null,
        'amount_to_be_invoiced' => null,
        'amount_invoiced' => null,
        'status' => null
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
        'task_id' => 'taskId',
        'name' => 'name',
        'rate' => 'rate',
        'charge_type' => 'chargeType',
        'estimate_minutes' => 'estimateMinutes',
        'project_id' => 'projectId',
        'total_minutes' => 'totalMinutes',
        'total_amount' => 'totalAmount',
        'minutes_invoiced' => 'minutesInvoiced',
        'minutes_to_be_invoiced' => 'minutesToBeInvoiced',
        'fixed_minutes' => 'fixedMinutes',
        'non_chargeable_minutes' => 'nonChargeableMinutes',
        'amount_to_be_invoiced' => 'amountToBeInvoiced',
        'amount_invoiced' => 'amountInvoiced',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'task_id' => 'setTaskId',
        'name' => 'setName',
        'rate' => 'setRate',
        'charge_type' => 'setChargeType',
        'estimate_minutes' => 'setEstimateMinutes',
        'project_id' => 'setProjectId',
        'total_minutes' => 'setTotalMinutes',
        'total_amount' => 'setTotalAmount',
        'minutes_invoiced' => 'setMinutesInvoiced',
        'minutes_to_be_invoiced' => 'setMinutesToBeInvoiced',
        'fixed_minutes' => 'setFixedMinutes',
        'non_chargeable_minutes' => 'setNonChargeableMinutes',
        'amount_to_be_invoiced' => 'setAmountToBeInvoiced',
        'amount_invoiced' => 'setAmountInvoiced',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'task_id' => 'getTaskId',
        'name' => 'getName',
        'rate' => 'getRate',
        'charge_type' => 'getChargeType',
        'estimate_minutes' => 'getEstimateMinutes',
        'project_id' => 'getProjectId',
        'total_minutes' => 'getTotalMinutes',
        'total_amount' => 'getTotalAmount',
        'minutes_invoiced' => 'getMinutesInvoiced',
        'minutes_to_be_invoiced' => 'getMinutesToBeInvoiced',
        'fixed_minutes' => 'getFixedMinutes',
        'non_chargeable_minutes' => 'getNonChargeableMinutes',
        'amount_to_be_invoiced' => 'getAmountToBeInvoiced',
        'amount_invoiced' => 'getAmountInvoiced',
        'status' => 'getStatus'
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

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INVOICED = 'INVOICED';
    const STATUS_LOCKED = 'LOCKED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INVOICED,
            self::STATUS_LOCKED,
        ];
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
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['charge_type'] = isset($data['charge_type']) ? $data['charge_type'] : null;
        $this->container['estimate_minutes'] = isset($data['estimate_minutes']) ? $data['estimate_minutes'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['total_minutes'] = isset($data['total_minutes']) ? $data['total_minutes'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['minutes_invoiced'] = isset($data['minutes_invoiced']) ? $data['minutes_invoiced'] : null;
        $this->container['minutes_to_be_invoiced'] = isset($data['minutes_to_be_invoiced']) ? $data['minutes_to_be_invoiced'] : null;
        $this->container['fixed_minutes'] = isset($data['fixed_minutes']) ? $data['fixed_minutes'] : null;
        $this->container['non_chargeable_minutes'] = isset($data['non_chargeable_minutes']) ? $data['non_chargeable_minutes'] : null;
        $this->container['amount_to_be_invoiced'] = isset($data['amount_to_be_invoiced']) ? $data['amount_to_be_invoiced'] : null;
        $this->container['amount_invoiced'] = isset($data['amount_invoiced']) ? $data['amount_invoiced'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets task_id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string|null $task_id Identifier of the task.
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {

        $this->container['task_id'] = $task_id;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the task.
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets rate
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {

        $this->container['rate'] = $rate;

        return $this;
    }



    /**
     * Gets charge_type
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string|null $charge_type charge_type
     *
     * @return $this
     */
    public function setChargeType($charge_type)
    {

        $this->container['charge_type'] = $charge_type;

        return $this;
    }



    /**
     * Gets estimate_minutes
     *
     * @return int|null
     */
    public function getEstimateMinutes()
    {
        return $this->container['estimate_minutes'];
    }

    /**
     * Sets estimate_minutes
     *
     * @param int|null $estimate_minutes An estimated time to perform the task
     *
     * @return $this
     */
    public function setEstimateMinutes($estimate_minutes)
    {

        $this->container['estimate_minutes'] = $estimate_minutes;

        return $this;
    }



    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id Identifier of the project task belongs to.
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {

        $this->container['project_id'] = $project_id;

        return $this;
    }



    /**
     * Gets total_minutes
     *
     * @return int|null
     */
    public function getTotalMinutes()
    {
        return $this->container['total_minutes'];
    }

    /**
     * Sets total_minutes
     *
     * @param int|null $total_minutes Total minutes which have been logged against the task. Logged by assigning a time entry to a task
     *
     * @return $this
     */
    public function setTotalMinutes($total_minutes)
    {

        $this->container['total_minutes'] = $total_minutes;

        return $this;
    }



    /**
     * Gets total_amount
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {

        $this->container['total_amount'] = $total_amount;

        return $this;
    }



    /**
     * Gets minutes_invoiced
     *
     * @return int|null
     */
    public function getMinutesInvoiced()
    {
        return $this->container['minutes_invoiced'];
    }

    /**
     * Sets minutes_invoiced
     *
     * @param int|null $minutes_invoiced Minutes on this task which have been invoiced.
     *
     * @return $this
     */
    public function setMinutesInvoiced($minutes_invoiced)
    {

        $this->container['minutes_invoiced'] = $minutes_invoiced;

        return $this;
    }



    /**
     * Gets minutes_to_be_invoiced
     *
     * @return int|null
     */
    public function getMinutesToBeInvoiced()
    {
        return $this->container['minutes_to_be_invoiced'];
    }

    /**
     * Sets minutes_to_be_invoiced
     *
     * @param int|null $minutes_to_be_invoiced Minutes on this task which have not been invoiced.
     *
     * @return $this
     */
    public function setMinutesToBeInvoiced($minutes_to_be_invoiced)
    {

        $this->container['minutes_to_be_invoiced'] = $minutes_to_be_invoiced;

        return $this;
    }



    /**
     * Gets fixed_minutes
     *
     * @return int|null
     */
    public function getFixedMinutes()
    {
        return $this->container['fixed_minutes'];
    }

    /**
     * Sets fixed_minutes
     *
     * @param int|null $fixed_minutes Minutes logged against this task if its charge type is `FIXED`.
     *
     * @return $this
     */
    public function setFixedMinutes($fixed_minutes)
    {

        $this->container['fixed_minutes'] = $fixed_minutes;

        return $this;
    }



    /**
     * Gets non_chargeable_minutes
     *
     * @return int|null
     */
    public function getNonChargeableMinutes()
    {
        return $this->container['non_chargeable_minutes'];
    }

    /**
     * Sets non_chargeable_minutes
     *
     * @param int|null $non_chargeable_minutes Minutes logged against this task if its charge type is `NON_CHARGEABLE`.
     *
     * @return $this
     */
    public function setNonChargeableMinutes($non_chargeable_minutes)
    {

        $this->container['non_chargeable_minutes'] = $non_chargeable_minutes;

        return $this;
    }



    /**
     * Gets amount_to_be_invoiced
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getAmountToBeInvoiced()
    {
        return $this->container['amount_to_be_invoiced'];
    }

    /**
     * Sets amount_to_be_invoiced
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null $amount_to_be_invoiced amount_to_be_invoiced
     *
     * @return $this
     */
    public function setAmountToBeInvoiced($amount_to_be_invoiced)
    {

        $this->container['amount_to_be_invoiced'] = $amount_to_be_invoiced;

        return $this;
    }



    /**
     * Gets amount_invoiced
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null
     */
    public function getAmountInvoiced()
    {
        return $this->container['amount_invoiced'];
    }

    /**
     * Sets amount_invoiced
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Amount|null $amount_invoiced amount_invoiced
     *
     * @return $this
     */
    public function setAmountInvoiced($amount_invoiced)
    {

        $this->container['amount_invoiced'] = $amount_invoiced;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the task. When a task of ChargeType is `FIXED` and the rate amount is invoiced the status will be set to `INVOICED` and can't be modified. A task with ChargeType of `TIME` or `NON_CHARGEABLE` cannot have a status of `INVOICED`. A `LOCKED` state indicates that the task is currently changing state (for example being invoiced) and can't be modified.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

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
        return json_encode(
            ProjectObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


