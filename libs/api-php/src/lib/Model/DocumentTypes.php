<?php
/**
 * DocumentTypes
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * DocumentTypes Class Doc Comment
 *
 * @category Class
 * @description 1 &#x3D; PurchaseOrder 3 &#x3D; Quotation 5 &#x3D; BillingNote 7 &#x3D; TaxInvoice 9 &#x3D; Receipt 13 &#x3D; Expense 15 &#x3D; Vendor 17 &#x3D; WithHoldingTax 19 &#x3D; BillingNotePartials 21 &#x3D; TaxInvoicePartails 23 &#x3D; Purchase 24 &#x3D; PurchaseTax 25 &#x3D; ReceivableInvoice 29 &#x3D; AdjustInventory 31 &#x3D; CreditNote 33 &#x3D; DebitNote 35 &#x3D; CashInvoice 37 &#x3D; PaymentSlip 51 &#x3D; JournalEntry 53 &#x3D; PurchaseVoucher 55 &#x3D; SalesVoucher 57 &#x3D; PaymentVoucher 59 &#x3D; ReceivedVoucher 61 &#x3D; ConversionBalance 63 &#x3D; Transaction 65 &#x3D; SupplierInvoice 67 &#x3D; BatchTaxFiling 69 &#x3D; FixedAsset 71 &#x3D; Depreciation 73 &#x3D; BankTransfer 151 &#x3D; DraftJournalEntry 153 &#x3D; DraftPurchaseVoucher 155 &#x3D; DraftSalesVoucher 157 &#x3D; DraftPaymentVoucher 159 &#x3D; DraftReceivedVoucher 201 &#x3D; Payroll 202 &#x3D; PayrollDetail 203 &#x3D; Employee 204 &#x3D; PayrollPayment
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentTypes
{
    /**
     * Possible values of this enum
     */
    const NUMBER_1 = 1;

    const NUMBER_3 = 3;

    const NUMBER_5 = 5;

    const NUMBER_7 = 7;

    const NUMBER_9 = 9;

    const NUMBER_13 = 13;

    const NUMBER_15 = 15;

    const NUMBER_17 = 17;

    const NUMBER_19 = 19;

    const NUMBER_21 = 21;

    const NUMBER_23 = 23;

    const NUMBER_24 = 24;

    const NUMBER_25 = 25;

    const NUMBER_29 = 29;

    const NUMBER_31 = 31;

    const NUMBER_33 = 33;

    const NUMBER_35 = 35;

    const NUMBER_37 = 37;

    const NUMBER_51 = 51;

    const NUMBER_53 = 53;

    const NUMBER_55 = 55;

    const NUMBER_57 = 57;

    const NUMBER_59 = 59;

    const NUMBER_61 = 61;

    const NUMBER_63 = 63;

    const NUMBER_65 = 65;

    const NUMBER_67 = 67;

    const NUMBER_69 = 69;

    const NUMBER_71 = 71;

    const NUMBER_73 = 73;

    const NUMBER_151 = 151;

    const NUMBER_153 = 153;

    const NUMBER_155 = 155;

    const NUMBER_157 = 157;

    const NUMBER_159 = 159;

    const NUMBER_201 = 201;

    const NUMBER_202 = 202;

    const NUMBER_203 = 203;

    const NUMBER_204 = 204;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_1,
            self::NUMBER_3,
            self::NUMBER_5,
            self::NUMBER_7,
            self::NUMBER_9,
            self::NUMBER_13,
            self::NUMBER_15,
            self::NUMBER_17,
            self::NUMBER_19,
            self::NUMBER_21,
            self::NUMBER_23,
            self::NUMBER_24,
            self::NUMBER_25,
            self::NUMBER_29,
            self::NUMBER_31,
            self::NUMBER_33,
            self::NUMBER_35,
            self::NUMBER_37,
            self::NUMBER_51,
            self::NUMBER_53,
            self::NUMBER_55,
            self::NUMBER_57,
            self::NUMBER_59,
            self::NUMBER_61,
            self::NUMBER_63,
            self::NUMBER_65,
            self::NUMBER_67,
            self::NUMBER_69,
            self::NUMBER_71,
            self::NUMBER_73,
            self::NUMBER_151,
            self::NUMBER_153,
            self::NUMBER_155,
            self::NUMBER_157,
            self::NUMBER_159,
            self::NUMBER_201,
            self::NUMBER_202,
            self::NUMBER_203,
            self::NUMBER_204
        ];
    }
}


