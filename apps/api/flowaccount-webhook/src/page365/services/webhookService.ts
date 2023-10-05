import "reflect-metadata"
import { Payload } from '../models/payload';
import { CashInvoiceService } from "../../cashInvoiceService"
import { MappingPayloadService } from "../services/mappingPayloadService"
import { inject, injectable, registry } from "tsyringe"

@injectable()
@registry([
    {
        token: 'cashInvoiceService',
        useClass: CashInvoiceService
    },
    {
        token: 'mappingPayloadService',
        useClass: MappingPayloadService
    }
])
export class WebhookService {

    constructor(
        @inject('cashInvoiceService') private cashInvoice: CashInvoiceService,
        @inject('mappingPayloadService') private mapPayload: MappingPayloadService,
        private map: MappingPayloadService
    ) {
    }

    public async inboundPayload(data: any): Promise<boolean> {
        return new Promise(async (resolve) => {
            const payload = data as Payload
            const mappingpayload = await this.mapPayload.mappingPayload(payload.body)
            const result = await this.cashInvoice.createCashInvoice(mappingpayload)
            resolve(result)
        })
      
    }
}