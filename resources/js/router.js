import { createWebHistory, createRouter } from 'vue-router';
import HomeLayout from './components/guest/pages/HomeLayout.vue';
import ContactLayout from './components/guest/pages/ContactLayout.vue';
import AboutLayout from './components/guest/pages/AboutLayout.vue';
import LoginLayout from './components/guest/pages/LoginLayout.vue';
import RegisterLayout from './components/guest/pages/RegisterLayout.vue';

import MemberLayout from './components/member/layouts/MemberLayout.vue';
import ProjectTask from './components/member/view/ProjectTask.vue';

import PersonInfo from './components/member/view/Profile/PersonInfo.vue';
import WorkingStatus from './components/member/view/Profile/WorkingStatus.vue';
import Password from './components/member/view/Profile/Password.vue';
import LanguageRegion from './components/member/view/Profile/LanguageRegion.vue';
import SessionHistory from './components/member/view/Profile/SessionHistory.vue';


import authMiddleware from './components/middeware/auth.js';

const routes = [

    //Router guest
    // {
    //     path : '/home',
    //     name : 'Home',
    //     component : HomeLayout
    // },
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
        component : () => import('./components/guest/pages/RegisterLayout.vue')
    },

    //ROuter member
    {
        path : '/profile',
        name : 'Profile',
        component :  () => import('./components/member/view/Profile.vue'),
        meta: {
            middleware: [authMiddleware] // Đăng ký middleware auth vào đây
        },
        children: [
            {
              path: 'person-info',
              name: 'PersonInfo',
              component: PersonInfo
            },
            {
              path: 'working-status',
              name: 'WorkingStatus',
              component: WorkingStatus
            },
            {
              path: 'password',
              name: 'Password',
              component: Password
            },
            {
              path: 'language-region',
              name: 'LanguageRegion',
              component: LanguageRegion
            },
            {
              path: 'session-history',
              name: 'SessionHistory',
              component: SessionHistory
            }
          ]
    },
    {
        path : '/dashboard',
        name : 'Dashboard',
        component :  () => import('./components/member/view/Dashboard.vue'),
        meta: {
            middleware: [authMiddleware] // Đăng ký middleware auth vào đây
        }
    },
    {
        path : '/home',
        name : 'HomeMember',
        component :  () => import('./components/member/view/HomeMember.vue'),
        meta: {
            middleware: [authMiddleware] // Đăng ký middleware auth vào đây
        }
    },
    {
        path : '/project',
        name : 'ProjectTask',
        component :  () => import('./components/member/view/ProjectTask.vue'),
        meta: {
            middleware: [authMiddleware] // Đăng ký middleware auth vào đây
        },
        children: [
            {
              path: '', // path: '' tức là path mặc định, nó sẽ được hiển thị khi /project được truy cập
              name: 'ListProject',
              component :  () => import('./components/member/view/ListProject.vue'),
            },
            {
                path: 'list-task',
                name: 'CardProjectTask',
                component :  () => import('./components/member/view/Project/card/CardProjectTask.vue'),
            },

          ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    base: process.env.BASE_URL,
    routes
});

// Đăng ký middleware vào trước khi navigation xảy ra
router.beforeEach((to, from, next) => {
    // Lấy danh sách middleware được đăng ký cho route hiện tại
    const middleware = to.meta.middleware;
    // Nếu không có middleware nào được đăng ký, cho phép tiếp tục
    if (!middleware) {
      return next();
    }
    // Thực thi middleware theo thứ tự
    const context = { to, from, next, router };
    middleware[0](to, from, next); // Sửa lại đây, truyền to, from, next vào middleware
});

// Hàm thực thi chuỗi middleware theo thứ tự
function middlewarePipeline(context, middleware, index) {
    const nextMiddleware = middleware[index];
    // Nếu không có middleware nào khác để thực thi, trả về hàm next() của router
    if (!nextMiddleware) {
      return context.router.next;
    }
    // Thực thi middleware tiếp theo
    return () => {
      const nextPipeline = middlewarePipeline(context, middleware, index + 1);
      nextMiddleware({ ...context, next: nextPipeline });
    };
  }



export default router;
