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


//autoload( {"jquery": [ '$', 'window.jQuery' ] } )を追加

mix.js( 'resources/js/app.js', 'public/js' ).autoload( {
    "jquery": [ '$', 'window.jQuery' ],
} ).postCss( 'resources/css/app.css', 'public/css', [
    require( 'postcss-import' ),
    require( 'tailwindcss' ),
    require( 'autoprefixer' ),
] );
