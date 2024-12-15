// import axios from 'axios';
// import router from "../../router";

// // Chặn request nếu token không hợp lệ và redirect về trang login
// axios.interceptors.response.use(
//     response => response,
//     error => {
//       if (error.response.status === 401) {
//         // Redirect user to login page
//         router.push('/login');
//       }
//       return Promise.reject(error);
//     }
//   );
