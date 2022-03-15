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

import {
    BankAccountType,
    Company,
    Gallery,
    PaidPeriod,
    PayrollDetail,
    PayrollStatus,
    RuleCompileStatus,
    User,
} from './';

/**
 * @export
 * @interface Payroll
 */
export interface Payroll {
    /**
     * @type {number}
     * @memberof Payroll
     */
    id?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    companyId?: number;
    /**
     * @type {string}
     * @memberof Payroll
     */
    startDate?: string;
    /**
     * @type {string}
     * @memberof Payroll
     */
    endDate?: string;
    /**
     * @type {number}
     * @memberof Payroll
     */
    paymentCycle?: number;
    /**
     * @type {PayrollStatus}
     * @memberof Payroll
     */
    status?: PayrollStatus;
    /**
     * @type {boolean}
     * @memberof Payroll
     */
    isDelete?: boolean;
    /**
     * @type {string}
     * @memberof Payroll
     */
    createdOn?: string;
    /**
     * @type {string}
     * @memberof Payroll
     */
    modifiedOn?: string;
    /**
     * @type {number}
     * @memberof Payroll
     */
    createdBy?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    modifiedBy?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    expenseId?: number | null;
    /**
     * @type {number}
     * @memberof Payroll
     */
    galleryId?: number | null;
    /**
     * @type {string}
     * @memberof Payroll
     */
    remarks?: string | null;
    /**
     * @type {number}
     * @memberof Payroll
     */
    total?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    bankId?: number | null;
    /**
     * @type {string}
     * @memberof Payroll
     */
    accountNumber?: string | null;
    /**
     * @type {number}
     * @memberof Payroll
     */
    addAmount?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    deductAmount?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    netTotal?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    runningNumberType?: number;
    /**
     * @type {string}
     * @memberof Payroll
     */
    datePayment?: string | null;
    /**
     * @type {string}
     * @memberof Payroll
     */
    documentDate?: string;
    /**
     * @type {number}
     * @memberof Payroll
     */
    totalPayrollCash?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    totalPayrollTransfer?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    fee?: number;
    /**
     * @type {string}
     * @memberof Payroll
     */
    paymentRemarks?: string | null;
    /**
     * @type {string}
     * @memberof Payroll
     */
    employerAccountNumber?: string | null;
    /**
     * @type {string}
     * @memberof Payroll
     */
    employerAccountBranch?: string | null;
    /**
     * @type {number}
     * @memberof Payroll
     */
    bankAccountId?: number | null;
    /**
     * @type {BankAccountType}
     * @memberof Payroll
     */
    accountType?: BankAccountType | null;
    /**
     * @type {string}
     * @memberof Payroll
     */
    referenceId?: string | null;
    /**
     * @type {number}
     * @memberof Payroll
     */
    payrollVersion?: number;
    /**
     * @type {Company}
     * @memberof Payroll
     */
    company?: Company | null;
    /**
     * @type {User}
     * @memberof Payroll
     */
    createdByUser?: User | null;
    /**
     * @type {User}
     * @memberof Payroll
     */
    modifiedByUser?: User | null;
    /**
     * @type {Array<PayrollDetail>}
     * @memberof Payroll
     */
    payrollDetail?: Array<PayrollDetail> | null;
    /**
     * @type {Gallery}
     * @memberof Payroll
     */
    gallery?: Gallery | null;
    /**
     * @type {boolean}
     * @memberof Payroll
     */
    isMigrate?: boolean;
    /**
     * @type {RuleCompileStatus}
     * @memberof Payroll
     */
    ruleCompileStatus?: RuleCompileStatus;
    /**
     * @type {boolean}
     * @memberof Payroll
     */
    isPartialPayments?: boolean;
    /**
     * @type {PaidPeriod}
     * @memberof Payroll
     */
    paidPeriod?: PaidPeriod | null;
    /**
     * @type {number}
     * @memberof Payroll
     */
    socialSecurityPercent?: number;
    /**
     * @type {number}
     * @memberof Payroll
     */
    statusInt?: number;
}