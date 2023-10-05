var bankStatement = require('../bankStatements.json');
var expenseStatements = require('../expenseStatements.json');
function example() {
  console.log(bankStatement);
  console.log(expenseStatements);
}

module.exports = {
  example,
};
