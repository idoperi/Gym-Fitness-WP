let mix = require("laravel-mix")

mix.sass("assets/css/style.scss","css-dist")

// const fs = require("fs")
// const CleanWebpackPlugin = require("clean-webpack-plugin")
// const convertToFileHash = require("laravel-mix-make-file-hash")

// mix.webpackConfig({
//   plugins: [
//     new CleanWebpackPlugin.CleanWebpackPlugin({
//       cleanOnceBeforeBuildPatterns: ["js-dist", "dist"],
//     }),
//   ],
//   watchOptions: {
//     aggregateTimeout: 300,
//     poll: 1000,
//   },
// })

// mix.options({
//   processCssUrls: false,
// })

// mix
//   .js("js/main.js", "js-dist")
//   .js("js/header.js", "js-dist")
//   .js("js/footer.js", "js-dist")
//   .js("js/lottie.js", "js-dist")
//   .js("js/feed.js", "js-dist")
//   .js("js/internal-policy.js", "js-dist")
//   .js("js/util.js", "js-dist")
//   .js("js/single-position.js", "js-dist")
//   .js("js/archive-position.js", "js-dist")
//   .sass("sass/internal-policy.scss", "css-dist")
//   .sass("sass/single-position.scss", "css-dist")
//   .sass("sass/archive-position.scss", "css-dist")
//   .sass("sass/newsroom-resources-inner.scss", "css-dist")
//   .sass("sass/404-page.scss", "css-dist")
//   .sass("sass/legal-privacy-center.scss", "css-dist")
//   .sass("sass/style.scss", "css-dist")
//   .sass("sass/header.scss", "css-dist")
//   .sass("sass/footer.scss", "css-dist")

// // For JS files of AnpmCF Blocks
// const jsBlocks = getDirectories("./acf-blocks")
// jsBlocks.forEach((blockName) => {
//   const fileName = `./acf-blocks/${blockName}/${blockName}.js`
//   if (fs.existsSync(fileName)) {
//     mix.js(fileName.replace("./", ""), "js-dist")
//   }
// })

// // For SCSS files of ACF Blocks
// const scssBlocks = getDirectories("./sass/blocks")
// scssBlocks.forEach((blockName) => {
//   const fileName = `sass/blocks/${blockName}/${blockName}.scss`
//   if (fs.existsSync(fileName)) {
//     mix.sass(fileName, "css-dist")
//   }
// })

// mix.version()
// mix.setPublicPath("./dist").then(() => {
//   const convertToFileHash = require("laravel-mix-make-file-hash")
//   convertToFileHash({
//     publicPath: "./dist",
//     manifestFilePath: "./dist/mix-manifest.json",
//   })
// })
