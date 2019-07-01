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

/**
 * ========= Default tasks from Laravel installation =========
 */
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

/**
 * ========= Admin tasks ===
 */
mix.less('resources/less/adminto/adminto.less', 'public/css/adminto.css')
    .copy('resources/images/adminto/favicon.ico', 'public/images/favicon.ico')
    .copy('resources/images/adminto/users/avatar-1.jpg', 'public/images/users/avatar-1.jpg')
    .copy('resources/images/adminto/users/avatar-2.jpg', 'public/images/users/avatar-2.jpg')
    .copy('resources/images/adminto/users/avatar-3.jpg', 'public/images/users/avatar-3.jpg')
    .copy('resources/js/adminto/modernizr.min.js', 'public/js/modernizr.min.js')
    .combine([
        'resources/js/adminto/jquery.min.js',
        'resources/js/adminto/bootstrap.min.js',
        'resources/js/adminto/detect.js',
        'resources/js/adminto/fastclick.js',
        'resources/js/adminto/jquery.slimscroll.js',
        'resources/js/adminto/jquery.blockUI.js',
        'resources/js/adminto/waves.js',
        'resources/js/adminto/jquery.nicescroll.js',
        'resources/js/adminto/jquery.sclollTo.min.js',
        'resources/js/adminto/jquery.core.js',
        'resources/js/adminto/jquery.app.js'
    ], 'public/js/admin-vendor.js');
