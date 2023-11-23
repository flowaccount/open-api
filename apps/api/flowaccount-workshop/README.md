# Flowaccount Workshop

## Requirement

1. Naive Matching:
    Basic concept: Iterating through both lists and matching based on exact amounts.
2. Fuzzy Matching:
   - Matching based on approximate amounts to account for minor discrepancies.
   - Using a tolerance range.
3. Date & Description Matching:
   - Enhancing matching by considering transaction date and using substring matching for descriptions.

## Before start
1. Require Node.ts 14.x
2. Require YARN
3. Labtop or PC. up to you

## Setup project
1. Clone `open-api` from repo `git@github.com:flowaccount/open-api.git`
2. to go workshop with command `"cd apps/api/flowaccount-workshop"`
2. Run `npm install` or `yarn` in your terminal for install node_module
3. Run `npm start` or `yarn start` for generate data source file `bankStatements.json` and `expenseStatements.json`
4. write you code in `apps/api/flowaccount-workshop/workshops/example.ts`
5. have fun!!

## Run project
1. Run `yarn nx run api-flowaccount-workshop:serve --verbose --watch` on the root folder.
2. Open your browser and go to `http://localhost:3000/workshop/<YOUR TEAM>` e.g. `http://localhost:3000/workshop/team-a`
