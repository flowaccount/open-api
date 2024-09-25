import * as express from 'express';
import * as fs from 'fs';
import RateLimit from 'express-rate-limit';

export const router = express.Router();

// set up rate limiter: maximum of 100 requests per 15 minutes
const limiter = RateLimit({
  windowMs: 15 * 60 * 1000, // 15 minutes
  max: 100, // max 100 requests per windowMs
});

/* GET home page. */
router.get('/', limiter, function (_req, res) {
  try {
    fs.readFile('./README.md', 'utf8', (err, data) => {
      console.log('shit', err);
      if (err) {
        return res.status(500).send('Error reading README.md');
      }

      res.send(`
          <!DOCTYPE html>
          <html>
            <head>
              <title>README Viewer</title>
            </head>
            <body>
              ${data}
            </body>
          </html>
        `);
    });
  } catch (err) {
    console.log('ERROR');
    console.log(err);
  }
});
