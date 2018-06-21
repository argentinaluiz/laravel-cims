let mix = require('laravel-mix');

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
// .copy('node_modules/font-awesome/fonts', 'public/site/fonts')
mix.js('resources/assets/js/bootstrap.js', 'public/site/js/app.js')
    .extract(['jquery', 'jquery-validation', 'bootstrap', 'popper.js'])
//    .sass('resources/assets/sass/app.scss', 'public/site/css/app.css')
   .sass('resources/assets/sass/front.scss', 'public/site/css/style.css');
//    .copy('node_modules/font-awesome/fonts', 'public/site/css/fonts/vendor/font-awesome');

