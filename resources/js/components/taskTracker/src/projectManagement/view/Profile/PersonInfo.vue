<template>
    <div class="grid grid-cols-3 gap-4">

        <div class="col-span-2">
            <UserInformation> </UserInformation>
        </div>

        <div class="col-span-1">
            <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3 ">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Platform Settings</h2>
                    <h3 class="text-md font-medium mb-2">ACCOUNT</h3>
                    <div class="flex items-center mb-2">
                        <label class="relative inline-flex items-center mr-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                            </div>
                            <span class="ml-3 text-sm">Nhận email khi có task mới</span>
                        </label>

                    </div>

                    <div class="flex items-center mb-2">
                        <label class="relative inline-flex items-center mr-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                            </div>
                            <span class="ml-3 text-sm">Nhận email khi có task mới</span>
                        </label>

                    </div>

                    <h3 class="text-md font-medium mb-2">APPLICATION</h3>
                    <div class="flex items-center mb-2">
                        <label class="relative inline-flex items-center mr-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                            </div>
                            <span class="ml-3 text-sm">Nhận email khi có task mới</span>
                        </label>

                    </div>

                    <div class="flex items-center">
                        <label class="relative inline-flex items-center mr-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                            </div>
                            <span class="ml-3 text-sm">Nhận email khi có task mới</span>
                        </label>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="flex">
        <div class="w-1/4 mr-2">
            <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3 ">

                <!-- ID task and dropdown -->
                <div class="overflow-auto">
                    <p class="float-left text-xs text-accent font-bold">3 Dự án gần nhất</p>
                    <button
                        class='mt-[-18px] float-right items-center text-xl hover:cursor-pointer bg-lightPrimary p-2 text-brand-500 hover:bg-gray-100 dark:bg-navy-700 dark:text-white dark:hover:bg-white/20 dark:active:bg-white/10 rounded-lg'>
                        <svg stroke="black" fill="black" stroke-width="0" viewBox="0 0 16 16" class="h-6 w-6" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                            </path>
                        </svg>
                    </button>
                </div>

                <p>
                    Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally
                    difficult paths, choose the one more painful in the short term (pain avoidance is
                    creating an illusion of equality).

                </p>

                <!-- Full Name:   Alec M. Thompson -->
                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Full Name:</div>
                    <div class="ml-2 text-sm text-gray-500">Alec M. Thompson</div>
                </div>

                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Mobile:</div>
                    <div class="ml-2 text-sm text-gray-500">(44) 1223 12134 123</div>
                </div>

                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Email:</div>
                    <div class="ml-2 text-sm text-gray-500"> 23f3f3f3@mail.com</div>
                </div>

                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Location:</div>
                    <div class="ml-2 text-sm text-gray-500">USA</div>
                </div>

                <!-- Social: -->
                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Social:</div>
                    <div class="ml-2 text-sm text-gray-500">Facebook, Twitter, Instagram</div>
                </div>
            </div>
        </div>

        <div class="w-1/4 mr-2">
            <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3 ">

                <!-- ID task and dropdown -->
                <div class="overflow-auto">
                    <p class="float-left text-xs text-accent font-bold">Profile Information</p>
                    <button
                        class='mt-[-18px] float-right items-center text-xl hover:cursor-pointer bg-lightPrimary p-2 text-brand-500 hover:bg-gray-100 dark:bg-navy-700 dark:text-white dark:hover:bg-white/20 dark:active:bg-white/10 rounded-lg'>
                        <svg stroke="black" fill="black" stroke-width="0" viewBox="0 0 16 16" class="h-6 w-6" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                            </path>
                        </svg>
                    </button>
                </div>

                <p>
                    Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally
                    difficult paths, choose the one more painful in the short term (pain avoidance is
                    creating an illusion of equality).

                </p>

                <!-- Full Name:   Alec M. Thompson -->
                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Full Name:</div>
                    <div class="ml-2 text-sm text-gray-500">Alec M. Thompson</div>
                </div>

                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Mobile:</div>
                    <div class="ml-2 text-sm text-gray-500">(44) 1223 12134 123</div>
                </div>

                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Email:</div>
                    <div class="ml-2 text-sm text-gray-500"> 23f3f3f3@mail.com</div>
                </div>

                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Location:</div>
                    <div class="ml-2 text-sm text-gray-500">USA</div>
                </div>

                <!-- Social: -->
                <div class="flex flex-col md:flex-row items-center mt-2">
                    <div class="text-sm text-gray-500">Social:</div>
                    <div class="ml-2 text-sm text-gray-500">Facebook, Twitter, Instagram</div>
                </div>
            </div>
        </div>



    </div>
</template>

<script>
import UserInformation from "../Profile/PersonInfo/UserInformation.vue";

export default {
    name: "Profile",
    components: {
        UserInformation,
    },
};
</script>
