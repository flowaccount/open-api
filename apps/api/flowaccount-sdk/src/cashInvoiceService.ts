import { CashInvoiceApi, ProductItem, SimpleDocument } from "@flowaccount/openapi-sdk"
import moment = require("moment")
import { inject, injectable, registry } from "tsyringe"
import { AuthenticationService } from "./authenticationService"

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
    public async create(datapayload): Promise<boolean> {

        const accessToken = await this.authenticationService.getAccessToken()
        if (!accessToken) {
            console.log("access token is null.")
            return Promise.resolve(false)
        }
        
        const payloaditems = datapayload.body.items
        const items = []

        for (var i in payloaditems) {
            const item = new ProductItem()
            item.name = payloaditems[i].name
            item.quantity = payloaditems[i].quantity
            item.pricePerUnit = payloaditems[i].price
            item.total = payloaditems[i].subtotal

            items.push(item)
        }
        
        // item
        // const item = new ProductItem()
        // item.name = "item name"
        // item.quantity = 1
        // item.pricePerUnit = 100
        // item.total = 100

        const datamodel = datapayload.body
        // document
        const model = new SimpleDocument()
        model.contactName = datamodel.customerName
        model.publishedOn = moment(new Date()).format("YYYY-MM-DD")
        model.dueDate = moment(new Date()).format("YYYY-MM-DD")
        model.items = items
        model.subTotal = datamodel.subtotal
        model.totalAfterDiscount = datamodel.total
        model.isVat = datamodel.vatIncluded
        model.vatAmount = datamodel.vat
        model.grandTotal = datamodel.paidAmount


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