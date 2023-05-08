<template>
    <GuestLayout> </GuestLayout>
    <section class="bg-gradient-to-r from-cyan-400 to-blue-400 rounded  ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-card rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Register an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" @submit.prevent="handleRegister">
                        <!-- @csrf -->
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                name</label>
                            <input v-model="name" type="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="JonhDoe">
                            <p v-if="errors.name" class="text-red-500 mt-1 text-sm">{{ errors.name }}</p>
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <input v-model="email" type="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com">
                            <p v-if="errors.email" class="text-red-500 mt-1 text-sm">{{ errors.email }}</p>
                        </div>

                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input v-model="password" type="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <p v-if="errors.password" class="text-red-500 mt-1 text-sm">{{ errors.password }}</p>
                        </div>
                        <div>
                            <label for="confirm-password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                password</label>
                            <input v-model="password_confirmation" type="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <p v-if="errors.password_confirmation" class="text-red-500 mt-1 text-sm">{{
                                errors.password_confirmation }}</p>
                        </div>
                        <button type="submit"
                            class="w-full bg-green-500 hover:bg-green-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center animate-pulse">
                            Create an account
                        </button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="/login"
                                class="font-medium text-primary-500  hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>

                    <!-- Modal hiển thị thông báo xác thực tài khoản -->
                    <div :class="{ 'hidden': !isModalVisible }" class=" relative z-10 " aria-labelledby="modal-title"
                        role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity "></div>

                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div
                                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div
                                                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">

                                                <svg fill="none" stroke="currentColor" stroke-width="1.5"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                <h3 class="text-base font-semibold leading-6 text-gray-900"
                                                    id="modal-title">Register Suscess </h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">
                                                        We have sent you an email to confirm your account.
                                                        plese check your email and click on the link to verify your account.
                                                        Thanks for your registration.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                        <button @click="handleModalClosed" type="button"
                                            class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-800 sm:ml-3 sm:w-auto">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
import GuestLayout from '../layouts/GuestLayout.vue';
import axios from 'axios'; // Điều này có thể không cần vì Axios đã được đăng ký toàn cục
import { mapActions } from 'vuex';

export default {
    name: 'Register',
    components: {
        GuestLayout
    },
    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            isModalVisible: false, // Trạng thái hiển thị modal, ban đầu là ẩn
            errors: {},
        };
    },
    methods: {
        ...mapActions(['registerUser']), // Sử dụng mapActions để gọi action registerUser từ store
        handleRegister() {
            if (this.validate()) {
                // Gọi action đăng ký người dùng từ store
                this.registerUser({
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation,

                }).then(response => {
                    // Reset dữ liệu của các input
                    this.name = '';
                    this.email = '';
                    this.password = '';
                    this.password_confirmation = '';
                    // Xử lý kết quả trả về từ API
                    console.log(response); // Nếu API trả về dữ liệu, bạn có thể xử lý dữ liệu ở đây
                    this.isModalVisible = true;
                    // Hoặc chuyển hướng sang trang đăng nhập, hoặc hiển thị thông báo thành công, tùy theo yêu cầu của bạn
                }).catch(error => {
                    // Xử lý lỗi validation từ API
                    this.errors = error.response.data.errors;
                    if (error.response.status === 429) {
                        const retryAfter = error.response.headers['retry-after'];
                        alert(`Too many attempts, please try again in ${retryAfter} seconds.`);
                    }
                    // else {
                    //     console.log(error);
                    //     alert('Register failed.');
                    // }

                });
            }

        },
        handleModalClosed() {
            // Xử lý sự kiện khi modal được đóng
            // Có thể thực hiện chuyển hướng sang trang khác hoặc thực hiện các xử lý khác tùy theo yêu cầu của bạn
            this.isModalVisible = false;
        },
        validate() {
            console.log('validate');
            let errors = {};

            if (!this.name) {
                errors.name = 'Please enter your name';
            }

            if (!this.email) {
                errors.email = 'Please enter your email';
            } else if (!/\S+@\S+\.\S+/.test(this.email)) {
                errors.email = 'Please enter a valid email address';
            }

            if (!this.password) {
                errors.password = 'Please enter a password';
            } else if (this.password.length < 8) {
                errors.password = 'Password must be at least 8 characters';
            }

            if (!this.password_confirmation) {
                errors.password_confirmation = 'Please confirm your password';
            } else if (this.password_confirmation !== this.password) {
                errors.password_confirmation = 'Passwords do not match';
            }


            this.errors = errors;
            console.log(this.errors);
            return Object.keys(errors).length === 0;
        },
    }
};
</script>

