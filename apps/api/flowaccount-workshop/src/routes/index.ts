import * as express from 'express';
import * as fs from 'fs';
import rateLimit from 'express-rate-limit';
import slowDown from 'express-slow-down';
export const router = express.Router();

const limiter = rateLimit({
  windowMs: 60 * 1000, // 1 minute
  max: 10,
  message: 'Too many requests, please try again later.',
});

const speedLimiter = slowDown({
  windowMs: 60 * 1000,
  delayAfter: 5,
  delayMs: 500,
});

/* GET home page. */
router.get(
  '/',
  limiter,
  speedLimiter,
  (req, res) => {
    try {
      fs.readFile('./README.md', 'utf8', (err, data) => {
        if (err) {
          console.error('File read error:', err);
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
      console.error('Unexpected error:', err);
      res.status(500).send('Internal server error');
    }
  }
);
