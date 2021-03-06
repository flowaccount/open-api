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
 * @interface ProductItem
 */
export interface ProductItem {
    /**
     * @type {number}
     * @memberof ProductItem
     */
    type?: number;
    /**
     * @type {string}
     * @memberof ProductItem
     */
    name?: string | null;
    /**
     * @type {string}
     * @memberof ProductItem
     */
    description?: string | null;
    /**
     * @type {number}
     * @memberof ProductItem
     */
    quantity?: number;
    /**
     * @type {string}
     * @memberof ProductItem
     */
    unitName?: string | null;
    /**
     * @type {number}
     * @memberof ProductItem
     */
    pricePerUnit?: number;
    /**
     * @type {number}
     * @memberof ProductItem
     */
    total?: number;
    /**
     * @type {string}
     * @memberof ProductItem
     */
    sellChartOfAccountCode?: string | null;
    /**
     * @type {string}
     * @memberof ProductItem
     */
    buyChartOfAccountCode?: string | null;
}
