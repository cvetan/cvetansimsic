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
    .copy('resources/js/adminto/plugins/bootstrap-datepicker/dist/', 'public/plugins/bootstrap-datepicker', false)
    .copy('resources/js/adminto/plugins/timepicker/', 'public/plugins/bootstrap-timepicker', false)
    .copy('resources/js/adminto/plugins/bootstrap-sweetalert/', 'public/plugins/bootstrap-sweetalert', false)
    .copy('resources/js/adminto/plugins/bootstrap-tagsinput/dist/', 'public/plugins/bootstrap-tagsinput', false)
    .copy('resources/js/adminto/plugins/fileuploads/', 'public/plugins/dropify', false)
    .copy('resources/js/adminto/plugins/switchery/', 'public/plugins/switchery', false)
    .copy('resources/js/adminto/plugins/select2/dist/', 'public/plugins/select2', false)
    .copy('resources/js/adminto/plugins/multiselect/', 'public/plugins/multiselect', false)
    .copy('resources/js/adminto/plugins/toastr/', 'public/plugins/toastr', false)
    .copy('resources/js/adminto/plugins/ckeditor-4.12.1/', 'public/plugins', false)

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
    ], 'public/js/adminto-vendor.js')
    .combine([
        'resources/js/adminto/jquery.core.js',
        'resources/js/adminto/jquery.app.js'
    ], 'public/js/adminto-app.js')

    .combine([
        'resources/js/adminto/plugins/datatables/jquery.dataTables.min.js',
        'resources/js/adminto/plugins/datatables/dataTables.bootstrap.js',
        'resources/js/adminto/plugins/datatables/dataTables.buttons.min.js',
        'resources/js/adminto/plugins/datatables/buttons.bootstrap.min.js',
        'resources/js/adminto/plugins/datatables/jszip.min.js',
        'resources/js/adminto/plugins/datatables/pdfmake.min.js',
        'resources/js/adminto/plugins/datatables/vfs_fonts.js',
        'resources/js/adminto/plugins/datatables/buttons.html5.min.js',
        'resources/js/adminto/plugins/datatables/buttons.print.min.js',
        'resources/js/adminto/plugins/datatables/dataTables.fixedHeader.min.js',
        'resources/js/adminto/plugins/datatables/dataTables.keyTable.min.js',
        'resources/js/adminto/plugins/datatables/dataTables.responsive.min.js',
        'resources/js/adminto/plugins/datatables/responsive.bootstrap.min.js',
        'resources/js/adminto/plugins/datatables/dataTables.scroller.min.js'
    ], 'public/plugins/datatables/datatables.js')
    .combine([
        'resources/js/adminto/plugins/datatables/jquery.dataTables.min.css',
        'resources/js/adminto/plugins/datatables/buttons.bootstrap.min.css',
        'resources/js/adminto/plugins/datatables/fixedHeader.bootstrap.min.css',
        'resources/js/adminto/plugins/datatables/responsive.bootstrap.min.css',
        'resources/js/adminto/plugins/datatables/scroller.bootstrap.min.css'
    ], 'public/plugins/datatables/datatables.css')

    .combine(['resources/js/admin/*'], 'public/js/admin.js');
