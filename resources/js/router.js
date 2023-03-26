import { createWebHistory, createRouter } from 'vue-router';
import HomeLayout from './components/guest/pages/HomeLayout.vue';
import ContactLayout from './components/guest/pages/ContactLayout.vue';
import AboutLayout from './components/guest/pages/AboutLayout.vue';
import LoginLayout from './components/guest/pages/LoginLayout.vue';
import RegisterLayout from './components/guest/pages/RegisterLayout.vue';

const routes = [
    {
        path : '/home',
        name : 'Home',
        component : HomeLayout
    },
    {
        path : '/contact',
        name : 'Contact',
        component : ContactLayout
    },
    {
        path : '/about',
        name : 'About',
        component : AboutLayout
    },
    {
        path : '/login',
        name : 'Login',
        component : LoginLayout
    },
    {
        path : '/register',
        name : 'Register',
        component : RegisterLayout
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
