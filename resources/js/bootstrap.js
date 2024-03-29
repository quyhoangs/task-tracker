import VueCookies from 'vue-cookies';
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// handle CSRF token , CORS issue
window.axios.defaults.withCredentials = true;

// Lấy token từ localStorage hoặc từ cookie (tùy theo cách lưu trữ của bạn)
// const token = localStorage.getItem('token') || VueCookies.get('token');

// // Thêm token vào header của các yêu cầu Axios
// if (token) {
//     window.axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
// }

// handle CSRF token, CORS issue


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
