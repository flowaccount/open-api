<?php
/**
 * CreditCard
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
 * CreditCard Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreditCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreditCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'company_id' => 'int',
        'chart_of_account_id' => 'int',
        'chart_of_account' => 'OneOfChartOfAccount',
        'bank_id' => 'int',
        'bank' => 'OneOfBank',
        'bank_name' => 'string',
        'type' => '\OpenAPI\Client\Model\CreditCardType',
        'card_number' => 'string',
        'card_holder_name' => 'string',
        'card_name' => 'string',
        'cash_limit' => 'float',
        'statement_date' => 'int',
        'due_date' => 'int',
        'status' => '\OpenAPI\Client\Model\BankingChannelsStatus',
        'is_delete' => 'bool',
        'created_on' => '\DateTime',
        'modified_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'company_id' => 'int64',
        'chart_of_account_id' => 'int64',
        'chart_of_account' => null,
        'bank_id' => 'int32',
        'bank' => null,
        'bank_name' => null,
        'type' => null,
        'card_number' => null,
        'card_holder_name' => null,
        'card_name' => null,
        'cash_limit' => 'decimal',
        'statement_date' => 'int32',
        'due_date' => 'int32',
        'status' => null,
        'is_delete' => null,
        'created_on' => 'date-time',
        'modified_on' => 'date-time'
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
        'id' => 'id',
        'company_id' => 'companyId',
        'chart_of_account_id' => 'chartOfAccountId',
        'chart_of_account' => 'chartOfAccount',
        'bank_id' => 'bankId',
        'bank' => 'bank',
        'bank_name' => 'bankName',
        'type' => 'type',
        'card_number' => 'cardNumber',
        'card_holder_name' => 'cardHolderName',
        'card_name' => 'cardName',
        'cash_limit' => 'cashLimit',
        'statement_date' => 'statementDate',
        'due_date' => 'dueDate',
        'status' => 'status',
        'is_delete' => 'isDelete',
        'created_on' => 'createdOn',
        'modified_on' => 'modifiedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'chart_of_account_id' => 'setChartOfAccountId',
        'chart_of_account' => 'setChartOfAccount',
        'bank_id' => 'setBankId',
        'bank' => 'setBank',
        'bank_name' => 'setBankName',
        'type' => 'setType',
        'card_number' => 'setCardNumber',
        'card_holder_name' => 'setCardHolderName',
        'card_name' => 'setCardName',
        'cash_limit' => 'setCashLimit',
        'statement_date' => 'setStatementDate',
        'due_date' => 'setDueDate',
        'status' => 'setStatus',
        'is_delete' => 'setIsDelete',
        'created_on' => 'setCreatedOn',
        'modified_on' => 'setModifiedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'chart_of_account_id' => 'getChartOfAccountId',
        'chart_of_account' => 'getChartOfAccount',
        'bank_id' => 'getBankId',
        'bank' => 'getBank',
        'bank_name' => 'getBankName',
        'type' => 'getType',
        'card_number' => 'getCardNumber',
        'card_holder_name' => 'getCardHolderName',
        'card_name' => 'getCardName',
        'cash_limit' => 'getCashLimit',
        'statement_date' => 'getStatementDate',
        'due_date' => 'getDueDate',
        'status' => 'getStatus',
        'is_delete' => 'getIsDelete',
        'created_on' => 'getCreatedOn',
        'modified_on' => 'getModifiedOn'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['chart_of_account_id'] = $data['chart_of_account_id'] ?? null;
        $this->container['chart_of_account'] = $data['chart_of_account'] ?? null;
        $this->container['bank_id'] = $data['bank_id'] ?? null;
        $this->container['bank'] = $data['bank'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['card_number'] = $data['card_number'] ?? null;
        $this->container['card_holder_name'] = $data['card_holder_name'] ?? null;
        $this->container['card_name'] = $data['card_name'] ?? null;
        $this->container['cash_limit'] = $data['cash_limit'] ?? null;
        $this->container['statement_date'] = $data['statement_date'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['is_delete'] = $data['is_delete'] ?? false;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['modified_on'] = $data['modified_on'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets chart_of_account_id
     *
     * @return int|null
     */
    public function getChartOfAccountId()
    {
        return $this->container['chart_of_account_id'];
    }

    /**
     * Sets chart_of_account_id
     *
     * @param int|null $chart_of_account_id chart_of_account_id
     *
     * @return self
     */
    public function setChartOfAccountId($chart_of_account_id)
    {
        $this->container['chart_of_account_id'] = $chart_of_account_id;

        return $this;
    }

    /**
     * Gets chart_of_account
     *
     * @return OneOfChartOfAccount|null
     */
    public function getChartOfAccount()
    {
        return $this->container['chart_of_account'];
    }

    /**
     * Sets chart_of_account
     *
     * @param OneOfChartOfAccount|null $chart_of_account chart_of_account
     *
     * @return self
     */
    public function setChartOfAccount($chart_of_account)
    {
        $this->container['chart_of_account'] = $chart_of_account;

        return $this;
    }

    /**
     * Gets bank_id
     *
     * @return int|null
     */
    public function getBankId()
    {
        return $this->container['bank_id'];
    }

    /**
     * Sets bank_id
     *
     * @param int|null $bank_id bank_id
     *
     * @return self
     */
    public function setBankId($bank_id)
    {
        $this->container['bank_id'] = $bank_id;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return OneOfBank|null
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param OneOfBank|null $bank bank
     *
     * @return self
     */
    public function setBank($bank)
    {
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name bank_name
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\CreditCardType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\CreditCardType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number card_number
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_holder_name
     *
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string|null $card_holder_name card_holder_name
     *
     * @return self
     */
    public function setCardHolderName($card_holder_name)
    {
        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }

    /**
     * Gets card_name
     *
     * @return string|null
     */
    public function getCardName()
    {
        return $this->container['card_name'];
    }

    /**
     * Sets card_name
     *
     * @param string|null $card_name card_name
     *
     * @return self
     */
    public function setCardName($card_name)
    {
        $this->container['card_name'] = $card_name;

        return $this;
    }

    /**
     * Gets cash_limit
     *
     * @return float|null
     */
    public function getCashLimit()
    {
        return $this->container['cash_limit'];
    }

    /**
     * Sets cash_limit
     *
     * @param float|null $cash_limit cash_limit
     *
     * @return self
     */
    public function setCashLimit($cash_limit)
    {
        $this->container['cash_limit'] = $cash_limit;

        return $this;
    }

    /**
     * Gets statement_date
     *
     * @return int|null
     */
    public function getStatementDate()
    {
        return $this->container['statement_date'];
    }

    /**
     * Sets statement_date
     *
     * @param int|null $statement_date statement_date
     *
     * @return self
     */
    public function setStatementDate($statement_date)
    {
        $this->container['statement_date'] = $statement_date;

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
     * @param int|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\BankingChannelsStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\BankingChannelsStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets is_delete
     *
     * @return bool|null
     */
    public function getIsDelete()
    {
        return $this->container['is_delete'];
    }

    /**
     * Sets is_delete
     *
     * @param bool|null $is_delete is_delete
     *
     * @return self
     */
    public function setIsDelete($is_delete)
    {
        $this->container['is_delete'] = $is_delete;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime|null $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets modified_on
     *
     * @return \DateTime|null
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     *
     * @param \DateTime|null $modified_on modified_on
     *
     * @return self
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

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


