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


mix.sass('resources/sass/app.scss', 'public/frontEnd/css') // Compile SCSS to CSS and output to public/frontEnd/css
    .js('resources/js/app.js', 'public/frontEnd/js'); // Compile JavaScript and output to public/frontEnd/js
