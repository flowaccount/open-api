const schema = {
    type: "object",
    properties: {
        key: { type: "string" },
        merchantToken: { type: "string" },
        body: {
            type: "object",
            properties: {
                id: { type: "integer" },
                stage: { type: "string" },
                createdAt: { type: "string" },
                no: { type: "integer" },
                expiresOn: { type: "string" },
                slug: { type: "string" },
                shippingOption: { type: "string" },
                sent: { type: "boolean" },
                sold: { type: "boolean" },
                vatIncluded: { type: "boolean" },
                customerName: { type: "string" },
                customerAddress: { type: "string" },
                customerPhone: { type: "string" },
                auto: { type: "boolean" },
                url: { type: "string" },
            },
            required: [
                "id",
                "stage",
                "createdAt",
                "no",
                "expiresOn",
                "slug",
                "shippingOption",
                "sent",
                "sold",
                "vatIncluded",
                "customerName",
                "customerAddress",
                "customerPhone",
                "auto",
                "url",
            ]
        }
    },
    required: ["key", "merchantToken"]
}

export { schema as payloadSchema }