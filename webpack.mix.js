const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'public/css/animate.min.css',
        'public/css/magnific-popup.css',
        'public/css/jquery.selectBox.css',
        'public/css/rangeslider.css',
        'public/css/jquery.mCustomScrollbar.css',
        'public/css/style.css',
        'public/css/default.css'
    ], 'public/css/all.css')
    .scripts([
        'public/js/jquery.selectBox.js',
        'public/js/rangeslider.js',
        'public/js/jquery.magnific-popup.min.js',
        'public/js/jquery.filterizr.js',
        'public/js/wow.min.js',
        'public/js/backstretch.js',
        'public/js/jquery.countdown.js',
        'public/js/jquery.scrollUp.js',
        'public/js/particles.min.js',
        'public/js/typed.min.js',
        'public/js/jquery.mb.YTPlayer.js',
        'public/js/jquery.mCustomScrollbar.concat.min.js',
        'public/js/ie-emulation-modes-warning.js',
        'public/js/custom.js',
    ], 'public/js/all.js');