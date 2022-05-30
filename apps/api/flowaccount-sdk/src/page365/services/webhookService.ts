import { Payload } from '../models/payload';
import { CashInvoiceService } from "../../cashInvoiceService"
import { MappingPayloadService } from "../services/mappingPayloadService"
import { inject, injectable, registry } from "tsyringe"

@injectable()
@registry([
    {
        token: 'cashInvoiceService',
        useClass: CashInvoiceService
    }
])
export class WebhookService {

    constructor(
        @inject('cashInvoiceService') private cashInvoice: CashInvoiceService,
        private mappingPayload: MappingPayloadService
    ) {
    }

    public async inboundPayload(data: any) {
        const payload = data as Payload
        const mappingpayload = await this.mappingPayload.mappingPayload(payload.body)
        const result = await this.cashInvoice.createCashInvoice(mappingpayload)
    }

    public testFunc(test: string) {
        return "ok"
    }
}