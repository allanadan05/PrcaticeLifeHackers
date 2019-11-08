import LandingPage from './components/LandingPage.vue'
import Login from './components/Login.vue'
import Register from './components/Register.vue'
import Services from './components/Services.vue'

export const routes = [
    {
        path: '/',
        component: LandingPage
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/services',
        component: Services
    }
]