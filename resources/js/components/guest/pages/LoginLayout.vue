<template>
    <GuestLayout> </GuestLayout>
    <section
        class="bg-gradient-to-r from-cyan-400 to-blue-400 rounded flex flex-col md:flex-row h-screen items-center justify-center  ">

        <div class="bg-gray-700 rounded p-5  w-full md:max-w-md  md:mx-auto md:w-1/2 xl:w-1/3 ">
            <div class="w-full h-100 ">

                <h1 class="text-xl md:text-2xl font-bold leading-tight  text-white">Log in to your account</h1>

                <form class="mt-6 p-3" @submit.prevent="handleLogin">
                    <!-- @csrf -->
                    <div>
                        <label class="block  text-white">Email Address</label>
                        <input type="email" name="email" id="" placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-300 mt-2 border focus:border-blue-500 focus:bg-card focus:outline-none"
                            v-model="formData.email">
                    </div>

                    <div class="mt-4 mb-2">
                        <label class="block text-white">Password</label>
                        <input type="password" name="password" id="" placeholder="Enter Password" minlength="6"
                            class="w-full px-4 py-3 rounded-lg bg-gray-300 mt-2 border focus:border-blue-500 focus:bg-card focus:outline-none"
                            required v-model="formData.password">
                    </div>

                    <div class="flex items-center justify-between text-right">
                        <div class=" flex items-center text-gray-500">
                            <input type="checkbox" id="remember_me" name="remember_me" class="mr-2" />
                            <label for="remember_me" class="ml-2 text-white">Remember me</label>
                        </div>
                        <a href="api/forget-password"
                            class="text-sm font-semibold text-white hover:text-blue-700 focus:text-blue-700 ">
                            Forgot Password?
                        </a>
                    </div>

                    <button type="submit"
                        class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                                                                                                                                                                                                                                                                                                                                                                    px-4 py-3 mt-6">Log
                        In</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <div class="p-4">
                    <button type="button"
                        class="bg-white mb-1 w-full block bg-card hover:bg-gray-300 focus:bg-gray-300 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                class="w-6 h-6" viewBox="0 0 48 48">
                                <defs>
                                    <path id="a"
                                        d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                </defs>
                                <clipPath id="b">
                                    <use xlink:href="#a" overflow="visible" />
                                </clipPath>
                                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                                <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                                <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                            </svg>
                            <span class="ml-4"> Log in with Google </span>
                        </div>
                    </button>

                    <button type="submid"
                        class="bg-white w-full block bg-card hover:bg-gray-300 focus:bg-gray-300 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            <span class="ml-4"> Log in with Github </span>
                        </div>
                    </button>
                </div>

                <p class="mt-8">Need an account? <a href="/register"
                        class="text-blue-500 hover:text-blue-700 font-semibold">Create an account</a></p>
            </div>
        </div>

    </section>
</template>

<script>
import GuestLayout from '../layouts/GuestLayout.vue';

export default {
    name: 'Login',
    components: {
        GuestLayout
    },
    data() {
        return {
            formData: {
                email: '',
                password: '',
            },
        };
    },
    methods: {
        handleLogin() {
            //• Chỉ gửi csrf-token trong lần đầu yêu cầu login thành công ,
            //các lần sau đó axios tự gắn token này vào api mỗi khi bạn gửi lên serve
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/api/login', this.formData).then(response => {
                    this.$router.push({ name: 'Home' });
                    console.log(response);
                });
            });
        }
    }
};
</script>

