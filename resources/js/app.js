import Vue from 'vue'
import router from './router/index'
import store from './store/index'
import './bootstrap'

window.Vue = Vue.default;

const app = new Vue({
    el: '#app',
    router,
    store,
});
