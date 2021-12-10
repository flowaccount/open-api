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
    public async create(): Promise<boolean> {

        const accessToken = await this.authenticationService.getAccessToken()
        if (!accessToken) {
            console.log("access token is null.")
            return Promise.resolve(false)
        }

        // item
        const item = new ProductItem()
        item.name = "item name"
        item.quantity = 1
        item.pricePerUnit = 100
        item.total = 100

        // document
        const model = new SimpleDocument()
        model.contactName = "contact name"
        model.publishedOn = moment(new Date()).format("YYYY-MM-DD")
        model.dueDate = moment(new Date()).format("YYYY-MM-DD")
        model.items = [item]
        model.subTotal = 100
        model.totalAfterDiscount = 100
        model.isVat = true
        model.vatAmount = 7
        model.grandTotal = 107

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