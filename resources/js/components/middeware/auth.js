import store from '../../store.js';

export default function auth(to, from, next) {
  // Kiểm tra xem người dùng đã đăng nhập hay chưa
  const authUser = store.getters["auth/authUser"];
  if (!authUser) { // Nếu chưa đăng nhập
    // Dispatch action để lấy thông tin người dùng từ server
    store.dispatch("auth/getAuthUser").then(() => {
      // Kiểm tra lại xem người dùng đã đăng nhập hay chưa
      const authUserAfterFetch = store.getters["auth/authUser"];
      if (!authUserAfterFetch) { // Nếu chưa đăng nhập sau khi lấy thông tin từ server
        // Redirect đến trang đăng nhập với query parameter redirect là đường dẫn của route hiện tại
        return next({ name: 'Login', query: { redirect: to.fullPath } });
      } else {
        // Nếu đã đăng nhập, cho phép truy cập vào route
        return next();
      }
    });
  } else {
    // Nếu đã có thông tin người dùng trong Vuex store, cho phép truy cập vào route
    return next();
  }
}
