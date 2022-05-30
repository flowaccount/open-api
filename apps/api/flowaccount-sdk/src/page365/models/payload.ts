import { PayloadBody } from './payload-body';

export interface Payload {
    key?: string,
    merchantToken?: string;
    body: PayloadBody
}