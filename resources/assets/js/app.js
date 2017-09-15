
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//2 lineas que venian por default
/*window.Vue = require('vue');
window.axios = require('axios');*/

//window.axios = require('vue-router');
/*window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};*/
//axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//2 lineas que venian por default
/*Vue.component('listcourse', require('./components/ListCourse.vue'));
Vue.component('createcourse', require('./components/CreateCourse.vue'));*/

require('./bootstrap');
import Vue from 'vue'
import App from './App.vue'
import router from './router'

const app = new Vue({
    el: '#root',
    template: '<app></app>',
    components: { App },
    router
});
