<template>
    <div class="antialiased sans-serif bg-gray-200 flex flex-col w-[600px] h-[600px]">
        <div class="mb-5">
            <div class="flex items-center">
                <div class="relative flex items-center bg-white border border-gray-300 rounded p-10">
                    <div class="relative my-6 inline-block mr-5">
                        <input v-model="projectName" type="text" placeholder="Facebook...." @input="validateName"
                            class="pl-20 w-[430px] h-10 px-4 text-sm placeholder-transparent transition-all border rounded outline-none focus-visible:outline-none peer border-slate-200 text-slate-500 autofill:bg-white invalid:border-pink-500 invalid:text-pink-500 focus:border-emerald-500 focus:outline-none invalid:focus:border-pink-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400" />
                        <label
                            class=" cursor-text peer-focus:cursor-default absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 transition-all before:absolute before:top-0 before:left-0 before:z-[-1] before:block before:h-full before:w-full before:bg-white before:transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-required:after:text-pink-500 peer-required:after:content-['\00a0*'] peer-invalid:text-pink-500 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-emerald-500 peer-invalid:peer-focus:text-pink-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400 peer-disabled:before:bg-transparent">
                            Project Name <span class="text-red-600">*</span>
                        </label>

                        <svg v-if="isInputValid"
                            class="mb-4 h-5 w-5 text-green-500 absolute top-1/2 right-2 transform -translate-y-1/2 mr-7"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd">
                            </path>
                        </svg>

                        <p v-if="!isNameValid" class="text-red-600 text-sm">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                class="h-4 w-4 hover:text-gray-600 inline-block text-red-600 mr-1"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.388 3.47 9.933 8.272 11.5.215.075.456.126.728.126.272 0 .513-.051.728-.126C17.53 19.683 21 15.138 21 9.75 21 4.335 16.42 0 11.999 0z">
                                </path>
                            </svg>
                            <span class="inline-block">{{ nameErrorMessage }}</span>
                        </p>
                        <small
                            class="absolute flex justify-between w-full px-4 py-1 text-xs transition text-slate-400 peer-invalid:text-pink-500">
                            <span>Note: This name will be displayed if you don't upload an avatar.</span>
                        </small>
                        <div v-if="projectName" class="absolute top-1/2 right-2 transform -translate-y-1/2 cursor-pointer">
                            <!-- Clear Input -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-400 hover:text-gray-600 mt-2"
                                viewBox="0 0 20 20" fill="currentColor" @click="clearInput">
                                <path
                                    d="M6.707 5.293a1 1 0 010 1.414L8.414 9l-1.707 1.293a1 1 0 11-1.414-1.414L7.586 7l-1.293-1.293a1 1 0 111.414-1.414L9 5.586l1.293-1.293a1 1 0 111.414 1.414L10.414 7l1.293 1.293a1 1 0 11-1.414 1.414L9 8.414l-1.293 1.293a1 1 0 11-1.414-1.414L7.586 7 6.293 5.707a1 1 0 010-1.414z" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative inline-block">
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-block items-center justify-center w-20 h-20 text-lg text-white rounded bg-emerald-500 "
                            :style="`background: ${colorSelected}; color: white`">

                            <div v-if="projectName" class="text-white text-xl ml-2 mt-2">
                                <span class="font-medium text-gray-600 dark:text-gray-300 ">{{
                                    getInitials(projectName) }}
                                </span>
                            </div>
                            <span
                                class="absolute inline-flex items-center justify-center gap-1 p-1 text-sm text-white bg-green-500 border-2 border-white rounded-full -top-1 -right-1">
                                <span class="sr-only"> 7 new emails </span>
                            </span>

                        </button>

                        <div v-show="isOpen" @click.away="isOpen = false"
                            class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg ">
                            <div class="rounded-md bg-white shadow-xs px-4 py-3">
                                <div class="flex flex-wrap -mx-2">
                                    <template v-for="(color, index) in colors" :key="index">
                                        <div class="px-2">
                                            <template v-if="colorSelected === color">
                                                <div class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white bg-"
                                                    :class="`bg-${color}-500`">
                                                </div>
                                            </template>

                                            <template v-if="colorSelected !== color">
                                                <div @click="colorSelected = color" @keydown.enter="colorSelected = color"
                                                    role="checkbox" tabindex="0" :aria-checked="colorSelected === color"
                                                    class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white focus:outline-none focus:shadow-outline"
                                                    :class="`bg-${color}-500`">
                                                </div>
                                            </template>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="flex items-center bg-white border border-gray-300 rounded p-10 mt-10">
                <div class="flex items-center py-3">
                    <div class="w-20 h-20 mr-4 flex-none rounded-full border overflow-hidden">
                        <img class="w-full h-full object-cover" :src="imageUrl" alt="Avatar Upload">
                    </div>
                    <label for="avatar-input" class="cursor-pointer">
                        <span
                            class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
                        <input id="avatar-input" type="file" class="hidden" @change="handleFileUpload">
                    </label>
                    <!-- Note : Avatar của bạn không được vượt quá 5MB -->
                </div>
                <small class="text-gray-400 ml-2">Note : Avatar của bạn không được vượt quá 5MB</small>
            </div>


        </div>
    </div>
</template>

<script>
import { debounce } from 'lodash';

export default {
    data() {
        return {
            isOpen: false,
            colors: ["blue", "teal", "green", "green", "red", "pink", "indigo", "yellow", "purple"],
            colorSelected: '',
            projectName: '',
            isNameValid: true,
            nameErrorMessage: '',
            isInputValid: false,
            imageUrl: '',
        };
    },
    //watch được sử dụng để theo dõi thay đổi của projectName và colorSelected
    watch: {
        projectName: {
            handler: debounce(function (newValue) {
                // Thực hiện các hành động khi projectName thay đổi
                // Commit giá trị mới vào store
                this.$store.commit('SET_PROJECT_NAME', newValue);
            }, 500),
            immediate: true, // Gọi handler ngay từ lúc khởi tạo component để đảm bảo lắng nghe thay đổi ban đầu
        },
        colorSelected(newValue) {
            // Thực hiện các hành động khi colorSelected thay đổi
            // Commit giá trị mới vào store
            this.$store.commit('SET_COLOR_SELECTED', newValue);
        },
    },

    mounted() {
        // Mặc định chọn màu green
        this.colorSelected = this.colors[3];

    },
    methods: {
        //Xử lý lấy các chữ cái đầu của tên project, VD : Facebook => FB
        getInitials(text) {
            if (text) {
                const words = text.split(' ');
                let initials = '';

                if (words.length === 1) {
                    initials = words[0].substring(0, 2).toUpperCase();
                } else {
                    initials = words
                        .map(word => word.charAt(0))
                        .join('')
                        .toUpperCase()
                        .substring(0, 2);
                }

                return initials;
            }

            return '';
        },
        /*
            Ví dụ, nếu text là "project name", thì quá trình sẽ diễn ra như sau:
            Tách text thành mảng words: ['project', 'name'].
            Lấy chữ cái đầu tiên của mỗi từ: ['p', 'n'].
            Kết hợp các chữ cái đầu tiên: 'pn'.
            Chuyển thành chữ hoa: 'PN'.
            Lấy 2 chữ cái đầu tiên: 'PN'.
            Trường hợp text chỉ có 1 từ, ví dụ 'Facebook', thì kết quả sẽ là 'FB'.
        */
        clearInput() {
            this.projectName = ''; // Xóa nội dung của input
            this.validateName();
        },

        validateName: debounce(function () {
            this.isInputValid = false;
            if (this.projectName.trim() === '') {
                this.isNameValid = false;
                this.nameErrorMessage = 'Project name is required.';
            } else if (this.projectName.length < 3) {
                this.isNameValid = false;
                this.nameErrorMessage = 'Project name must be at least 3 characters.';
            } else if (this.projectName.length > 20) {
                this.isNameValid = false;
                this.nameErrorMessage = 'Project name must be less than 20 characters.';
            } else if (/[^a-zA-Z0-9\s]/.test(this.projectName.trim())) {
                this.isNameValid = false;
                this.nameErrorMessage = 'Project name must contain only alphanumeric characters.';
            } else {
                this.isNameValid = true;
                this.nameErrorMessage = '';
                this.isInputValid = true;
            }
        }, 500),

        handleFileUpload(event) {
            // Lấy file từ event upload lên
            const file = event.target.files[0];
            // Kiểm tra kiểu tệp tin hợp lệ
            if (!['image/jpeg', 'image/png'].includes(file.type)) {
                alert('Please choose a JPEG or PNG image.');
                return;
            }

            // Kiểm tra kích thước tệp tin hợp lệ (giới hạn 2MB)
            if (file.size > 8 * 1024 * 1024) {
                alert('The image size exceeds the maximum allowed limit.');
                return;
            }

            // Tạo đối tượng FormData để gửi yêu cầu POST lên server với dữ liệu là file vừa chọn
            const formData = new FormData();

            // Thêm dữ liệu file vào formData với key là 'avatar' (tên phải trùng với tên của biến trong request)
            // và value là 'file' vừa chọn
            formData.append('avatar', file);
            // Khi gửi yêu cầu POST, dữ liệu tệp hình ảnh được đóng gói trong đối tượng FormData
            // và gửi đi qua một yêu cầu HTTP. Server sau đó có thể nhận dữ liệu này và xử lý nó
            // Thông thường, server sẽ có một endpoint xử lý tải lên ảnh
            axios.post('/api/projects', formData)
                .then(response => {
                    // Lưu URL của ảnh đã tải lên
                    this.imageUrl = response.data.path;
                })
                .catch(error => {
                    console.error(error);
                });
        },

    },

};
</script>

<style>
[x-cloak] {
    display: none;
}
</style>
