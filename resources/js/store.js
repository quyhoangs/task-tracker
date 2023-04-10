import { createStore } from 'vuex'; // Import createStore từ vuex
import axios from 'axios'; // Import axios để gửi request

const store = createStore({
    namespaced: true,
    state: {
        accessToken: null, // Token của người dùng
        user: null,
    },
    mutations: {
        SET_TOKEN(state, token) {
            state.accessToken = token;
        },
        SET_USER(state, user) {
            state.user = user;
        }
    },
    actions: {
        async registerUser({ commit }, credentials) {
            let response = await axios.post('/api/register', credentials);
            return this.dispatch('attempt', response.data.token);
        },


        async login({ commit }, credentials) {
            let response = await axios.post('/api/login', credentials);
          return this.dispatch('attempt', response.data.token);
        },

        async attempt({ commit, state }, token) {
            if (token) {
                commit('SET_TOKEN', token);
            }

            //
            if (!state.accessToken) {
                return;
            }

            try {
                let response = await axios.get('/api/user');
                commit('SET_USER', response.data);
            }
            catch (e) {
                commit('SET_TOKEN', null);
                commit('SET_USER', null);
            }
        },
         logout({ commit }) {
            return axios.post('/api/logout').then(() => {
                commit('SET_TOKEN', null);
                commit('SET_USER', null);
            });
        }

    },
    getters: {
        authenticated(state) {
            return state.user && state.accessToken;
        },
        user(state) {
            return state.user;
        }
    }

});

export default store;
