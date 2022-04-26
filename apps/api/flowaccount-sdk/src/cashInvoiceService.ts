import { CashInvoiceApi, ProductItem, SimpleDocument } from "@flowaccount/openapi-sdk"
import moment = require("moment")
import { inject, injectable, registry } from "tsyringe"
import { AuthenticationService } from "./authenticationService"
import { PayloadBody } from '../src/models/payload-body';

@injectable()
@registry([
    {
        token: 'cashInvoiceApi',
        useFactory: () => new CashInvoiceApi(process.env.FLOWACCOUNT_API_ENDPOINT),
    },
    {
        token: 'authenticationService',
        useClass: AuthenticationService
    }
])
export class CashInvoiceService {


    constructor(@inject('authenticationService') private authenticationService: AuthenticationService, @inject('cashInvoiceApi') private cashInvoiceApi: CashInvoiceApi) {
    }
    /**
     * create document
     */
    public async create(payloadbody: PayloadBody): Promise<boolean> {

        console.log(payloadbody.stage);
        
        if (payloadbody.stage == "shipped") {

            const accessToken = await this.authenticationService.getAccessToken()
            if (!accessToken) {
                console.log("access token is null.")
                return Promise.resolve(false)
            }

            // items
            const payloadbodyitems = payloadbody.items
            const items = []
    
            for (var i in payloadbodyitems) {
                const item = new ProductItem()
                item.name = payloadbodyitems[i].name
                item.description = payloadbodyitems[i].note
                item.quantity = payloadbodyitems[i].quantity
                item.pricePerUnit = payloadbodyitems[i].price
                item.total = payloadbodyitems[i].subtotal
                items.push(item)
            }

            if (payloadbody.shippingCost && payloadbody.shippingCost > 0) {
                const item = new ProductItem()
                item.name = "shippingCost"
                item.description = "shipping cost"
                item.quantity = 1
                item.pricePerUnit = payloadbody.shippingCost
                item.total = 0
                items.push(item)
            }
            
            // item
            // const item = new ProductItem()
            // item.name = "item name"
            // item.quantity = 1
            // item.pricePerUnit = 100
            // item.total = 100

            // document
            const model = new SimpleDocument()
            model.contactName = payloadbody.customerName
            model.contactAddress = this.getAddress(payloadbody.customerAddress)
            model.contactTaxId = payloadbody.taxInvoiceNo
            model.contactEmail = payloadbody.customerEmail
            model.contactNumber = payloadbody.customerPhone
            model.contactZipCode = this.getZipcode(payloadbody.customerAddress)
            model.publishedOn = payloadbody.createdAt.toString()
            model.dueDate = moment(payloadbody.expriesOn).format("YYYY-MM-DD")
            model.isVatInclusive = payloadbody.vatIncluded
            model.isVat = payloadbody.vatIncluded
            model.vatAmount = payloadbody.vat
            model.subTotal = payloadbody.subtotal
            model.totalAfterDiscount = payloadbody.total
            model.discountAmount = payloadbody.discount
            model.grandTotal = payloadbody.paidAmount
            model.internalNotes = payloadbody.note
            // model.documentStructureType = "InlineDocument"
            model.items = items


            // post create cash invoice
            return new Promise((resolve) => {
                this.cashInvoiceApi
                    .cashInvoicesPost("Bearer " + accessToken, model)
                    .then((response) => {
                        if (response && response.body && response.body.status === true) {
                            console.log("createCashInvoice -> success.")
                            resolve(true)
                        } else {
                            console.log("createCashInvoice -> response failed: ", response.body)
                            resolve(false)
                        }
                    })
                    .catch((reason) => {
                        console.log("createCashInvoice -> error: ", reason)
                        resolve(false)
                    })
            })
        }
    }

    private getAddress(address: any): string {
        return address.slice(0, -6)
    }

    private getZipcode(address: any): string {
        const zipcode = address.slice(-5)
        const isvalidzip = /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(zipcode)
        
        if (isvalidzip) {
            return zipcode
        }
        else {
            return null
        }
    }
}