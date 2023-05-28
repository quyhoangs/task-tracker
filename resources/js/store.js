import { createStore } from 'vuex'; // Import createStore từ vuex
import axios from 'axios'; // Import axios để gửi request

const store = createStore({
    namespaced: true, // Để có thể sử dụng module mode trong Vuex
    state: {
        accessToken: null, // Token của người dùng
        user: null,
    },
    // Các mutations để thay đổi state của store
    mutations: {
        // Thay đổi token và user trong state của store khi người dùng đăng nhập
        SET_TOKEN(state, token) {
            state.accessToken = token; // Thay đổi token trong state của store thành token được truyền vào (đăng nhập thành công)
        },
        // Thay đổi user trong state của store khi người dùng đăng nhập
        SET_USER(state, user) {
            state.user = user;
        }
    },
    // Các actions để commit mutations và thực hiện các side effect (gọi API, ...)
    actions: {

        // Gửi request lên server để đăng ký người dùng mới và sau đó đăng nhập luôn
        async registerUser({ commit }, credentials) {
            let response = await axios.post('/api/register', credentials);
            return this.dispatch('attempt', response.data.token);
        },

        // Gửi request lên server để đăng nhập và attempt để lưu token và user vào state của store nếu thành công
        async login({ commit }, credentials) {
            let response = await axios.post('/api/login', credentials);
          return this.dispatch('attempt', response.data.token);
        },

        // attempt sẽ lưu token và user vào state của store nếu token đã được lưu trong localStorage
        // trước đó (người dùng đã từng đăng nhập) hoặc nếu request lên server thành công (người dùng vừa đăng nhập)
        async attempt({ commit, state }, token) {

            if (token) { // Nếu token được truyền vào (người dùng vừa đăng nhập) thì lưu token vào state của store
                commit('SET_TOKEN', token);
            }

            //
            if (!state.accessToken) {
                // state.accessToken = VueCookies.get('token');
                return; // Nếu không có token nào trong state của store thì không làm gì cả (chưa đăng nhập)
            }

            try {
                // Gửi request lên server để lấy thông tin user dựa vào token đã lưu trong state của store
                let response = await axios.get('/api/user');
                console.log('USER',response.data);
                commit('SET_USER', response.data);
            }
            catch (e) {
                // Nếu request lên server bị lỗi thì xóa token và user trong state của store đi
                commit('SET_TOKEN', null);
                commit('SET_USER', null);
                router.push({ name: 'Login' });
            }
        },

        //Logout user xoá token và user trong state của store đi
         logout({ commit }) {
            return axios.post('/api/logout').then(() => {
                commit('SET_TOKEN', null);
                commit('SET_USER', null);
            });
        }

    },
    // getters để lấy dữ liệu từ state của store (tương tự computed trong component)
    getters: {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa (có token và user trong state của store hay không)
        authenticated(state) {
            return state.user && state.accessToken;
        },
        // Lấy thông tin user từ state của store (nếu có)
        user(state) {
            // Trả về null nếu không có user trong state của store (chưa đăng nhập) hoặc trả về thông tin user nếu có
            return state.user;
        }
    }

});

export default store;
