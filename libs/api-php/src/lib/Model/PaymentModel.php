<?php
/**
 * PaymentModel
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * PaymentModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cash_remarks' => 'string',
        'exclude_vat' => 'double',
        'cash_tax' => 'int',
        'credit_card_number' => 'string',
        'company_vat_rate' => 'int',
        'net' => 'float',
        'bank_account_number' => 'string',
        'bank_account_id' => 'int',
        'payment_method' => '\OpenAPI\Client\Model\PaymentMethod',
        'date_now' => '\DateTime',
        'amount_collected' => 'float',
        'amount_withheld' => 'float',
        'withholding_tax' => 'float',
        'remarks' => 'string',
        'transfer_bank_account_id' => 'int',
        'bank_account_credit_card_id' => 'int',
        'charge' => 'float',
        'cheque_date' => '\DateTime',
        'cheque_number' => 'string',
        'cheque_bank_account_id' => 'string',
        'credit_card_bank_account_id' => 'string',
        'remaining_collected' => 'float',
        'remaining_collected_type' => 'OneOfRemainingCollectedType',
        'deduction_amount' => 'float',
        'payment_deduction_type' => 'OneOfDeductionType',
        'petty_cash_name' => 'string',
        'petty_cash_id' => 'int',
        'cheque_id' => 'int',
        'credit_card_id' => 'int',
        'other_channel_id' => 'int',
        'cheque_deposit_date' => '\DateTime',
        'cheque_deposit_bank_id' => 'int',
        'cheque_cashing_date' => '\DateTime',
        'auto_create_withholding_tax' => 'bool',
        'withholding_tax_income_type' => '\OpenAPI\Client\Model\IncomeType',
        'withholding_tax_income_description' => 'string',
        'withholding_tax_entity' => '\OpenAPI\Client\Model\Entity',
        'exchange_rate_fee' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cash_remarks' => null,
        'exclude_vat' => 'double',
        'cash_tax' => 'int32',
        'credit_card_number' => null,
        'company_vat_rate' => 'int32',
        'net' => 'decimal',
        'bank_account_number' => null,
        'bank_account_id' => 'int64',
        'payment_method' => null,
        'date_now' => 'date-time',
        'amount_collected' => 'decimal',
        'amount_withheld' => 'decimal',
        'withholding_tax' => 'decimal',
        'remarks' => null,
        'transfer_bank_account_id' => 'int32',
        'bank_account_credit_card_id' => 'int32',
        'charge' => 'decimal',
        'cheque_date' => 'date-time',
        'cheque_number' => null,
        'cheque_bank_account_id' => null,
        'credit_card_bank_account_id' => null,
        'remaining_collected' => 'decimal',
        'remaining_collected_type' => null,
        'deduction_amount' => 'decimal',
        'payment_deduction_type' => null,
        'petty_cash_name' => null,
        'petty_cash_id' => 'int64',
        'cheque_id' => 'int64',
        'credit_card_id' => 'int64',
        'other_channel_id' => 'int64',
        'cheque_deposit_date' => 'date-time',
        'cheque_deposit_bank_id' => 'int64',
        'cheque_cashing_date' => 'date-time',
        'auto_create_withholding_tax' => null,
        'withholding_tax_income_type' => null,
        'withholding_tax_income_description' => null,
        'withholding_tax_entity' => null,
        'exchange_rate_fee' => 'decimal'
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
        'cash_remarks' => 'cashRemarks',
        'exclude_vat' => 'excludeVat',
        'cash_tax' => 'cashTax',
        'credit_card_number' => 'creditCardNumber',
        'company_vat_rate' => 'companyVatRate',
        'net' => 'net',
        'bank_account_number' => 'bankAccountNumber',
        'bank_account_id' => 'bankAccountId',
        'payment_method' => 'paymentMethod',
        'date_now' => 'dateNow',
        'amount_collected' => 'amountCollected',
        'amount_withheld' => 'amountWithheld',
        'withholding_tax' => 'withholdingTax',
        'remarks' => 'remarks',
        'transfer_bank_account_id' => 'transferBankAccountId',
        'bank_account_credit_card_id' => 'bankAccountCreditCardId',
        'charge' => 'charge',
        'cheque_date' => 'chequeDate',
        'cheque_number' => 'chequeNumber',
        'cheque_bank_account_id' => 'chequeBankAccountId',
        'credit_card_bank_account_id' => 'creditCardBankAccountId',
        'remaining_collected' => 'remainingCollected',
        'remaining_collected_type' => 'remainingCollectedType',
        'deduction_amount' => 'deductionAmount',
        'payment_deduction_type' => 'paymentDeductionType',
        'petty_cash_name' => 'pettyCashName',
        'petty_cash_id' => 'pettyCashId',
        'cheque_id' => 'chequeId',
        'credit_card_id' => 'creditCardId',
        'other_channel_id' => 'otherChannelId',
        'cheque_deposit_date' => 'chequeDepositDate',
        'cheque_deposit_bank_id' => 'chequeDepositBankId',
        'cheque_cashing_date' => 'chequeCashingDate',
        'auto_create_withholding_tax' => 'autoCreateWithholdingTax',
        'withholding_tax_income_type' => 'withholdingTaxIncomeType',
        'withholding_tax_income_description' => 'withholdingTaxIncomeDescription',
        'withholding_tax_entity' => 'withholdingTaxEntity',
        'exchange_rate_fee' => 'exchangeRateFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cash_remarks' => 'setCashRemarks',
        'exclude_vat' => 'setExcludeVat',
        'cash_tax' => 'setCashTax',
        'credit_card_number' => 'setCreditCardNumber',
        'company_vat_rate' => 'setCompanyVatRate',
        'net' => 'setNet',
        'bank_account_number' => 'setBankAccountNumber',
        'bank_account_id' => 'setBankAccountId',
        'payment_method' => 'setPaymentMethod',
        'date_now' => 'setDateNow',
        'amount_collected' => 'setAmountCollected',
        'amount_withheld' => 'setAmountWithheld',
        'withholding_tax' => 'setWithholdingTax',
        'remarks' => 'setRemarks',
        'transfer_bank_account_id' => 'setTransferBankAccountId',
        'bank_account_credit_card_id' => 'setBankAccountCreditCardId',
        'charge' => 'setCharge',
        'cheque_date' => 'setChequeDate',
        'cheque_number' => 'setChequeNumber',
        'cheque_bank_account_id' => 'setChequeBankAccountId',
        'credit_card_bank_account_id' => 'setCreditCardBankAccountId',
        'remaining_collected' => 'setRemainingCollected',
        'remaining_collected_type' => 'setRemainingCollectedType',
        'deduction_amount' => 'setDeductionAmount',
        'payment_deduction_type' => 'setPaymentDeductionType',
        'petty_cash_name' => 'setPettyCashName',
        'petty_cash_id' => 'setPettyCashId',
        'cheque_id' => 'setChequeId',
        'credit_card_id' => 'setCreditCardId',
        'other_channel_id' => 'setOtherChannelId',
        'cheque_deposit_date' => 'setChequeDepositDate',
        'cheque_deposit_bank_id' => 'setChequeDepositBankId',
        'cheque_cashing_date' => 'setChequeCashingDate',
        'auto_create_withholding_tax' => 'setAutoCreateWithholdingTax',
        'withholding_tax_income_type' => 'setWithholdingTaxIncomeType',
        'withholding_tax_income_description' => 'setWithholdingTaxIncomeDescription',
        'withholding_tax_entity' => 'setWithholdingTaxEntity',
        'exchange_rate_fee' => 'setExchangeRateFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cash_remarks' => 'getCashRemarks',
        'exclude_vat' => 'getExcludeVat',
        'cash_tax' => 'getCashTax',
        'credit_card_number' => 'getCreditCardNumber',
        'company_vat_rate' => 'getCompanyVatRate',
        'net' => 'getNet',
        'bank_account_number' => 'getBankAccountNumber',
        'bank_account_id' => 'getBankAccountId',
        'payment_method' => 'getPaymentMethod',
        'date_now' => 'getDateNow',
        'amount_collected' => 'getAmountCollected',
        'amount_withheld' => 'getAmountWithheld',
        'withholding_tax' => 'getWithholdingTax',
        'remarks' => 'getRemarks',
        'transfer_bank_account_id' => 'getTransferBankAccountId',
        'bank_account_credit_card_id' => 'getBankAccountCreditCardId',
        'charge' => 'getCharge',
        'cheque_date' => 'getChequeDate',
        'cheque_number' => 'getChequeNumber',
        'cheque_bank_account_id' => 'getChequeBankAccountId',
        'credit_card_bank_account_id' => 'getCreditCardBankAccountId',
        'remaining_collected' => 'getRemainingCollected',
        'remaining_collected_type' => 'getRemainingCollectedType',
        'deduction_amount' => 'getDeductionAmount',
        'payment_deduction_type' => 'getPaymentDeductionType',
        'petty_cash_name' => 'getPettyCashName',
        'petty_cash_id' => 'getPettyCashId',
        'cheque_id' => 'getChequeId',
        'credit_card_id' => 'getCreditCardId',
        'other_channel_id' => 'getOtherChannelId',
        'cheque_deposit_date' => 'getChequeDepositDate',
        'cheque_deposit_bank_id' => 'getChequeDepositBankId',
        'cheque_cashing_date' => 'getChequeCashingDate',
        'auto_create_withholding_tax' => 'getAutoCreateWithholdingTax',
        'withholding_tax_income_type' => 'getWithholdingTaxIncomeType',
        'withholding_tax_income_description' => 'getWithholdingTaxIncomeDescription',
        'withholding_tax_entity' => 'getWithholdingTaxEntity',
        'exchange_rate_fee' => 'getExchangeRateFee'
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
        $this->container['cash_remarks'] = $data['cash_remarks'] ?? null;
        $this->container['exclude_vat'] = $data['exclude_vat'] ?? null;
        $this->container['cash_tax'] = $data['cash_tax'] ?? null;
        $this->container['credit_card_number'] = $data['credit_card_number'] ?? null;
        $this->container['company_vat_rate'] = $data['company_vat_rate'] ?? null;
        $this->container['net'] = $data['net'] ?? null;
        $this->container['bank_account_number'] = $data['bank_account_number'] ?? null;
        $this->container['bank_account_id'] = $data['bank_account_id'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['date_now'] = $data['date_now'] ?? null;
        $this->container['amount_collected'] = $data['amount_collected'] ?? null;
        $this->container['amount_withheld'] = $data['amount_withheld'] ?? null;
        $this->container['withholding_tax'] = $data['withholding_tax'] ?? null;
        $this->container['remarks'] = $data['remarks'] ?? null;
        $this->container['transfer_bank_account_id'] = $data['transfer_bank_account_id'] ?? null;
        $this->container['bank_account_credit_card_id'] = $data['bank_account_credit_card_id'] ?? null;
        $this->container['charge'] = $data['charge'] ?? null;
        $this->container['cheque_date'] = $data['cheque_date'] ?? null;
        $this->container['cheque_number'] = $data['cheque_number'] ?? null;
        $this->container['cheque_bank_account_id'] = $data['cheque_bank_account_id'] ?? null;
        $this->container['credit_card_bank_account_id'] = $data['credit_card_bank_account_id'] ?? null;
        $this->container['remaining_collected'] = $data['remaining_collected'] ?? null;
        $this->container['remaining_collected_type'] = $data['remaining_collected_type'] ?? null;
        $this->container['deduction_amount'] = $data['deduction_amount'] ?? null;
        $this->container['payment_deduction_type'] = $data['payment_deduction_type'] ?? null;
        $this->container['petty_cash_name'] = $data['petty_cash_name'] ?? null;
        $this->container['petty_cash_id'] = $data['petty_cash_id'] ?? null;
        $this->container['cheque_id'] = $data['cheque_id'] ?? null;
        $this->container['credit_card_id'] = $data['credit_card_id'] ?? null;
        $this->container['other_channel_id'] = $data['other_channel_id'] ?? null;
        $this->container['cheque_deposit_date'] = $data['cheque_deposit_date'] ?? null;
        $this->container['cheque_deposit_bank_id'] = $data['cheque_deposit_bank_id'] ?? null;
        $this->container['cheque_cashing_date'] = $data['cheque_cashing_date'] ?? null;
        $this->container['auto_create_withholding_tax'] = $data['auto_create_withholding_tax'] ?? null;
        $this->container['withholding_tax_income_type'] = $data['withholding_tax_income_type'] ?? null;
        $this->container['withholding_tax_income_description'] = $data['withholding_tax_income_description'] ?? null;
        $this->container['withholding_tax_entity'] = $data['withholding_tax_entity'] ?? null;
        $this->container['exchange_rate_fee'] = $data['exchange_rate_fee'] ?? null;
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
     * Gets cash_remarks
     *
     * @return string|null
     */
    public function getCashRemarks()
    {
        return $this->container['cash_remarks'];
    }

    /**
     * Sets cash_remarks
     *
     * @param string|null $cash_remarks cash_remarks
     *
     * @return self
     */
    public function setCashRemarks($cash_remarks)
    {
        $this->container['cash_remarks'] = $cash_remarks;

        return $this;
    }

    /**
     * Gets exclude_vat
     *
     * @return double|null
     */
    public function getExcludeVat()
    {
        return $this->container['exclude_vat'];
    }

    /**
     * Sets exclude_vat
     *
     * @param double|null $exclude_vat exclude_vat
     *
     * @return self
     */
    public function setExcludeVat($exclude_vat)
    {
        $this->container['exclude_vat'] = $exclude_vat;

        return $this;
    }

    /**
     * Gets cash_tax
     *
     * @return int|null
     */
    public function getCashTax()
    {
        return $this->container['cash_tax'];
    }

    /**
     * Sets cash_tax
     *
     * @param int|null $cash_tax cash_tax
     *
     * @return self
     */
    public function setCashTax($cash_tax)
    {
        $this->container['cash_tax'] = $cash_tax;

        return $this;
    }

    /**
     * Gets credit_card_number
     *
     * @return string|null
     */
    public function getCreditCardNumber()
    {
        return $this->container['credit_card_number'];
    }

    /**
     * Sets credit_card_number
     *
     * @param string|null $credit_card_number credit_card_number
     *
     * @return self
     */
    public function setCreditCardNumber($credit_card_number)
    {
        $this->container['credit_card_number'] = $credit_card_number;

        return $this;
    }

    /**
     * Gets company_vat_rate
     *
     * @return int|null
     */
    public function getCompanyVatRate()
    {
        return $this->container['company_vat_rate'];
    }

    /**
     * Sets company_vat_rate
     *
     * @param int|null $company_vat_rate company_vat_rate
     *
     * @return self
     */
    public function setCompanyVatRate($company_vat_rate)
    {
        $this->container['company_vat_rate'] = $company_vat_rate;

        return $this;
    }

    /**
     * Gets net
     *
     * @return float|null
     */
    public function getNet()
    {
        return $this->container['net'];
    }

    /**
     * Sets net
     *
     * @param float|null $net net
     *
     * @return self
     */
    public function setNet($net)
    {
        $this->container['net'] = $net;

        return $this;
    }

    /**
     * Gets bank_account_number
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string|null $bank_account_number bank_account_number
     *
     * @return self
     */
    public function setBankAccountNumber($bank_account_number)
    {
        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets bank_account_id
     *
     * @return int|null
     */
    public function getBankAccountId()
    {
        return $this->container['bank_account_id'];
    }

    /**
     * Sets bank_account_id
     *
     * @param int|null $bank_account_id bank_account_id
     *
     * @return self
     */
    public function setBankAccountId($bank_account_id)
    {
        $this->container['bank_account_id'] = $bank_account_id;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \OpenAPI\Client\Model\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \OpenAPI\Client\Model\PaymentMethod|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets date_now
     *
     * @return \DateTime|null
     */
    public function getDateNow()
    {
        return $this->container['date_now'];
    }

    /**
     * Sets date_now
     *
     * @param \DateTime|null $date_now date_now
     *
     * @return self
     */
    public function setDateNow($date_now)
    {
        $this->container['date_now'] = $date_now;

        return $this;
    }

    /**
     * Gets amount_collected
     *
     * @return float|null
     */
    public function getAmountCollected()
    {
        return $this->container['amount_collected'];
    }

    /**
     * Sets amount_collected
     *
     * @param float|null $amount_collected amount_collected
     *
     * @return self
     */
    public function setAmountCollected($amount_collected)
    {
        $this->container['amount_collected'] = $amount_collected;

        return $this;
    }

    /**
     * Gets amount_withheld
     *
     * @return float|null
     */
    public function getAmountWithheld()
    {
        return $this->container['amount_withheld'];
    }

    /**
     * Sets amount_withheld
     *
     * @param float|null $amount_withheld amount_withheld
     *
     * @return self
     */
    public function setAmountWithheld($amount_withheld)
    {
        $this->container['amount_withheld'] = $amount_withheld;

        return $this;
    }

    /**
     * Gets withholding_tax
     *
     * @return float|null
     */
    public function getWithholdingTax()
    {
        return $this->container['withholding_tax'];
    }

    /**
     * Sets withholding_tax
     *
     * @param float|null $withholding_tax withholding_tax
     *
     * @return self
     */
    public function setWithholdingTax($withholding_tax)
    {
        $this->container['withholding_tax'] = $withholding_tax;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks remarks
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets transfer_bank_account_id
     *
     * @return int|null
     */
    public function getTransferBankAccountId()
    {
        return $this->container['transfer_bank_account_id'];
    }

    /**
     * Sets transfer_bank_account_id
     *
     * @param int|null $transfer_bank_account_id transfer_bank_account_id
     *
     * @return self
     */
    public function setTransferBankAccountId($transfer_bank_account_id)
    {
        $this->container['transfer_bank_account_id'] = $transfer_bank_account_id;

        return $this;
    }

    /**
     * Gets bank_account_credit_card_id
     *
     * @return int|null
     */
    public function getBankAccountCreditCardId()
    {
        return $this->container['bank_account_credit_card_id'];
    }

    /**
     * Sets bank_account_credit_card_id
     *
     * @param int|null $bank_account_credit_card_id bank_account_credit_card_id
     *
     * @return self
     */
    public function setBankAccountCreditCardId($bank_account_credit_card_id)
    {
        $this->container['bank_account_credit_card_id'] = $bank_account_credit_card_id;

        return $this;
    }

    /**
     * Gets charge
     *
     * @return float|null
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param float|null $charge charge
     *
     * @return self
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

        return $this;
    }

    /**
     * Gets cheque_date
     *
     * @return \DateTime|null
     */
    public function getChequeDate()
    {
        return $this->container['cheque_date'];
    }

    /**
     * Sets cheque_date
     *
     * @param \DateTime|null $cheque_date cheque_date
     *
     * @return self
     */
    public function setChequeDate($cheque_date)
    {
        $this->container['cheque_date'] = $cheque_date;

        return $this;
    }

    /**
     * Gets cheque_number
     *
     * @return string|null
     */
    public function getChequeNumber()
    {
        return $this->container['cheque_number'];
    }

    /**
     * Sets cheque_number
     *
     * @param string|null $cheque_number cheque_number
     *
     * @return self
     */
    public function setChequeNumber($cheque_number)
    {
        $this->container['cheque_number'] = $cheque_number;

        return $this;
    }

    /**
     * Gets cheque_bank_account_id
     *
     * @return string|null
     */
    public function getChequeBankAccountId()
    {
        return $this->container['cheque_bank_account_id'];
    }

    /**
     * Sets cheque_bank_account_id
     *
     * @param string|null $cheque_bank_account_id cheque_bank_account_id
     *
     * @return self
     */
    public function setChequeBankAccountId($cheque_bank_account_id)
    {
        $this->container['cheque_bank_account_id'] = $cheque_bank_account_id;

        return $this;
    }

    /**
     * Gets credit_card_bank_account_id
     *
     * @return string|null
     */
    public function getCreditCardBankAccountId()
    {
        return $this->container['credit_card_bank_account_id'];
    }

    /**
     * Sets credit_card_bank_account_id
     *
     * @param string|null $credit_card_bank_account_id credit_card_bank_account_id
     *
     * @return self
     */
    public function setCreditCardBankAccountId($credit_card_bank_account_id)
    {
        $this->container['credit_card_bank_account_id'] = $credit_card_bank_account_id;

        return $this;
    }

    /**
     * Gets remaining_collected
     *
     * @return float|null
     */
    public function getRemainingCollected()
    {
        return $this->container['remaining_collected'];
    }

    /**
     * Sets remaining_collected
     *
     * @param float|null $remaining_collected remaining_collected
     *
     * @return self
     */
    public function setRemainingCollected($remaining_collected)
    {
        $this->container['remaining_collected'] = $remaining_collected;

        return $this;
    }

    /**
     * Gets remaining_collected_type
     *
     * @return OneOfRemainingCollectedType|null
     */
    public function getRemainingCollectedType()
    {
        return $this->container['remaining_collected_type'];
    }

    /**
     * Sets remaining_collected_type
     *
     * @param OneOfRemainingCollectedType|null $remaining_collected_type remaining_collected_type
     *
     * @return self
     */
    public function setRemainingCollectedType($remaining_collected_type)
    {
        $this->container['remaining_collected_type'] = $remaining_collected_type;

        return $this;
    }

    /**
     * Gets deduction_amount
     *
     * @return float|null
     */
    public function getDeductionAmount()
    {
        return $this->container['deduction_amount'];
    }

    /**
     * Sets deduction_amount
     *
     * @param float|null $deduction_amount deduction_amount
     *
     * @return self
     */
    public function setDeductionAmount($deduction_amount)
    {
        $this->container['deduction_amount'] = $deduction_amount;

        return $this;
    }

    /**
     * Gets payment_deduction_type
     *
     * @return OneOfDeductionType|null
     */
    public function getPaymentDeductionType()
    {
        return $this->container['payment_deduction_type'];
    }

    /**
     * Sets payment_deduction_type
     *
     * @param OneOfDeductionType|null $payment_deduction_type payment_deduction_type
     *
     * @return self
     */
    public function setPaymentDeductionType($payment_deduction_type)
    {
        $this->container['payment_deduction_type'] = $payment_deduction_type;

        return $this;
    }

    /**
     * Gets petty_cash_name
     *
     * @return string|null
     */
    public function getPettyCashName()
    {
        return $this->container['petty_cash_name'];
    }

    /**
     * Sets petty_cash_name
     *
     * @param string|null $petty_cash_name petty_cash_name
     *
     * @return self
     */
    public function setPettyCashName($petty_cash_name)
    {
        $this->container['petty_cash_name'] = $petty_cash_name;

        return $this;
    }

    /**
     * Gets petty_cash_id
     *
     * @return int|null
     */
    public function getPettyCashId()
    {
        return $this->container['petty_cash_id'];
    }

    /**
     * Sets petty_cash_id
     *
     * @param int|null $petty_cash_id petty_cash_id
     *
     * @return self
     */
    public function setPettyCashId($petty_cash_id)
    {
        $this->container['petty_cash_id'] = $petty_cash_id;

        return $this;
    }

    /**
     * Gets cheque_id
     *
     * @return int|null
     */
    public function getChequeId()
    {
        return $this->container['cheque_id'];
    }

    /**
     * Sets cheque_id
     *
     * @param int|null $cheque_id cheque_id
     *
     * @return self
     */
    public function setChequeId($cheque_id)
    {
        $this->container['cheque_id'] = $cheque_id;

        return $this;
    }

    /**
     * Gets credit_card_id
     *
     * @return int|null
     */
    public function getCreditCardId()
    {
        return $this->container['credit_card_id'];
    }

    /**
     * Sets credit_card_id
     *
     * @param int|null $credit_card_id credit_card_id
     *
     * @return self
     */
    public function setCreditCardId($credit_card_id)
    {
        $this->container['credit_card_id'] = $credit_card_id;

        return $this;
    }

    /**
     * Gets other_channel_id
     *
     * @return int|null
     */
    public function getOtherChannelId()
    {
        return $this->container['other_channel_id'];
    }

    /**
     * Sets other_channel_id
     *
     * @param int|null $other_channel_id other_channel_id
     *
     * @return self
     */
    public function setOtherChannelId($other_channel_id)
    {
        $this->container['other_channel_id'] = $other_channel_id;

        return $this;
    }

    /**
     * Gets cheque_deposit_date
     *
     * @return \DateTime|null
     */
    public function getChequeDepositDate()
    {
        return $this->container['cheque_deposit_date'];
    }

    /**
     * Sets cheque_deposit_date
     *
     * @param \DateTime|null $cheque_deposit_date cheque_deposit_date
     *
     * @return self
     */
    public function setChequeDepositDate($cheque_deposit_date)
    {
        $this->container['cheque_deposit_date'] = $cheque_deposit_date;

        return $this;
    }

    /**
     * Gets cheque_deposit_bank_id
     *
     * @return int|null
     */
    public function getChequeDepositBankId()
    {
        return $this->container['cheque_deposit_bank_id'];
    }

    /**
     * Sets cheque_deposit_bank_id
     *
     * @param int|null $cheque_deposit_bank_id cheque_deposit_bank_id
     *
     * @return self
     */
    public function setChequeDepositBankId($cheque_deposit_bank_id)
    {
        $this->container['cheque_deposit_bank_id'] = $cheque_deposit_bank_id;

        return $this;
    }

    /**
     * Gets cheque_cashing_date
     *
     * @return \DateTime|null
     */
    public function getChequeCashingDate()
    {
        return $this->container['cheque_cashing_date'];
    }

    /**
     * Sets cheque_cashing_date
     *
     * @param \DateTime|null $cheque_cashing_date cheque_cashing_date
     *
     * @return self
     */
    public function setChequeCashingDate($cheque_cashing_date)
    {
        $this->container['cheque_cashing_date'] = $cheque_cashing_date;

        return $this;
    }

    /**
     * Gets auto_create_withholding_tax
     *
     * @return bool|null
     */
    public function getAutoCreateWithholdingTax()
    {
        return $this->container['auto_create_withholding_tax'];
    }

    /**
     * Sets auto_create_withholding_tax
     *
     * @param bool|null $auto_create_withholding_tax auto_create_withholding_tax
     *
     * @return self
     */
    public function setAutoCreateWithholdingTax($auto_create_withholding_tax)
    {
        $this->container['auto_create_withholding_tax'] = $auto_create_withholding_tax;

        return $this;
    }

    /**
     * Gets withholding_tax_income_type
     *
     * @return \OpenAPI\Client\Model\IncomeType|null
     */
    public function getWithholdingTaxIncomeType()
    {
        return $this->container['withholding_tax_income_type'];
    }

    /**
     * Sets withholding_tax_income_type
     *
     * @param \OpenAPI\Client\Model\IncomeType|null $withholding_tax_income_type withholding_tax_income_type
     *
     * @return self
     */
    public function setWithholdingTaxIncomeType($withholding_tax_income_type)
    {
        $this->container['withholding_tax_income_type'] = $withholding_tax_income_type;

        return $this;
    }

    /**
     * Gets withholding_tax_income_description
     *
     * @return string|null
     */
    public function getWithholdingTaxIncomeDescription()
    {
        return $this->container['withholding_tax_income_description'];
    }

    /**
     * Sets withholding_tax_income_description
     *
     * @param string|null $withholding_tax_income_description withholding_tax_income_description
     *
     * @return self
     */
    public function setWithholdingTaxIncomeDescription($withholding_tax_income_description)
    {
        $this->container['withholding_tax_income_description'] = $withholding_tax_income_description;

        return $this;
    }

    /**
     * Gets withholding_tax_entity
     *
     * @return \OpenAPI\Client\Model\Entity|null
     */
    public function getWithholdingTaxEntity()
    {
        return $this->container['withholding_tax_entity'];
    }

    /**
     * Sets withholding_tax_entity
     *
     * @param \OpenAPI\Client\Model\Entity|null $withholding_tax_entity withholding_tax_entity
     *
     * @return self
     */
    public function setWithholdingTaxEntity($withholding_tax_entity)
    {
        $this->container['withholding_tax_entity'] = $withholding_tax_entity;

        return $this;
    }

    /**
     * Gets exchange_rate_fee
     *
     * @return float|null
     */
    public function getExchangeRateFee()
    {
        return $this->container['exchange_rate_fee'];
    }

    /**
     * Sets exchange_rate_fee
     *
     * @param float|null $exchange_rate_fee exchange_rate_fee
     *
     * @return self
     */
    public function setExchangeRateFee($exchange_rate_fee)
    {
        $this->container['exchange_rate_fee'] = $exchange_rate_fee;

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
        return $this->container[$offset] ?? null;
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


