// tslint:disable
/**
 * FlowAccount Business API
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

/**
 * @export
 * @interface Document
 */
export interface Document {
    /**
     * @type {number}
     * @memberof Document
     */
    recordId?: number;
    /**
     * @type {string}
     * @memberof Document
     */
    contactCode?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactName?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactAddress?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactTaxId?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactBranch?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactPerson?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactEmail?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactNumber?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    contactZipCode?: string | null;
    /**
     * @type {number}
     * @memberof Document
     */
    contactGroup?: number;
    /**
     * @type {string}
     * @memberof Document
     */
    publishedOn?: string;
    /**
     * @type {number}
     * @memberof Document
     */
    creditType?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    creditDays?: number;
    /**
     * @type {string}
     * @memberof Document
     */
    dueDate?: string;
    /**
     * @type {string}
     * @memberof Document
     */
    salesName?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    projectName?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    reference?: string | null;
    /**
     * @type {boolean}
     * @memberof Document
     */
    isVatInclusive?: boolean;
    /**
     * @type {boolean}
     * @memberof Document
     */
    useReceiptDeduction?: boolean;
    /**
     * @type {number}
     * @memberof Document
     */
    subTotal?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    discountPercentage?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    discountAmount?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    totalAfterDiscount?: number;
    /**
     * @type {boolean}
     * @memberof Document
     */
    isVat?: boolean;
    /**
     * @type {number}
     * @memberof Document
     */
    vatAmount?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    grandTotal?: number;
    /**
     * @type {boolean}
     * @memberof Document
     */
    documentShowWithholdingTax?: boolean;
    /**
     * @type {number}
     * @memberof Document
     */
    documentWithholdingTaxPercentage?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    documentWithholdingTaxAmount?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    documentDeductionType?: number;
    /**
     * @type {number}
     * @memberof Document
     */
    documentDeductionAmount?: number;
    /**
     * @type {string}
     * @memberof Document
     */
    remarks?: string | null;
    /**
     * @type {string}
     * @memberof Document
     */
    internalNotes?: string | null;
    /**
     * @type {boolean}
     * @memberof Document
     */
    showSignatureOrStamp?: boolean;
    /**
     * @type {string}
     * @memberof Document
     */
    documentStructureType?: string | null;
}
