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

mix.js('resources/js/site/app.js', 'public/js/site')
   .sass('resources/sass/site/style.scss', 'public/css/site')
   .sass('resources/sass/site/bootstrap.scss', 'public/css/site')
   .sass('resources/sass/site/bootstrap-grid.scss', 'public/css/site')
   .sass('resources/sass/site/bootstrap-reboot.scss', 'public/css/site');
