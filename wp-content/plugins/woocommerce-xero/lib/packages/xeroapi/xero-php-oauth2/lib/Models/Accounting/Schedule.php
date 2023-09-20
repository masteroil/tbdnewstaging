<?php
/**
 * Schedule
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
 * Xero Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\AccountingObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * Schedule Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Schedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period' => 'int',
        'unit' => 'string',
        'due_date' => 'int',
        'due_date_type' => 'string',
        'start_date' => 'string',
        'next_scheduled_date' => 'string',
        'end_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'period' => null,
        'unit' => null,
        'due_date' => null,
        'due_date_type' => null,
        'start_date' => null,
        'next_scheduled_date' => null,
        'end_date' => null
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
        'period' => 'Period',
        'unit' => 'Unit',
        'due_date' => 'DueDate',
        'due_date_type' => 'DueDateType',
        'start_date' => 'StartDate',
        'next_scheduled_date' => 'NextScheduledDate',
        'end_date' => 'EndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period' => 'setPeriod',
        'unit' => 'setUnit',
        'due_date' => 'setDueDate',
        'due_date_type' => 'setDueDateType',
        'start_date' => 'setStartDate',
        'next_scheduled_date' => 'setNextScheduledDate',
        'end_date' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period' => 'getPeriod',
        'unit' => 'getUnit',
        'due_date' => 'getDueDate',
        'due_date_type' => 'getDueDateType',
        'start_date' => 'getStartDate',
        'next_scheduled_date' => 'getNextScheduledDate',
        'end_date' => 'getEndDate'
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

    const UNIT_WEEKLY = 'WEEKLY';
    const UNIT_MONTHLY = 'MONTHLY';
    const DUE_DATE_TYPE_DAYSAFTERBILLDATE = 'DAYSAFTERBILLDATE';
    const DUE_DATE_TYPE_DAYSAFTERBILLMONTH = 'DAYSAFTERBILLMONTH';
    const DUE_DATE_TYPE_DAYSAFTERINVOICEDATE = 'DAYSAFTERINVOICEDATE';
    const DUE_DATE_TYPE_DAYSAFTERINVOICEMONTH = 'DAYSAFTERINVOICEMONTH';
    const DUE_DATE_TYPE_OFCURRENTMONTH = 'OFCURRENTMONTH';
    const DUE_DATE_TYPE_OFFOLLOWINGMONTH = 'OFFOLLOWINGMONTH';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_WEEKLY,
            self::UNIT_MONTHLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDueDateTypeAllowableValues()
    {
        return [
            self::DUE_DATE_TYPE_DAYSAFTERBILLDATE,
            self::DUE_DATE_TYPE_DAYSAFTERBILLMONTH,
            self::DUE_DATE_TYPE_DAYSAFTERINVOICEDATE,
            self::DUE_DATE_TYPE_DAYSAFTERINVOICEMONTH,
            self::DUE_DATE_TYPE_OFCURRENTMONTH,
            self::DUE_DATE_TYPE_OFFOLLOWINGMONTH,
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['due_date_type'] = isset($data['due_date_type']) ? $data['due_date_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['next_scheduled_date'] = isset($data['next_scheduled_date']) ? $data['next_scheduled_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDueDateTypeAllowableValues();
        if (!is_null($this->container['due_date_type']) && !in_array($this->container['due_date_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'due_date_type', must be one of '%s'",
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
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period Integer used with the unit e.g. 1 (every 1 week), 2 (every 2 months)
     *
     * @return $this
     */
    public function setPeriod($period)
    {

        $this->container['period'] = $period;

        return $this;
    }



    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit One of the following - WEEKLY or MONTHLY
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($unit) && !in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['unit'] = $unit;

        return $this;
    }



    /**
     * Gets due_date
     *
     * @return int|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param int|null $due_date Integer used with due date type e.g 20 (of following month), 31 (of current month)
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {

        $this->container['due_date'] = $due_date;

        return $this;
    }



    /**
     * Gets due_date_type
     *
     * @return string|null
     */
    public function getDueDateType()
    {
        return $this->container['due_date_type'];
    }

    /**
     * Sets due_date_type
     *
     * @param string|null $due_date_type the payment terms
     *
     * @return $this
     */
    public function setDueDateType($due_date_type)
    {
        $allowedValues = $this->getDueDateTypeAllowableValues();
        if (!is_null($due_date_type) && !in_array($due_date_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'due_date_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['due_date_type'] = $due_date_type;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }
    public function getStartDateAsDate()
    {
      if ($this->getStartDate() != null) {
        return StringUtil::convertStringToDate($this->getStartDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date Date the first invoice of the current version of the repeating schedule was generated (changes when repeating invoice is edited)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }
    /**
     * Sets start_date
     *
     * @param \DateTime |null $start_date Date the first invoice of the current version of the repeating schedule was generated (changes when repeating invoice is edited)
     *
     * @return $this
     */
    public function setStartDateAsDate($start_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($start_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($start_date->format('Y-m-d')." UTC") * 1000;
        $start_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['start_date'] = $start_date;
      return $this;
    }



    /**
     * Gets next_scheduled_date
     *
     * @return string|null
     */
    public function getNextScheduledDate()
    {
        return $this->container['next_scheduled_date'];
    }
    public function getNextScheduledDateAsDate()
    {
      if ($this->getNextScheduledDate() != null) {
        return StringUtil::convertStringToDate($this->getNextScheduledDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets next_scheduled_date
     *
     * @param string|null $next_scheduled_date The calendar date of the next invoice in the schedule to be generated
     *
     * @return $this
     */
    public function setNextScheduledDate($next_scheduled_date)
    {

        $this->container['next_scheduled_date'] = $next_scheduled_date;

        return $this;
    }
    /**
     * Sets next_scheduled_date
     *
     * @param \DateTime |null $next_scheduled_date The calendar date of the next invoice in the schedule to be generated
     *
     * @return $this
     */
    public function setNextScheduledDateAsDate($next_scheduled_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($next_scheduled_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($next_scheduled_date->format('Y-m-d')." UTC") * 1000;
        $next_scheduled_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['next_scheduled_date'] = $next_scheduled_date;
      return $this;
    }



    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }
    public function getEndDateAsDate()
    {
      if ($this->getEndDate() != null) {
        return StringUtil::convertStringToDate($this->getEndDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date Invoice end date – only returned if the template has an end date set
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {

        $this->container['end_date'] = $end_date;

        return $this;
    }
    /**
     * Sets end_date
     *
     * @param \DateTime |null $end_date Invoice end date – only returned if the template has an end date set
     *
     * @return $this
     */
    public function setEndDateAsDate($end_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($end_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($end_date->format('Y-m-d')." UTC") * 1000;
        $end_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['end_date'] = $end_date;
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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


