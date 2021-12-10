# FlowaccountOpenApi

This project contain example applications that uses the flowaccount-open-api sdk to create documents.

## Getting Started
---
Run `yarn` to get your workspace ready and `npm_modules` installed

To see all the `build/serve/deploy` configurations please check the `workspace.json` file.



## Typscript-sdk
---
source path: `apps\api\flowaccount-sdk`
lambda-environment configuration: `apps\api\flowaccount-sdk\env.json`

Make sure your `AWS_PROFILE` environment variable is set to the correct profile. This means that the value `default` or `your-profile-name` should exists in `./aws/credentials` file or else serverless will HICK-UPS

- run `yarn nx build api-flowaccount-sdk` to build the node-serverless-application
- run `yarn nx serve api-flowaccount-sdk` to serve the application locally
- run `yarn nx deploy api-flowaccount-sdk` to deploy the application to your aws account. It will deploy using `serverelss framework` which consists of an `api-gateway` and a `lambda function`

**Note: In the current version there is a bug in MAC/LINUX machines where the dist/.serverlessPackage needs to be deleted after every build.**


## Contributors ✨:
---
Thanks goes to these wonderful people
<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tr>
    <td align="center"><a href="https://github.com/agentender"><img src="https://avatars.githubusercontent.com/u/9163892?v=4?s=100" width="100px;" alt=""/><br /><sub><b>ooKriangsaKoo</b></sub></a><br /></td>
    <td align="center"><a href="https://github.com/bcallaghan-et"><img src="https://avatars.githubusercontent.com/u/54667750?v=4?s=100" width="100px;" alt=""/><br /><sub><b>bambiiz</b></sub></a><br /></td>
    <td align="center"><a href="https://github.com/jordan-hall"><img src="https://avatars.githubusercontent.com/u/66237026?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Sekkz</b></sub></a><br /></td>
  </tr>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->