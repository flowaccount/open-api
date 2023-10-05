var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function (req, res, next) {
  const fs = require('fs');
  fs.readFile('README.md', 'utf8', (err, data) => {
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
});

module.exports = router;
