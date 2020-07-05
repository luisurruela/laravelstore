import Vue from 'vue'
import VueRouter from 'vue-router'

import Store from './views/Store'
import Login from './views/Login'
import Error from './views/Error'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'store',
            component: Store
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '*',
            component: Error
        },
    ],
    mode: 'history'
})