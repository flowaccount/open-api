import { WebhookService } from './webhookService'
import "reflect-metadata"

describe('webhookServices', () => {
    it('Create cash invoice', async() => {
        
        let ws = await WebhookService

        let payload = {

        }
        // expect(ws.prototype.inboundPayload(payload)).toBe(true);
        expect(ws.prototype.testFunc('test')).toBe('ok');
    }); 
})