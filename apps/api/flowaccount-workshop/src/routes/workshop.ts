import * as express from 'express'
import { example as exampleLogics} from '../workshops/example';

export const router = express.Router();

router.get('/team-a', function (req, res, next) {
  exampleLogics();
  res.send('example');
});

router.get('/team-b', function (req, res, next) {
  exampleLogics();
  res.send('example');
});

router.get('/team-c', function (req, res, next) {
  exampleLogics();
  res.send('example');
});

