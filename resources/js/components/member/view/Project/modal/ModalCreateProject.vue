<template>
    <div class="fixed z-50 top-0 left-0 right-0 bottom-0 flex justify-center items-center ">
        <div class="bg-gray-500 bg-opacity-50 absolute top-0 left-0 right-0 bottom-0"></div>
        <div class="bg-white rounded-lg z-10 ">
            <div class="grid gap-8 grid-cols-3 rounded-lg bg-gradient-to-b from-sky-200 to-sky-100">

                <!-- Cột bên trái chứa các bước tiến trình -->
                <div class="flex flex-col mt-32 ml-10 ">
                    <div v-for="(step, index) in steps" :key="index" class="flex items-center relative">
                        <!-- Hiển thị tick xanh nếu bước đó đã hoàn thành -->
                        <div class="mt-4" v-if="currentStep > index + 1">
                            <svg class="mb-4 h-7 w-7 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </div>
                        <!-- Hiển thị Các Step từ 1-4 -->
                        <svg v-else xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256"
                            class="text-green-500">
                            <path fill="currentColor" :d="getStepIcon(index + 1)" />
                        </svg>
                        <!-- Hiển thị Title các step -->
                        <div class="font-semibold text-green-600 py-2 ml-1" v-if="currentStep > index + 1">{{ step.title }}
                        </div>
                        <div class="font-semibold text-gray-400  py-2 ml-1" v-else>{{ step.title }}</div>
                    </div>
                </div>

                <div class="bg-gray-200 col-span-2 pr-20 pl-20 rounded-lg">
                    <button class=" text-gray-500 hover:text-gray-700 ml-auto bg-white rounded float-right mb-3 mt-5"
                        @click="closeModal">
                        <i
                            class="fas fa-times transform transition duration-500 hover:rotate-180 hover:text-green-600 p-2 ">
                        </i>
                    </button>


                    <div class="p-2">
                        <!-- Step 1: Upload Avatar -->
                        <UploadAvatar v-if="currentStep === 1" />
                        <ProjectInfo v-if="currentStep === 2" />
                        <CustomsStatus v-if="currentStep === 3" />
                        <InviteMembers v-if="currentStep === 4" />

                        <div class="flex items-center justify-end p-5">
                            <button v-if="currentStep > 1" @click="goToPreviousStep"
                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow ml-2">
                                Previous
                            </button>
                            <button v-if="currentStep < 4" @click="goToNextStep"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 border border-blue-500 rounded shadow ml-2">
                                Next
                            </button>
                            <button @click="createProject" v-if="currentStep === 4"
                                class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import UploadAvatar from '../modal/StepCreateProject/UploadAvatar.vue';
import ProjectInfo from '../modal/StepCreateProject/ProjectInfo.vue'
import CustomsStatus from '../modal/StepCreateProject/CustomsStatus.vue'
import InviteMembers from '../modal/StepCreateProject/InviteMembers.vue'

export default {
    components: {
        UploadAvatar,
        ProjectInfo,
        CustomsStatus,
        InviteMembers,
    },
    data() {
        return {
            currentStep: 1,
            // Các thông tin cần thiết khác
            steps: [
                { title: 'Upload Avatar' },
                { title: 'ProjectInfo' },
                { title: 'Customs Status' },
                { title: 'Invites Members' }
            ]
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
        goToPreviousStep() {
            this.currentStep--; // Di chuyển đến bước trước đó
        },
        goToNextStep() {
            this.currentStep++; // Di chuyển đến bước tiếp theo
        },
        getStepIcon(stepIndex) {
            switch (stepIndex) {
                case 1:
                    return "M128 26a102 102 0 1 0 102 102A102.12 102.12 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm10-138v96a6 6 0 0 1-12 0V91.21L111.33 101a6 6 0 0 1-6.66-10l24-16a6 6 0 0 1 9.33 5Z";
                case 2:
                    return "M128 26a102 102 0 1 0 102 102A102.12 102.12 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm24-95.95l-36 48h36a6 6 0 0 1 0 12h-48a6 6 0 0 1-4.8-9.6l43.17-57.56A18 18 0 1 0 111 98a6 6 0 1 1-11.31-4A30 30 0 1 1 152 122.05Z";
                case 3:
                    return "M128 26a102 102 0 1 0 102 102A102.12 102.12 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm30-66a34 34 0 0 1-58.29 23.79a6 6 0 0 1 8.58-8.39A22 22 0 1 0 124 130a6 6 0 0 1-4.92-9.44L140.48 90H104a6 6 0 0 1 0-12h48a6 6 0 0 1 4.92 9.44l-22.53 32.18A34.06 34.06 0 0 1 158 152Z";
                case 4:
                    return "M128 26a102 102 0 1 0 102 102A102.12 102.12 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm38-74a6 6 0 0 1-6 6h-10v26a6 6 0 0 1-12 0v-26H96a6 6 0 0 1-5.69-7.9l24-72a6 6 0 1 1 11.38 3.8L104.32 138H138v-26a6 6 0 0 1 12 0v26h10a6 6 0 0 1 6 6Z";
                default:
                    return "";
            }
        }
    },
};
</script>

<style scoped>
/* Căn giữa màn hình  modal */
.modal {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
