import { createStore } from 'vuex';
import authStore from './auth/index.js';
import project from './project/index.js';

const store  = createStore({
  modules: {
    auth: authStore,
    project: project,
  },
});

export default store ;
