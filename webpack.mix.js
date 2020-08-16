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
        'resources/resources/usuario/js/demo/chart-bar-demo.js',
        'resources/resources/usuario/js/demo/chart-area-demo.js',
        'resources/resources/usuario/js/demo/datatables-demo.js',
        'resources/resources/usuario/js/demo/chart-pie-demo.js',
        'resources/resources/usuario/js/sb-admin-2.js',
        'resources/resources/usuario/js/sb-admin-2.min.js',
        'resources/resources/usuario/vendor/jquery/jquery.slim.min.js',
        'resources/resources/usuario/vendor/jquery/jquery.slim.js',
        'resources/resources/usuario/vendor/jquery/jquery.js',
        'resources/resources/usuario/vendor/jquery/jquery.min.js',
        'resources/resources/usuario/vendor/jquery-easing/jquery.easing.compatibility.js',
        'resources/resources/usuario/vendor/jquery-easing/jquery.easing.min.js',
        'resources/resources/usuario/vendor/jquery-easing/jquery.easing.js',
        'resources/resources/usuario/vendor/bootstrap/js/bootstrap.bundle.js',
        'resources/resources/usuario/vendor/bootstrap/js/bootstrap.js',
        'resources/resources/usuario/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/resources/usuario/vendor/bootstrap/js/bootstrap.min.js',
        'resources/resources/usuario/vendor/datatables/jquery.dataTables.min.js',
        'resources/resources/usuario/vendor/datatables/jquery.dataTables.js',
        'resources/resources/usuario/vendor/datatables/dataTables.bootstrap4.min.js',
        'resources/resources/usuario/vendor/datatables/dataTables.bootstrap4.js',
        'resources/resources/usuario/vendor/chart.js/Chart.bundle.min.js',
        'resources/resources/usuario/vendor/chart.js/Chart.bundle.js',
        'resources/resources/usuario/vendor/chart.js/Chart.min.js',
        'resources/resources/usuario/vendor/chart.js/Chart.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/fontawesome.min.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/conflict-detection.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/brands.min.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/solid.min.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/regular.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/regular.min.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/fontawesome.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/brands.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/conflict-detection.min.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/v4-shims.min.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/v4-shims.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/all.min.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/all.js',
        'resources/resources/usuario/vendor/fontawesome-free/js/solid.js'
    ], 'public/resources/js/todosjuntosx2.js')
    .styles([
        'resources/resources/css/mio.css',
        'resources/resources/usuario/css/sb-admin-2.css',
        'resources/resources/usuario/css/sb-admin-2.min.css',
        'resources/resources/usuario/vendor/fontawesome-free/css/all.min.css'
    ], 'public/resources/css/todosjuntos.css')
    .js(['resources/js/app.js'], 'public/resources/js/app.js');