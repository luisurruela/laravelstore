import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'store',
            component: require('./views/Store')
        },
        {
            path: '/signin',
            name: 'login',
            component: require('./views/Login')
        },
        {
            path: '*',
            component: require('./views/404')
        },
    ],
    mode: 'history'
})