/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./controls');
require('./tether.min');
require('./chocolat.min');
require('./jquery.filterizr.min')

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

/**
*Filterizr is a jQuery plugin that sorts, shuffles, searches and applies stunning filters over *responsive galleries using CSS3 transitions. 
*/

$(window).bind("load", function() {
    var filterizd = $('.filtr-container');
    filterizd.filterizr({
        filter: 'all',
    });
 });

//  $('#myTab a').on('click', function (e) {
//     e.preventDefault()
//     $(this).tab('show')
//   })
  