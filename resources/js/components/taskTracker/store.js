import { createStore } from 'vuex';
import authStore from './authentication/store';
import project from './src/projectManagement/store';

const store  = createStore({
  modules: {
    auth: authStore,
    project: project,
  },
});

export default store ;
