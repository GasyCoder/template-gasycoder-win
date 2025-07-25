const CopyPlugin = require("copy-webpack-plugin");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require("path");
module.exports = {
    entry: {
      scripts: './src/js/scripts.js',
      charts: './src/js/charts.js',
      apps: './src/js/apps.js',
    },
        
    output: {
      filename: './assets/js/[name].js',
      path: __dirname + '/dist',
      library: ['Nio'],
    },

    performance: {
      hints: false,
    },

    optimization: {
      usedExports: false,
    },

    module: {
      rules: [
        {
          test: /\.css$/i,
          use: [
            MiniCssExtractPlugin.loader,
            { loader: 'css-loader', options: { importLoaders: 1, url: false }, },
            { loader: "postcss-loader" }
          ]
        },
        {
          test: /\.(js)$/i,
          loader: 'babel-loader',
        },
      ],
    },

    plugins: [
      new CopyPlugin({
        patterns: [
          { from: "./src/assets/fonts", to: "./assets/fonts" },
          { from: "./src/images", to: "./images" },
          { from: "./src/html", to: "./" },
        ],
      }),
      new MiniCssExtractPlugin({
        filename: 'assets/css/app.css',
      }),
    ],

    devtool: 'source-map', 
  };