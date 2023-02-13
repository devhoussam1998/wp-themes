"use strict";

module.exports = {
    presets: [
        [
            "@babel/preset-env",
            {
                useBuiltIns: "entry",
                corejs: "3.27",
            },
        ],
    ],
    plugins: ["@babel/plugin-syntax-dynamic-import"],
};
