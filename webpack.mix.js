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

mix.js('resources/js/app.js', 'public/assets/js')
    .vue()
    .postCss('resources/css/app.css', 'public/assets/css', [
        require('tailwindcss')
    ])
    .js('node_modules/popper.js/dist/popper.js', 'public/assets/js').sourceMaps();
;

if (mix.inProduction()) {
    mix.version()
}
