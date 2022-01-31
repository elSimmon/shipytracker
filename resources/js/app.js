/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import * as Vue from "vue";
import * as VueRouter from 'vue-router';

import Dashboard from './components/Dashboard.vue';

require('./bootstrap');



let routes = [
    {path: '/', component: require('./components/Dashboard.vue')},
    {path: '/dashboard', component: require('./components/Dashboard.vue')},
    {path: '/profile', component: require('./components/Profile.vue')}
]

const router =  VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes
})


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = Vue.createApp({});

app.component('dashboard', Dashboard);
app.use(router)

app.mount('#app')

