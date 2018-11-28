// window._ = require('lodash');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

let Vue = require('vue');
import routes from './routes.js';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
Vue.component('minder-app', require('./components/minder-app'));

const router = new VueRouter({
    routes: routes
});

const app = new Vue({
    el: '#app',
    router
});