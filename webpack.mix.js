const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/birth.scss', 'public/css')
    .sass('resources/sass/search.scss', 'public/css')
    .sass('resources/sass/trivia.scss', 'public/css')
    .sass('resources/sass/detail.scss', 'public/css')
    .sass('resources/sass/show.scss', 'public/css')
    .sourceMaps();