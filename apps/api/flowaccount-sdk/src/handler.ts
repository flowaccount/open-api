import 'reflect-metadata'
import { APIGatewayProxyHandler } from 'aws-lambda'
import { container } from 'tsyringe'
import { CashInvoiceService } from './cashInvoiceService'

export const createCashInvoice: APIGatewayProxyHandler = async (event, _context, callback) => {

  // add dependency
  container.register<CashInvoiceService>('cashInvoiceService', { useClass: CashInvoiceService })

  // create document
  const cashInvoiceService = container.resolve<CashInvoiceService>('cashInvoiceService')
  const result = await cashInvoiceService.create()

  return {
    statusCode: 200,
    body: result ? 'true' : 'false',
  }
}

