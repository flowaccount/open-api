import "reflect-metadata"
import { AuthenticationApi } from "@flowaccount/openapi-sdk";
import { inject, injectable, registry } from "tsyringe";

@injectable()
@registry([
    {
        token: 'authenticationApi',
        useFactory: () => new AuthenticationApi(process.env.FLOWACCOUNT_API_ENDPOINT),
    }
])
export class AuthenticationService {
    clientGrantType: string;
    clientScope: string;
    clientId: string;
    clientSecret: string;


    constructor(@inject('authenticationApi') private authenticationApi: AuthenticationApi) {
        this.clientGrantType = process.env.CLIENT_GRANT_TYPE
        this.clientScope = process.env.CLIENT_SCOPE
        this.clientId = process.env.CLIENT_ID
        this.clientSecret = process.env.CLIENT_SECRET
    }

    /**
     * getAccessToken
     */
    public getAccessToken(): Promise<string> {
        return new Promise((resolve) => {
            this.authenticationApi
                .tokenPost(
                    "application/x-www-form-urlencoded",
                    this.clientGrantType,
                    this.clientScope,
                    this.clientId,
                    this.clientSecret
                )
                .then((response) => {
                    if (response && response.body && response.body.accessToken) {
                        const accessToken = response.body.accessToken;
                        resolve(accessToken);
                    } else {
                        console.log("getAccessToken -> response failed: ", response.body);
                        resolve(null);
                    }
                })
                .catch((reason) => {
                    console.log("getAccessToken -> error: ", reason);
                    resolve(null);
                });
        });
    }
}