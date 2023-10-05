var express = require('express');
var exampleLogics = require('../workshops/example');
var router = express.Router();

router.get('/team-a', function (req, res, next) {
  exampleLogics.example();
  res.send('example');
});

router.get('/team-b', function (req, res, next) {
  exampleLogics.example();
  res.send('example');
});

router.get('/team-c', function (req, res, next) {
  exampleLogics.example();
  res.send('example');
});

module.exports = router;
