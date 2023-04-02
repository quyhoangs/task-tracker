/*
common: chứa các component dùng chung trong toàn bộ dự án như Header, Footer, Button, Input, Modal, Dropdown, Tooltip, Alert, Badge, Checkbox, Radio, v.v.
layout: chứa các component layout của trang như Navbar, Sidebar, Breadcrumbs, Pagination, Cards, Tabs, v.v.
pages: chứa các component được sử dụng trong từng trang cụ thể của dự án như HomePage, LoginPage, RegisterPage, ProfilePage, v.v.
widgets: chứa các component nhỏ hơn, dùng để hiển thị thông tin như Statistic, Chart, Calendar, v.v.
*/

import './bootstrap';

import { createApp } from 'vue';
import router from './router.js'

import MemberLayout from './components/member/layouts/MemberLayout.vue'

createApp(MemberLayout)
    .use(router)
    .mount("#app")
