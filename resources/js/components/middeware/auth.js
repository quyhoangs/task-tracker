import store from '../../store.js';
import VueCookies from 'vue-cookies';

export default function auth(to, from, next) { // Đảm bảo next được truyền vào đúng cách

      // Kiểm tra giá trị của biến isAuthenticated trong cookies
  const isAuthenticated = VueCookies.get('isAuthenticated');

  // Nếu isAuthenticated = true, cho phép đi tiếp
  if (isAuthenticated === 'true') {
    next();
  }


  if (!store.getters.isAuthenticated) { // Nếu chưa đăng nhập
    return next({ name: 'Login', query: { redirect: 'project' } }); // Chuyển hướng đến trang đăng nhập
  }

  //Nếu trong cokie  isAuthenticated = true, cho phép đi tiếp


  return next(); // Gọi hàm next để tiếp tục thực hiện request
}
