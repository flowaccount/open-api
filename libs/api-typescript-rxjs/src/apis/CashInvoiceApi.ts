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

import { Observable } from 'rxjs';
import { BaseAPI, HttpHeaders, HttpQuery, throwIfNullOrUndefined, encodeURI, OperationOpts, RawAjaxResponse } from '../runtime';
import {
    BatchImportMetadata,
    BatchImportPayload,
    BatchMessageSent,
    BatchStatus,
    InlineDocument,
    PaymentModel,
} from '../models';

export interface CashInvoiceActorCreateCashInvoiceRequest {
    culture: string;
    batchImportPayload: BatchImportPayload;
}

export interface CashInvoiceActorCreateCashInvoiceInlineRequest {
    culture: string;
    inlineDocument: Array<InlineDocument>;
    batchId?: string | null;
}

export interface CashInvoiceActorQueryBatchRequest {
    culture: string;
    body: string;
}

export interface CashInvoiceChangeStatusByKeyRequest {
    documentId: number;
    statusKey: string | null;
    culture: string;
}

export interface CashInvoiceDetailsRequest {
    id: number;
    culture: string;
}

export interface CashInvoiceGenerateBacthIdMetadataRequest {
    culture: string;
    fileName?: string | null;
}

export interface CashInvoiceIndexRequest {
    culture: string;
    sortBy?: string | null;
    currentPage?: string | null;
    pageSize?: string | null;
    filter?: string | null;
    searchString?: string | null;
    customDocumentModels?: string | null;
    range?: string | null;
    month?: string | null;
    year?: string | null;
    startDate?: string | null;
    endDate?: string | null;
}

export interface CashInvoiceReceivePaymentRequest {
    id: number;
    culture: string;
    paymentModel: PaymentModel;
}

/**
 * no description
 */
export class CashInvoiceApi extends BaseAPI {

    /**
     */
    cashInvoiceActorCreateCashInvoice({ culture, batchImportPayload }: CashInvoiceActorCreateCashInvoiceRequest): Observable<BatchMessageSent>
    cashInvoiceActorCreateCashInvoice({ culture, batchImportPayload }: CashInvoiceActorCreateCashInvoiceRequest, opts?: OperationOpts): Observable<RawAjaxResponse<BatchMessageSent>>
    cashInvoiceActorCreateCashInvoice({ culture, batchImportPayload }: CashInvoiceActorCreateCashInvoiceRequest, opts?: OperationOpts): Observable<BatchMessageSent | RawAjaxResponse<BatchMessageSent>> {
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceActorCreateCashInvoice');
        throwIfNullOrUndefined(batchImportPayload, 'batchImportPayload', 'cashInvoiceActorCreateCashInvoice');

        const headers: HttpHeaders = {
            'Content-Type': 'application/json',
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        return this.request<BatchMessageSent>({
            url: '/{culture}/cash-invoices/simple-document'.replace('{culture}', encodeURI(culture)),
            method: 'POST',
            headers,
            body: batchImportPayload,
        }, opts?.responseOpts);
    };

    /**
     */
    cashInvoiceActorCreateCashInvoiceInline({ culture, inlineDocument, batchId }: CashInvoiceActorCreateCashInvoiceInlineRequest): Observable<BatchMessageSent>
    cashInvoiceActorCreateCashInvoiceInline({ culture, inlineDocument, batchId }: CashInvoiceActorCreateCashInvoiceInlineRequest, opts?: OperationOpts): Observable<RawAjaxResponse<BatchMessageSent>>
    cashInvoiceActorCreateCashInvoiceInline({ culture, inlineDocument, batchId }: CashInvoiceActorCreateCashInvoiceInlineRequest, opts?: OperationOpts): Observable<BatchMessageSent | RawAjaxResponse<BatchMessageSent>> {
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceActorCreateCashInvoiceInline');
        throwIfNullOrUndefined(inlineDocument, 'inlineDocument', 'cashInvoiceActorCreateCashInvoiceInline');

        const headers: HttpHeaders = {
            'Content-Type': 'application/json',
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        const query: HttpQuery = {};

        if (batchId != null) { query['batchId'] = batchId; }

        return this.request<BatchMessageSent>({
            url: '/{culture}/cash-invoices/inline-document'.replace('{culture}', encodeURI(culture)),
            method: 'POST',
            headers,
            query,
            body: inlineDocument,
        }, opts?.responseOpts);
    };

    /**
     */
    cashInvoiceActorQueryBatch({ culture, body }: CashInvoiceActorQueryBatchRequest): Observable<BatchStatus>
    cashInvoiceActorQueryBatch({ culture, body }: CashInvoiceActorQueryBatchRequest, opts?: OperationOpts): Observable<RawAjaxResponse<BatchStatus>>
    cashInvoiceActorQueryBatch({ culture, body }: CashInvoiceActorQueryBatchRequest, opts?: OperationOpts): Observable<BatchStatus | RawAjaxResponse<BatchStatus>> {
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceActorQueryBatch');
        throwIfNullOrUndefined(body, 'body', 'cashInvoiceActorQueryBatch');

        const headers: HttpHeaders = {
            'Content-Type': 'application/json',
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        return this.request<BatchStatus>({
            url: '/{culture}/cash-invoices/batch-progress-report'.replace('{culture}', encodeURI(culture)),
            method: 'POST',
            headers,
            body: body as any,
        }, opts?.responseOpts);
    };

    /**
     */
    cashInvoiceChangeStatusByKey({ documentId, statusKey, culture }: CashInvoiceChangeStatusByKeyRequest): Observable<Blob>
    cashInvoiceChangeStatusByKey({ documentId, statusKey, culture }: CashInvoiceChangeStatusByKeyRequest, opts?: OperationOpts): Observable<RawAjaxResponse<Blob>>
    cashInvoiceChangeStatusByKey({ documentId, statusKey, culture }: CashInvoiceChangeStatusByKeyRequest, opts?: OperationOpts): Observable<Blob | RawAjaxResponse<Blob>> {
        throwIfNullOrUndefined(documentId, 'documentId', 'cashInvoiceChangeStatusByKey');
        throwIfNullOrUndefined(statusKey, 'statusKey', 'cashInvoiceChangeStatusByKey');
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceChangeStatusByKey');

        const headers: HttpHeaders = {
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        return this.request<Blob>({
            url: '/{culture}/cash-invoices/{documentId}/status-key/{statusKey}'.replace('{documentId}', encodeURI(documentId)).replace('{statusKey}', encodeURI(statusKey)).replace('{culture}', encodeURI(culture)),
            method: 'POST',
            headers,
            responseType: 'blob',
        }, opts?.responseOpts);
    };

    /**
     */
    cashInvoiceDetails({ id, culture }: CashInvoiceDetailsRequest): Observable<Blob>
    cashInvoiceDetails({ id, culture }: CashInvoiceDetailsRequest, opts?: OperationOpts): Observable<RawAjaxResponse<Blob>>
    cashInvoiceDetails({ id, culture }: CashInvoiceDetailsRequest, opts?: OperationOpts): Observable<Blob | RawAjaxResponse<Blob>> {
        throwIfNullOrUndefined(id, 'id', 'cashInvoiceDetails');
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceDetails');

        const headers: HttpHeaders = {
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        return this.request<Blob>({
            url: '/{culture}/cash-invoices/{id}'.replace('{id}', encodeURI(id)).replace('{culture}', encodeURI(culture)),
            method: 'GET',
            headers,
            responseType: 'blob',
        }, opts?.responseOpts);
    };

    /**
     */
    cashInvoiceGenerateBacthIdMetadata({ culture, fileName }: CashInvoiceGenerateBacthIdMetadataRequest): Observable<BatchImportMetadata>
    cashInvoiceGenerateBacthIdMetadata({ culture, fileName }: CashInvoiceGenerateBacthIdMetadataRequest, opts?: OperationOpts): Observable<RawAjaxResponse<BatchImportMetadata>>
    cashInvoiceGenerateBacthIdMetadata({ culture, fileName }: CashInvoiceGenerateBacthIdMetadataRequest, opts?: OperationOpts): Observable<BatchImportMetadata | RawAjaxResponse<BatchImportMetadata>> {
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceGenerateBacthIdMetadata');

        const headers: HttpHeaders = {
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        const query: HttpQuery = {};

        if (fileName != null) { query['fileName'] = fileName; }

        return this.request<BatchImportMetadata>({
            url: '/{culture}/cash-invoices/batch-metadata'.replace('{culture}', encodeURI(culture)),
            method: 'GET',
            headers,
            query,
        }, opts?.responseOpts);
    };

    /**
     */
    cashInvoiceIndex({ culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate }: CashInvoiceIndexRequest): Observable<Blob>
    cashInvoiceIndex({ culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate }: CashInvoiceIndexRequest, opts?: OperationOpts): Observable<RawAjaxResponse<Blob>>
    cashInvoiceIndex({ culture, sortBy, currentPage, pageSize, filter, searchString, customDocumentModels, range, month, year, startDate, endDate }: CashInvoiceIndexRequest, opts?: OperationOpts): Observable<Blob | RawAjaxResponse<Blob>> {
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceIndex');

        const headers: HttpHeaders = {
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        const query: HttpQuery = {};

        if (sortBy != null) { query['SortBy'] = sortBy; }
        if (currentPage != null) { query['CurrentPage'] = currentPage; }
        if (pageSize != null) { query['PageSize'] = pageSize; }
        if (filter != null) { query['Filter'] = filter; }
        if (searchString != null) { query['SearchString'] = searchString; }
        if (customDocumentModels != null) { query['CustomDocumentModels'] = customDocumentModels; }
        if (range != null) { query['Range'] = range; }
        if (month != null) { query['Month'] = month; }
        if (year != null) { query['Year'] = year; }
        if (startDate != null) { query['StartDate'] = startDate; }
        if (endDate != null) { query['EndDate'] = endDate; }

        return this.request<Blob>({
            url: '/{culture}/cash-invoices'.replace('{culture}', encodeURI(culture)),
            method: 'GET',
            headers,
            query,
            responseType: 'blob',
        }, opts?.responseOpts);
    };

    /**
     */
    cashInvoiceReceivePayment({ id, culture, paymentModel }: CashInvoiceReceivePaymentRequest): Observable<Blob>
    cashInvoiceReceivePayment({ id, culture, paymentModel }: CashInvoiceReceivePaymentRequest, opts?: OperationOpts): Observable<RawAjaxResponse<Blob>>
    cashInvoiceReceivePayment({ id, culture, paymentModel }: CashInvoiceReceivePaymentRequest, opts?: OperationOpts): Observable<Blob | RawAjaxResponse<Blob>> {
        throwIfNullOrUndefined(id, 'id', 'cashInvoiceReceivePayment');
        throwIfNullOrUndefined(culture, 'culture', 'cashInvoiceReceivePayment');
        throwIfNullOrUndefined(paymentModel, 'paymentModel', 'cashInvoiceReceivePayment');

        const headers: HttpHeaders = {
            'Content-Type': 'application/json',
            ...(this.configuration.username != null && this.configuration.password != null ? { Authorization: `Basic ${btoa(this.configuration.username + ':' + this.configuration.password)}` } : undefined),
        };

        return this.request<Blob>({
            url: '/{culture}/cash-invoices/{id}/payments'.replace('{id}', encodeURI(id)).replace('{culture}', encodeURI(culture)),
            method: 'POST',
            headers,
            body: paymentModel,
            responseType: 'blob',
        }, opts?.responseOpts);
    };

}