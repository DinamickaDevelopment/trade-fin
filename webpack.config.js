"use strict";
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

var path = require("path");

module.exports = {
    entry: {
        bundle: [
            "./scss/main.scss",
            "./js/main.js"
        ]
    },
    output: {
        filename: "./public/[name].js",
        publicPath: '/'
    },
    module: {
        loaders: [
               {test: /\.js?$/,loader: "babel-loader"},

               {
                   test: /\.scss$/,
                   use: ExtractTextPlugin.extract({
                       fallback: 'style-loader',
                       //resolve-url-loader may be chained before sass-loader if necessary
                       use: ['css-loader', 'sass-loader']
                   })
               },

               { test: /(\.css$)/, loaders: ['style-loader', 'css-loader'] },
               { test: /\.(eot|otf|svg|ttf|woff|woff2)$/, loader: 'file-loader?name=./fonts/[name].[ext]' },
               { test: /\.(png|jpg|svg)$/, loader: 'file-loader?name=./img/[name].[ext]' },

              
        ]
    },
    plugins: [
        new ExtractTextPlugin('./public/bundle.css'),
        
        new UglifyJSPlugin({
            compress: { warnings: false },
            include: /\.min\.js$/
        }),
        new OptimizeCssAssetsPlugin({
            assetNameRegExp: /\.min\.css$/,
            cssProcessorOptions: { discardComments: { removeAll: true } }
        })
    ],
    resolve: {
        extensions: ['.js', '.js', "scss"],
        modules: ['node_modules']
    },

};