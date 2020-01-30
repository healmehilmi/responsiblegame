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

mix.js('resources/vue/levels/app.js', 'public/js', 'resources/vue/levels/level1', 'resources/vue/levels/vue-level1.js')
    .sass('resources/sass/app.scss', 'public/css');
    mix.scripts([

        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'resources/js/app.js',
    
    ], 'public/js/app.js').version()
    
    
    

    
   
