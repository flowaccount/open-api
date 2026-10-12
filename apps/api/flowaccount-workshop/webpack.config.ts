const { NxWebpackPlugin } = require('@nx/webpack');
const nodeExternals = require('webpack-node-externals');
const { withExternals } = require('./with-externals');
const { composePlugins } = require('@nx/webpack');

module.exports = composePlugins(
  (config, { options, context }) => {
    return {
      target: 'node',
      node: {
        __dirname: true
      },
      module: {
        rules: [
          {
            test: /\.(json)$/,
            type: 'src/config',
          }
        ],
      },
      output: {
        globalObject: 'this',
      },
      plugins: [
        new NxWebpackPlugin({
          tsConfig: options.tsConfig,
          compiler: 'swc',
          main: options.main,
          outputHashing: false,
          ssr: true,
          sourceMap: true,
          generatePackageJson: options.generatePackageJson,
          assets: options.assets,
          outputPath: options.outputPath
        }),
      ],

      externals: [withExternals([/^aws-cdk-lib\//,/aws-cdk-stack\//,/^aws-cdk-core\//,/^nx-aws-cdk\//]),]
    }
  });


