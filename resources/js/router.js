import { createWebHistory, createRouter } from 'vue-router';
import HomeLayout from './components/guest/pages/HomeLayout.vue';
import ContactLayout from './components/guest/pages/ContactLayout.vue';
import AboutLayout from './components/guest/pages/AboutLayout.vue';
import LoginLayout from './components/guest/pages/LoginLayout.vue';
import RegisterLayout from './components/guest/pages/RegisterLayout.vue';

import MemberLayout from './components/member/layouts/MemberLayout.vue';
import ProjectTask from './components/member/view/ProjectTask.vue';


const routes = [

    //Router guest
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
      },

    //ROuter member
      {
        path : '/project',
        name : 'Project',
        component : ProjectTask,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
