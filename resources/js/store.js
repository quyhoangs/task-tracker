import { createStore } from 'vuex';

const store = createStore({
  state() {
    return {
      user: null, // Đối tượng user
      isAuthenticated: false, // Trạng thái xác thực
      isLoading: false, // Trạng thái đang tải
      error: null, // Lỗi
      accessToken: null, // Khởi tạo state accessToken
    };
  },
  mutations: {
    // Mutation để cập nhật trạng thái user
    updateUser(state, user) {
      state.user = user;
    },
    // // Mutation để cập nhật trạng thái xác thực
    setIsAuthenticated(state, isAuthenticated) {
        state.isAuthenticated = isAuthenticated;
    },
    // Mutation để cập nhật trạng thái đang tải
    updateLoading(state, isLoading) {
      state.isLoading = isLoading;
    },
    // Mutation để cập nhật lỗi
    updateError(state, error) {
      state.error = error;
    },
    setAccessToken(state, token) {
        state.accessToken = token; // Cập nhật giá trị accessToken trong state
        // Lưu token vào localStorage
        localStorage.setItem('accessToken', token);
      },
  },
  actions: {
    async registerUser(context, userData) {
        // Gọi API để đăng ký người dùng
        try {
          const response = await axios.post('api/register', userData);
          // Cập nhật trạng thái dữ liệu trong store
          context.commit('updateUserData', response.data.user);
          context.commit('updateIsRegistered', true);
          context.commit('updateError', null);
        } catch (error) {
          context.commit('updateError', error.message);
        }
      },
    // Action để đăng nhập
    login({ commit }, formData) {
        return new Promise((resolve, reject) => {
            //• Chỉ gửi csrf-token trong lần đầu yêu cầu login thành công ,
            //các lần sau đó axios tự gắn token này vào api mỗi khi bạn gửi lên serve
          axios.get('/sanctum/csrf-cookie').then(response => {
            axios.post('/api/login', formData).then(response => {
              // Lưu token vào Vuex state
              commit('setAccessToken', response.data.token);
              resolve(response);
            }).catch(error => {
              reject(error);
            });
          });
        });
      },
    // Action để đăng xuất
    async  logout(context) {
      // Thực hiện xử lý đăng xuất, ví dụ API request
      context.commit('updateLoading', true);
      try {
        // Gọi API để đăng xuất
        await api.logout();
        // Cập nhật trạng thái user và xác thực không thành công
        context.commit('updateUser', null);
        context.commit('updateAuthentication', false);
        context.commit('updateError', null);
      } catch (error) {
        // Nếu có lỗi, cập nhật trạng thái lỗi
        context.commit('updateError', error.message);
      } finally {
        context.commit('updateLoading', false);
      }
    }
  },
  getters: {
    // Getter để lấy trạng thái user
    getUser(state) {
      return state.user;
    },
    // Getter để lấy trạng thái xác thực
    isAuthenticated(state) {
        return state.isAuthenticated;
    },
    // Getter để lấy trạng thái đang tải
    getLoading(state) {
      return state.isLoading;
    },
    // Getter để lấy lỗi
    getError(state) {
      return state.error;
    }
  }
});

export default store;
