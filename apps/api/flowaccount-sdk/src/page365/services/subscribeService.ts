import { GraphQLClient, gql } from 'graphql-request'
import { SubscribePayload } from '../models/subscribe-payload';

export class SubscribeService {
    constructor() {

    }

    public async subscribePage(data: any) {
        const endpoint = process.env.PAGE365_REGIS_ENDPOINT
        const client = new GraphQLClient(endpoint)

        const query = gql`
            mutation createPublicApp($name: String!, $email: String!, $phone: String, $webhookUrl: String){
                createPublicApp(name: $name, email: $email, phone: $phone, webhookUrl: $webhookUrl){
                    email
                    id
                    name
                    phone
                    status
                    webhookUrl
                }
            }`;

        const variables = data as SubscribePayload

        return new Promise((resolve) => {
            client.request(query, variables).then(function (result) {
                resolve(result)
            })
        })
    }
}