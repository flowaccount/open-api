import "reflect-metadata"
import { APIGatewayProxyEvent } from "aws-lambda";
import Handler = require("../../handler")

jest.setTimeout(10000)
describe('Test Services', () => {
    beforeEach(() => {
        jest.restoreAllMocks();
      });

    test('Create cash invoice', async () => {

        const event: APIGatewayProxyEvent = {
            body: JSON.stringify({
                "key": "order.update",
                "merchantToken": "E7678A85176CE5B3418FE0E2317BC478",
                "body": {
                    "id": 19,
                    "stage": "shipped",
                    "createdAt": "2022-04-25T19:07:42.000+07:00",
                    "note": null,
                    "shippingCost": 20,
                    "discount": 0,
                    "subtotal": 300,
                    "total": 320,
                    "no": 101,
                    "expiresOn": "2022-04-30",
                    "paidAmount": 320,
                    "paidAt": "2021-12-30T19:14:00.000+07:00",
                    "slug": "dpupox4l4dpk",
                    "trackingCode": "EF582621151TH",
                    "itemsCount": 1,
                    "shippingOption": "ไปรษณีย์ไทย",
                    "sent": true,
                    "sold": true,
                    "promotionCode": null,
                    "vat": 0,
                    "vatIncluded": false,
                    "taxInvoiceNo": "109929300345345",
                    "customerName": "Somsak dee",
                    "customerAddress": "120/2 แขวงป้อมปราบ เขตป้อมปราบศัตรูพ่าย กรุงเทพมหานคร 10100",
                    "customerEmail": "test@test.com",
                    "customerPhone": "0812223331",
                    "auto": false,
                    "url": "http://100484338898940.farn-brown.staging365.net:5000/invoices/dpupox4l4dpk",
                    "items": [
                        {
                            "id": 1,
                            "name": "test product name",
                            "note": "product for test",
                            "quantity": 3,
                            "price": 100,
                            "subtotal": 300,
                            "productId": 7
                        }
                    ],
                    "bankAccount": {
                        "id": 5,
                        "no": "1111122222",
                        "name": "สมชาย ดี",
                        "bankSlug": "kbank"
                    },
                    "paymentSlip": {
                        "statusCode": 203,
                        "createdAt": "2021-12-30T19:22:03.000+07:00",
                        "updatedAt": "2021-12-30T19:22:03.000+07:00"
                    }
                }
            })
        } as any

        const result = await Handler.webhook(event, null, null)

        expect(result['statusCode']).toEqual(200);
        expect(result['body']).toEqual('OK');
    }); 

    test('Subscribe page365', async () => {
        
        const event: APIGatewayProxyEvent = {
            body: JSON.stringify({
                "name": "TAgritech",
                "email": "watcharapun.ta@gmail.com",
                "phone": "0931870089",
                "webhookUrl": "https://tagritech.com/devtest/webhook"
              })
        } as any

        const result = await Handler.subscribe(event, null, null)

        expect(result['statusCode']).toEqual(200);
        expect(result['body']).toEqual('OK');
    }); 
})

