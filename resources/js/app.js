import Vue from 'vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import { Form, HasError, AlertError } from 'vform'
import StoreData from './store/store'


require('./bootstrap');

// window.Vue = require('vue');


//Vform
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)



//Routes
Vue.use(VueRouter)
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default},
    { path: '/articles', component: require('./components/Articles.vue').default},
]

const router = new VueRouter({
    mode: 'history',
    routes
})

//Store
Vue.use(Vuex);

const store = new Vuex.Store(
    StoreData
)


//Components
Vue.component('sidebar', require('./components/Sidebar.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);



const app = new Vue({
    el: '#app',
    router,
    store
});
