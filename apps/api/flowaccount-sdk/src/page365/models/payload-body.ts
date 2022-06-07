import { BankAccount } from './bank-account';
import { OrderItem } from './order-item';
import { PaymentSlip } from './payment-slip';

export interface PayloadBody {
    id?: number
    stage?: string
    createdAt?: Date
    note?: string
    shippingCost?: number
    discount?: number
    subtotal?: number
    total?: number
    no?: number
    expriesOn?: Date
    paidAmount?:number
    paidAt?: Date
    slug?: string
    trackingCode?: string
    itemsCount?: number
    shippingOption?: string
    sent?: boolean
    sold?: boolean
    promotionCode?: string
    vat?: number
    vatIncluded?: boolean
    taxInvoiceNo?: string
    customerName?: string
    customerAddress?: string
    customerEmail?: string
    customerPhone?: string
    auto?: boolean
    url?: string
    items?: Array<OrderItem>
    bankAccount?: BankAccount
    paymentSlip?: PaymentSlip
}