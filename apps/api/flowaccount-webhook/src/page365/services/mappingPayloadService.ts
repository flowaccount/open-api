import "reflect-metadata"
import { ProductItem, SimpleDocument } from "@flowaccount/openapi-sdk"
import { PayloadBody } from '../models/payload-body';
import moment = require("moment")
import { inject, injectable, registry } from "tsyringe"

@injectable()
export class MappingPayloadService {
    constructor() {

    }

    public async mappingPayload(payloadbody: PayloadBody): Promise<SimpleDocument>{
        return new Promise((resolve) => {
            if (payloadbody.stage == "shipped") {
            
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
    
                resolve(model)
            }
        })
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

    public testCall() {
        return 'ok'
    }
}