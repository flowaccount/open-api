import * as express from 'express'
import * as fs from 'fs'
export const router = express.Router();

/* GET home page. */
router.get('/', function (req, res, next) {
  
  try {
    fs.readFile('./README.md', 'utf8', (err, data) => {
      console.log('shit', err)
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
  } catch (err) { console.log('ERROR'); console.log(err) }
});


