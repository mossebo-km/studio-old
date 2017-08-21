"use strict";

var webpack = require("webpack");
var path = require('path');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var CopyWebpackPlugin = require('copy-webpack-plugin');


module.exports = {
    entry: './src/assets/js/index.js',
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: 'assets/js/app.bundle.js',
    },
    module: {
        rules: [
            {
                test: /\.(scss|css)$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [
                        {loader: 'css-loader', options: {sourceMap: true, importLoaders: 2}},
                        {loader: 'postcss-loader', options: {sourceMap: true,}},
                        {loader: 'sass-loader', options: {sourceMap: true}},
                    ],
                })
            },
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['env'],
                    }
                }
            },
            {
                test: /\.(jpe?g|png|gif|svg)$/i,
                loaders: [
                    {
                        loader: 'file-loader',
                        query: {
                            name: '[name].[ext]',
                            outputPath: './assets/images/',
                            publicPath: '../../',
                        }
                    },
                    {
                        loader: 'image-webpack-loader',
                        options: {
                            query: {
                                progressive: true,
                                optimizationLevel: 7,
                                interlaced: false,
                                pngquant: {
                                    quality: '65-90',
                                    speed: 4
                                },
                            },
                        },
                    },
                ],
            },
            {
                test: /\.(woff|woff2|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
                use: [
                    {
                        loader: 'file-loader',
                        query: {
                            name: '[name].[ext]',
                            outputPath: './assets/fonts/',
                            publicPath: '../../',
                        },
                    },
                ],
            },
        ],
    },
    devServer: {
        contentBase: path.join(__dirname, "src"),
        compress: true,
        port: 9000,
        stats: "errors-only",
        proxy: {
            "/api": {
                target: "http://example-site.ru",
                pathRewrite: {"^/api": ""}
            }
        },
    },
    plugins: [
        new ExtractTextPlugin({
            filename: 'assets/css/style.css',
            disable: false,
            allChunks: true,
        }),
        new webpack.ProvidePlugin({
            jQuery: 'jquery',
            $: 'jquery',
            jquery: 'jquery',
        }),

        new CopyWebpackPlugin([
                {
                    from: {
                        glob: 'src/template/**/*',
                        dot: true
                    },
                    to: '[name].[ext]',
                    toType: 'template'
                },
            ],
            {
                copyUnmodified: true,
            }
        )],
    devtool: 'source-map',
}