/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// window.$ = window.jQuery = require('jquery');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

require('sleek-dashboard/dist/assets/plugins/daterangepicker/daterangepicker.js');
require('sleek-dashboard/dist/assets/plugins/slimscrollbar/jquery.slimscroll.min.js');
require('sleek-dashboard/dist/assets/plugins/jekyll-search.min.js');
require('sleek-dashboard/dist/assets/plugins/charts/Chart.min.js');
require('sleek-dashboard/dist/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js');
require('sleek-dashboard/dist/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js');
require('sleek-dashboard/dist/assets/js/sleek.bundle.js');
require('lazyload/lazyload.min.js');

//select2
require('select2/dist/js/select2.js');
$.fn.select2.defaults.set( "theme", "bootstrap4" );

require('sweetalert2/dist/sweetalert2.js');
// import Swal from 'sweetalert2/dist/sweetalert2.js'
window.Swal = require('sweetalert2/dist/sweetalert2');