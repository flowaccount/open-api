import "reflect-metadata"
import { CashInvoiceApi, ProductItem, SimpleDocument } from "@flowaccount/openapi-sdk"
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


    constructor(
        @inject('authenticationService') private authenticationService: AuthenticationService,
        @inject('cashInvoiceApi') private cashInvoiceApi: CashInvoiceApi
    ) { }
    /**
     * create document
     */
    public async createCashInvoice(payload: SimpleDocument): Promise<boolean> {

        const accessToken = await this.authenticationService.getAccessToken()
        if (!accessToken) {
            console.log("access token is null.")
            return Promise.resolve(false)
        }

        // post create cash invoice
        return new Promise((resolve) => {
            this.cashInvoiceApi
                .cashInvoicesPost("Bearer " + accessToken, payload)
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

    public testCall() {
        return 'ok'
    }
}
