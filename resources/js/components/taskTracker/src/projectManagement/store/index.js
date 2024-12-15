import { formatDate } from '@/src/helpers.js';

const project = {
    namespaced: true,
    state: {
        projectName: '',
        colorSelected: '',
        uploadedImage: '', // Ảnh được lưu dưới dạng base64
        imageFileInfor : '',
        description: '',
        deadline : '',
        notes: '',
        // Để lưu id của project hiện tại, trong trường hợp người dùng muốn back và edit project
        id: null,
    },
    //mutations để thay đổi dữ liệu trong state của store (tương tự methods trong component)
    mutations: {
        SET_PROJECT_NAME(state, projectName) {
            console.log('mutations SET_PROJECT_NAME', projectName);
            state.projectName = projectName;
        },
        SET_COLOR_SELECTED(state, colorSelected) {
            state.colorSelected = colorSelected;
        },
        SET_IMAGE: (state, uploadedImage) => {
            state.uploadedImage = uploadedImage; // Cập nhật ảnh trong store
        },
        SET_IMAGE_FILE_INFOR: (state, imageFileInfor) => {
            console.log('SET_IMAGE_FILE_INFOR', imageFileInfor);
            state.imageFileInfor = imageFileInfor; // Cập nhật ảnh trong store
        },
        //Form 2 : Project Infors
        SET_DESCRIPTION(state, description) {
            state.description = description;
        },
        SET_DEADLINE(state, deadline) {
            state.deadline = deadline;
        },
        SET_NOTES(state, notes) {
            state.notes = notes;
        },
        SET_PROJECT_ID(state, id) {
            state.id = id;
          },
    },
    actions: {
        updateProjectName({ commit }, newName) {
            console.log('actions updateProjectName', newName);
          commit('SET_PROJECT_NAME', newName);
        },
        updateColorSelected({ commit }, newColor) {
            commit('SET_COLOR_SELECTED', newColor);
        },
        updateImageBase64: ({ commit }, uploadedImage) => {
            commit('SET_IMAGE', uploadedImage); // Gọi mutation để cập nhật ảnh trong store
        },
        updateImageFileInfor: ({ commit }, imageFileInfor) => {
            console.log('updateImageFileInfor', imageFileInfor);
            commit('SET_IMAGE_FILE_INFOR', imageFileInfor); // Gọi mutation để cập nhật ảnh trong store
        },
        //Form 2 : Project Infors
        updateDescription({ commit }, newDescription) {
            console.log('actions updateDescription', newDescription);
            commit('SET_DESCRIPTION', newDescription);
        },
        updateDeadline({ commit }, newDeadline) {
            commit('SET_DEADLINE', newDeadline);
        },
        updateNotes({ commit }, newNotes) {
            commit('SET_NOTES', newNotes);
        },

        async createProject ({ commit, state }) {
            const deadlineObject = {
                start_date: formatDate(state.deadline[0]),// Kiểu Date là DD/MM/YYYY
                end_date: formatDate(state.deadline[1]),
              };

            const formData = new FormData();
            formData.append('projectName', state.projectName);
            formData.append('colorAvatar', state.colorSelected);
            formData.append('avatar', state.imageFileInfor);
            formData.append('description', state.description);
            formData.append('deadline', JSON.stringify(deadlineObject));// Convert 1 object JavaScript thành một chuỗi JSON.
            formData.append('notes', state.notes);

            // Nếu id khác null thì gửi lên server để update project
            //trường hợp này là update project User đã tạo trước đó và muốn back lại để edit
            if (state.id !== null) {
                formData.append('id', state.id);
            }

            try {
                const response = await axios({
                    method: 'post',
                    url: '/api/projects',
                    data: formData,
                    headers: {
                    // 'Content-Type' : 'multipart/form-data' trong trường hợp gửi dữ liệu dạng form-data
                    // trong đó có ảnh hoặc file
                      'Content-Type': 'multipart/form-data'
                    }
                  });
                  commit('SET_PROJECT_ID', response.data.data.id);
                console.log('response', response);
                return response;
            } catch (error) {
                console.log('error', error);
                return error;
            }
        }


      },
    getters: {
        //Form 1 :Upload Avatar
        getProjectName(state) {
            console.log('getters getProjectName', state);
          return state.projectName;
        },
        getColorSelected(state) {
          return state.colorSelected;
        },
        getImageBase64: (state) => state.uploadedImage, // Lấy ảnh từ store
        getImageFileInfor: (state) => state.imageFileInfor, // Lấy ảnh từ store

        //Form 2 : Project Infors
        getDescription(state) {
            return state.description;
        },
        getDeadline(state) {
            return state.deadline;
        },
        getNotes(state) {
            return state.notes;
        }

      },
};
export default project;

