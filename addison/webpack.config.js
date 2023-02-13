"use strict";

const Path = require("path");
const Webpack = require("webpack");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const ImageMinimizerPlugin = require("image-minimizer-webpack-plugin");

const assets = Path.resolve(__dirname, "assets");
const src = Path.resolve(assets, "src");

const Paths = {
    src: src,
    fonts: Path.resolve(src, "fonts"),
    img: Path.resolve(src, "img"),
    js: Path.resolve(src, "js"),
    scss: Path.resolve(src, "scss"),
    dist: Path.resolve(assets, "dist"),
};

module.exports = function (_env, argv) {
    const isProduction = argv.mode === "production";
    const isDevelopment = !isProduction;

    return {
        entry: {
            app: [`${Paths.js}/app.js`, `${Paths.scss}/app.scss`],
        },
        output: {
            path: `${Paths.dist}`,
            filename: "js/[name].min.js",
            clean: true,
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: "babel-loader",
                        options: {
                            cacheDirectory: true,
                            cacheCompression: false,
                        },
                    },
                },
                {
                    test: /\.(sa|sc|c)ss$/,
                    use: [
                        isProduction ? MiniCssExtractPlugin.loader : "style-loader",
                        {
                            loader: "css-loader",
                        },
                        {
                            loader: "postcss-loader",
                        },
                        {
                            loader: "sass-loader",
                            options: {
                                implementation: require.resolve("sass"),
                            },
                        },
                    ],
                },
                {
                    test: /\.(woff(2)?|ttf|eot|svg)$/i,
                    type: "asset",
                    generator: {
                        filename: "fonts/[name][ext]",
                    },
                },
                {
                    test: /\.(jpe?g|png|gif|svg)$/i,
                    type: "asset",
                    generator: {
                        filename: "img/[name][ext]",
                    },
                },
                {
                    test: /\.svg$/,
                    use: ["@svgr/webpack"],
                },
            ],
        },
        resolve: {},
        optimization: {
            minimize: isProduction,
            minimizer: [
                new TerserPlugin({
                    extractComments: false,
                    parallel: true,
                }),
                new CssMinimizerPlugin({
                    minify: CssMinimizerPlugin.cleanCssMinify,
                }),
                new ImageMinimizerPlugin({
                    minimizer: {
                        implementation: ImageMinimizerPlugin.squooshMinify,
                        options: {
                            encodeOptions: {
                                mozjpeg: {
                                    quality: 100,
                                },
                                webp: {
                                    lossless: 1,
                                },
                                avif: {
                                    cqLevel: 0,
                                },
                            },
                        },
                    },
                }),
            ],
        },
        plugins: [
            isProduction &&
                new MiniCssExtractPlugin({
                    filename: "css/[name].min.css",
                }),
            new Webpack.DefinePlugin({
                "process.env.NODE_ENV": JSON.stringify(isProduction ? "production" : "development"),
            }),
            new CopyPlugin({
                patterns: [
                    {
                        from: "node_modules/bootstrap-icons/font/fonts",
                        to: `${Paths.fonts}`,
                    },
                    {
                        from: "node_modules/@fortawesome/fontawesome-free/webfonts",
                        to: `${Paths.fonts}`,
                    },
                    {
                        from: "node_modules/@iconscout/unicons/fonts/line",
                        to: `${Paths.fonts}`,
                    },
                    // {
                    //   from: "node_modules/flag-icons/flags/",
                    //   to: `${Paths.fonts}/flags/`,
                    // },
                ],
            }),
        ].filter(Boolean),
        devtool: isDevelopment && "eval-cheap-source-map",
        performance: {
            hints: false,
        },
    };
};
