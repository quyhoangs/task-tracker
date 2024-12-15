<template>
    <div class="fixed z-50 inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg absolute inset-5">
            <div class="flex flex-col h-full">
                <div>
                    <div class="flex items-center bg-gray-200">
                        <BreadCrumb :customClass="breadcrumbClass"></BreadCrumb>

                        <button class=" text-gray-500 hover:text-gray-700 ml-auto bg-white rounded "
                            @click="$emit('close')">
                            <i class="fas fa-times transform transition duration-500 hover:rotate-180
                                    hover:text-green-600 p-2 "></i>
                        </button>

                        <button class="text-gray-500 hover:text-gray-700 ml-4 mr-3">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>


                    </div>

                    <CreateTaskForm />
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import BreadCrumb from '../../../common/breadcrumb/BreadCrumb.vue';
import CreateTaskForm from '../modal/ModalCreateTask/CreateTaskForm.vue';
export default {
    components: {
        BreadCrumb,
        CreateTaskForm
    },
    data() {
        return {
            // ghi đè lên class trong component BreadCrumb
            //bằng cách truyền một prop chứa class mới vào component và sử dụng nó như là một dynamic class.
            breadcrumbClass: ' text-xs  bg-white ml-4 mt-2 mb-2  rounded ', // Class mới
        };
    },
    methods: {
        closeModal() {
            // Đóng modal
            this.$emit('closeModal');
        },
        createProject() {
            // Thực hiện logic tạo dự án ở đây
            // Sau khi tạo xong, có thể đóng modal bằng cách gọi this.closeModal()
        },
    },
};
</script>

