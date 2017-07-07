/*
 * Copyright (c) 2017. Rezaur Chowdhury <reza@rezaur.net>.
 *
 * This file is a part of doc-rx .
 *
 * doc-rx
 *
 * webpack.config.js
 *
 * 7/8/17 1:39 AM
 *
 * For the full copyright and license information, please view the LICENSE file
 * that is distributed with the source code.
 */

/**
 * Created by rezaur on 7/8/17.
 */
var Encore = require('@symfony/webpack-encore');

Encore
// directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/build')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // will output as web/build/app.js
    .addEntry('app', './web/assets/js/main.js')

    // will output as web/build/global.css
    .addStyleEntry('global', './web/assets/css/global.scss')

    // allow sass/scss files to be processed
     .enableSassLoader(function(sassOptions) {}, {
             resolve_url_loader: false
     })

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    .enableSourceMaps(!Encore.isProduction())

// create hashed filenames (e.g. app.abc123.css)
// .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();