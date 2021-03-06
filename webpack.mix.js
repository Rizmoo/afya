const mix = require('laravel-mix');
// const exec = require('child_process').exec
// require('dotenv').config()


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
const glob = require('glob')
const path = require('path')

/*
 |--------------------------------------------------------------------------
 | Vendor assets
 |--------------------------------------------------------------------------
 */

function mixAssetsDir(query, cb) {
    ;(glob.sync('resources/' + query) || []).forEach(f => {
        f = f.replace(/[\\\/]+/g, '/')
        cb(f, f.replace('resources', 'public'))
    })
}
const sassOptions = {
    precision: 5,
    includePaths: ['node_modules', 'resources/assets/']
}

// plugins Core stylesheets
mixAssetsDir('sass/base/plugins/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), {sassOptions})
)

// pages Core stylesheets
mixAssetsDir('sass/base/pages/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), {sassOptions})
)

// Core stylesheets
mixAssetsDir('sass/base/core/**/!(_)*.scss', (src, dest) =>
    mix.sass(src, dest.replace(/(\\|\/)sass(\\|\/)/, '$1css$2').replace(/\.scss$/, '.css'), {sassOptions})
)

// script js
mixAssetsDir('js/scripts/**/*.js', (src, dest) => mix.scripts(src, dest))

/*
 |--------------------------------------------------------------------------
 | Application assets
 |--------------------------------------------------------------------------
 */

mixAssetsDir('vendors/js/**/*.js', (src, dest) => mix.scripts(src, dest))
mixAssetsDir('vendors/css/**/*.css', (src, dest) => mix.copy(src, dest))
mixAssetsDir('vendors/css/editors/quill/fonts/', (src, dest) => mix.copy(src, dest))
mixAssetsDir('fonts', (src, dest) => mix.copy(src, dest))
mixAssetsDir('fonts/**/**/*.css', (src, dest) => mix.copy(src, dest))

mix
    .js('resources/js/core/app-menu.js', 'public/js/core')
    .js('resources/js/core/app.js', 'public/js/core')
    .sass('resources/sass/core.scss', 'public/css', {sassOptions})
    .sass('resources/sass/overrides.scss', 'public/css', {sassOptions})
    .sass('resources/assets/scss/style.scss', 'public/css', {sassOptions})

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig(require('./webpack.config'));


/*mix for foviaend*/


mix.styles([
    'public/fovia/assets/css/bootstrap.min.css',
    'public/fovia/assets/css/animate.min.css',
    'public/fovia/assets/css/fontawesome.min.css',
    'public/fovia/assets/css/owl.carousel.min.css',
    'public/fovia/assets/css/slick.min.css',
    'public/fovia/assets/css/nice-select.css',
    'public/fovia/assets/css/magnific-popup.min.css',
    'public/fovia/assets/css/odometer.min.css',
    'public/fovia/assets/css/flaticon.css',
    'public/fovia/assets/css/meanmenu.css',
    'public/fovia/assets/css/style.css',
    'public/fovia/assets/css/responsive.css.css',
], 'public/fovia/all.css');

mix.scripts([
    'public/fovia/assets/js/jquery.min.js',
    'public/fovia/assets/js/popper.min.js',
    'public/fovia/assets/js/bootstrap.min.js',
    'public/fovia/assets/js/owl.carousel.min.js',
    'public/fovia/assets/js/slick.min.js',
    'public/fovia/assets/js/jquery.meanmenu.js',
    'public/fovia/assets/js/jquery.appear.min.js',
    'public/fovia/assets/js/parallax.min.js',
    'public/fovia/assets/js/jquery.magnific-popup.min.js',
    'public/fovia/assets/js/jquery.nice-select.min.js',
    'public/fovia/assets/js/wow.min.js',
    'public/fovia/assets/js/main.js',
], 'public/fovia/all.js');

if (mix.inProduction()) {
    mix.version();
}
