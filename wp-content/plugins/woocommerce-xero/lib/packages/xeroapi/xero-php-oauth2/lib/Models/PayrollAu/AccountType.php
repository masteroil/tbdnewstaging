<?php
/**
 * AccountType
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
 * Xero Payroll AU API
 *
 * This is the Xero Payroll API for orgs in Australia region.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * AccountType Class Doc Comment
 *
 * @category Class
 * @description See Account Types
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountType
{
    /**
     * Possible values of this enum
     */
    const BANK = 'BANK';
    const CURRENT = 'CURRENT';
    const CURRLIAB = 'CURRLIAB';
    const DEPRECIATN = 'DEPRECIATN';
    const DIRECTCOSTS = 'DIRECTCOSTS';
    const EQUITY = 'EQUITY';
    const EXPENSE = 'EXPENSE';
    const FIXED = 'FIXED';
    const INVENTORY = 'INVENTORY';
    const LIABILITY = 'LIABILITY';
    const NONCURRENT = 'NONCURRENT';
    const OTHERINCOME = 'OTHERINCOME';
    const OVERHEADS = 'OVERHEADS';
    const PREPAYMENT = 'PREPAYMENT';
    const REVENUE = 'REVENUE';
    const SALES = 'SALES';
    const TERMLIAB = 'TERMLIAB';
    const PAYGLIABILITY = 'PAYGLIABILITY';
    const PAYG = 'PAYG';
    const SUPERANNUATIONEXPENSE = 'SUPERANNUATIONEXPENSE';
    const SUPERANNUATIONLIABILITY = 'SUPERANNUATIONLIABILITY';
    const WAGESEXPENSE = 'WAGESEXPENSE';
    const WAGESPAYABLELIABILITY = 'WAGESPAYABLELIABILITY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BANK,
            self::CURRENT,
            self::CURRLIAB,
            self::DEPRECIATN,
            self::DIRECTCOSTS,
            self::EQUITY,
            self::EXPENSE,
            self::FIXED,
            self::INVENTORY,
            self::LIABILITY,
            self::NONCURRENT,
            self::OTHERINCOME,
            self::OVERHEADS,
            self::PREPAYMENT,
            self::REVENUE,
            self::SALES,
            self::TERMLIAB,
            self::PAYGLIABILITY,
            self::PAYG,
            self::SUPERANNUATIONEXPENSE,
            self::SUPERANNUATIONLIABILITY,
            self::WAGESEXPENSE,
            self::WAGESPAYABLELIABILITY,
        ];
    }
}

