require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import { routes } from './routes';
import { store } from './store/store';
import { api } from './api';

window.api = api

Vue.use(VueRouter)
Vue.use(Vuetify)

const router = new VueRouter({
    mode: 'history',
    routes,
});

Vue.component('main-app', require('./components/MainApp.vue').default);

const app = new Vue({
    el: '#app',
    router,
    store,
    vuetify: new Vuetify(),
});
