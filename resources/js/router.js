import { createWebHistory, createRouter } from 'vue-router';
import HomeLayout from './components/guest/pages/HomeLayout.vue';
import ContactLayout from './components/guest/pages/ContactLayout.vue';
import AboutLayout from './components/guest/pages/AboutLayout.vue';

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
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
