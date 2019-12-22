const mix = require('laravel-mix');
require('laravel-mix-purgecss');

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
mix.options({
    processCssUrls: false
});
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    // for datatables
    .scripts([
        'node_modules/datatables.net/js/jquery.dataTables.min.js',
        'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
        'node_modules/datatables.net-responsive/js/dataTables.responsive.min.js'
    ], 'public/js/datatable.js')
    .styles(['node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css'], 'public/css/datatable.css')
    // for chart.js
    .scripts([
        'node_modules/chart.js/dist/Chart.min.js'
    ], 'public/js/chart.js')
    .styles([
        'node_modules/chart.js/dist/Chart.min.css'
    ], 'public/css/chart.css')
    // for moment.js
    .scripts([
        'node_modules/moment/moment.js'
    ], 'public/js/moment.js')
    //for nprogress.js
    .scripts([
        'node_modules/nprogress/nprogress.js'
    ], 'public/js/nprogress.js')
    //for lazyload
    .scripts([
        'node_modules/lazyload/lazyload.min.js'
    ], 'public/js/lazyload.js')
    .styles([
        'node_modules/nprogress/nprogress.css'
    ], 'public/css/nprogress.css')
    //asset frontend
    .styles([
        'public/frontend/css/vendor/bootstrap.min.css',
        'public/frontend/css/vendor/font-awesome.css',
        'public/frontend/css/vendor/fontawesome-stars.css',
        'public/frontend/css/vendor/ion-fonts.css',
        'public/frontend/css/plugins/slick.css',
        'public/frontend/css/plugins/animate.css',
        'public/frontend/css/plugins/jquery-ui.min.css',
        'public/frontend/css/plugins/venobox.css',
        'public/frontend/css/plugins/nice-select.css',
        'public/frontend/css/plugins/magic.min.css',
        'public/frontend/css/style.css'
    ], 'public/frontend/css/frontend.css')
    .copy('public/frontend/fonts', 'public/fonts')
    .scripts([
        'public/frontend/js/vendor/jquery-1.12.4.min.js',
        'public/frontend/js/plugins/particles.js',
        'public/frontend/js/plugins/particles-costum.js',
        'public/frontend/js/vendor/modernizr-2.8.3.min.js',
        'public/frontend/js/vendor/popper.min.js',
        'public/frontend/js/vendor/bootstrap.min.js',
        'public/frontend/js/plugins/slick.min.js',
        'public/frontend/js/plugins/countdown.js',
        'public/frontend/js/plugins/jquery.barrating.min.js',
        'public/frontend/js/plugins/jquery.counterup.js',
        'public/frontend/js/plugins/jquery.nice-select.js',
        'public/frontend/js/plugins/jquery.sticky-sidebar.js',
        'public/frontend/js/plugins/jquery-ui.min.js',
        'public/frontend/js/plugins/jquery.ui.touch-punch.min.js',
        'public/frontend/js/plugins/venobox.min.js',
        'public/frontend/js/plugins/scroll-top.js',
        'public/frontend/js/plugins/theia-sticky-sidebar.min.js',
        'public/frontend/js/plugins/waypoints.min.js',
        'public/frontend/js/plugins/jquery.elevateZoom-3.0.8.min.js',
        'public/frontend/js/plugins/imagesloaded.pkgd.min.js',
        'public/frontend/js/plugins/isotope.pkgd.min.js',
        'public/frontend/js/ajax-mail.js',
        'public/frontend/js/main.js'
    ], 'public/frontend/js/frontend.js');


// mix.options({
//     purifyCss: true,
// });
