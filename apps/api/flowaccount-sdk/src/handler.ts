import 'reflect-metadata'
import { APIGatewayProxyHandler } from 'aws-lambda'
import { container } from 'tsyringe'
import { CashInvoiceService } from './cashInvoiceService'
import { WebhookService } from './webhookService'
import { SubscribeService } from './subscribeService'

export const createCashInvoice: APIGatewayProxyHandler = async (event, _context, callback) => {

  // add dependency
  container.register<CashInvoiceService>('cashInvoiceService', { useClass: CashInvoiceService })

  // create document
  // const cashInvoiceService = container.resolve<CashInvoiceService>('cashInvoiceService')
  // const result = await cashInvoiceService.create()
  const result = null
  
  return {
    statusCode: 200,
    body: result ? 'true' : 'false',
  }
}

export const webhook: APIGatewayProxyHandler = async (event, _context, callback) => {
  // add dependency
  container.register<WebhookService>('webhookService', { useClass: WebhookService })

  // create document
  const webhookService = container.resolve<WebhookService>('webhookService')
  const data = JSON.parse(event.body)
  webhookService.inboundPayload(data)

  return {
    statusCode: 200,
    body: "OK",
  }
}

export const subscribe: APIGatewayProxyHandler = async (event, _context, callback) => {
  // add dependency
  container.register<SubscribeService>('subscribeService', { useClass: SubscribeService })

  // create document
  const subscribeService = container.resolve<SubscribeService>('subscribeService')
  const data = JSON.parse(event.body)
  const result = subscribeService.subscribePage(data)
  console.log(result);

  return {
    statusCode: 200,
    body: "OK",
  }
}


