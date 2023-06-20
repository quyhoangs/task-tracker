
const project = {
    state: {
        projectName: '',
        colorSelected: '',
    },
    //mutations để thay đổi dữ liệu trong state của store (tương tự methods trong component)
    mutations: {
        SET_PROJECT_NAME(state, projectName) {
            console.log('SET_PROJECT_NAME', projectName);
            state.projectName = projectName;
        },
        SET_COLOR_SELECTED(state, colorSelected) {
            console.log('SET_COLOR_SELECTED', colorSelected);
            state.colorSelected = colorSelected;
        },
    },
};
export default project;
