import { Payload } from '../src/models/payload';
import { CashInvoiceService } from "./cashInvoiceService"
import { inject, injectable, registry } from "tsyringe"
import * as Ajv from 'ajv'
import { payloadSchema } from '../src/schema/payload-schema';

@injectable()
@registry([
    {
        token: 'cashInvoiceService',
        useClass: CashInvoiceService
    }
])
export class WebhookService {

    constructor(@inject('cashInvoiceService') private cashInvoice: CashInvoiceService) {
    }

    public async inboundPayload(data: any) {

        const ajv = new Ajv()
        const payload = data as Payload
        const validate = ajv.compile(payloadSchema)
        const valid = validate(payload)

        if (!valid) {
            console.log(validate.errors)
        } else {
            const result = await this.cashInvoice.create(payload)
            console.log(result);
        }
    }
}