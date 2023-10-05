import * as fs from 'fs';

function randomAmount() {
  return +(Math.random() * 500).toFixed(2);
}

function randomDescription() {
  const descriptions = [
    'Office Supplies',
    'Client Meeting',
    'Flight',
    'Hotel Booking',
    'Software Purchase',
    'Catering',
    'Training Session',
    'Vehicle Rent',
  ];
  return descriptions[Math.floor(Math.random() * descriptions.length)];
}

function randomDate() {
  const start = new Date(2023, 0, 1); // January 1, 2023
  const end = new Date(2023, 11, 31); // December 31, 2023
  const randomDate = new Date(
    start.getTime() + Math.random() * (end.getTime() - start.getTime())
  );
  return `${randomDate.getFullYear()}-${(randomDate.getMonth() + 1)
    .toString()
    .padStart(2, '0')}-${randomDate.getDate().toString().padStart(2, '0')}`;
}

function generateData() {
  const bankStmts = [];
  const expenses = [];

  for (let i = 1; i <= 100000; i++) {
    bankStmts.push({
      id: `B${i.toString().padStart(4, '0')}`,
      amount: randomAmount(),
      description: randomDescription(),
      date: randomDate(),
    });

    expenses.push({
      id: `E${i.toString().padStart(4, '0')}`,
      amount: randomAmount(),
      description: randomDescription(),
      date: randomDate(),
    });
  }

  return { bankStmts, expenses };
}

function writeToFile(data) {
  fs.writeFileSync(
    'bankStatements.json',
    JSON.stringify(data.bankStmts, null, 4),
    'utf-8'
  );
  fs.writeFileSync(
    'expenseStatements.json',
    JSON.stringify(data.expenses, null, 4),
    'utf-8'
  );
}

module.exports = {
  generateData,
  writeToFile,
  randomDate,
};
