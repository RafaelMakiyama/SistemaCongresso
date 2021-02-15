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

mix.scripts([
    'resources/plugins/jquery/jquery.min.js',
    'resources/plugins/jquery-ui/jquery-ui.min.js',
    'resources/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/plugins/chart.js/Chart.min.js',
    'resources/plugins/sparklines/sparkline.js',
    'resources/plugins/jqvmap/jquery.vmap.min.js',
    'resources/plugins/jqvmap/maps/jquery.vmap.usa.js',
    'resources/plugins/jquery-knob/jquery.knob.min.js',
    'resources/plugins/moment/moment.min.js',
    'resources/plugins/daterangepicker/daterangepicker.js',
    'resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'resources/plugins/summernote/summernote-bs4.min.js',
    'resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'resources/dist/js/adminlte.js',
    'resources/dist/js/demo.js',
    'resources/dist/js/pages/dashboard.js'
],  'public/assets/admin/js/all.js');





mix.styles([
    'resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    'resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'resources/plugins/jqvmap/jqvmap.min.css',
    'resources/dist/css/adminlte.min.css',
    'resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
    'resources/plugins/daterangepicker/daterangepicker.css',
    'resources/plugins/summernote/summernote-bs4.min.css'
    ] , 'public/assets/admin/css/all.css'

);
