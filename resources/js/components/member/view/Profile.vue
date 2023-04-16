<template>
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Left sidebar content -->
            <LeftSidebar></LeftSidebar>
        </div>
        <div class="flex-1 relative p-7 ml-5">
            <!-- Nội dung lên trên cùng bên trái của ảnh bìa -->
            <div class="mt-5 ml-5 absolute top-0 left-0 p-4">
                <span class="text-white font-bold text-xl">Pages > Profile</span>
            </div>
            <!-- Icon thông báo và cài đặt phía trên cùng bên phải -->
            <div class="absolute top-0 right-0 flex items-center p-4">
                <div class="mr-4">
                    <!-- Icon thông báo -->
                    Helo
                </div>
                <div>
                    <!-- Icon cài đặt -->
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
            </div>
            <div class=" w-full h-60 rounded-3xl overflow-hidden">
                <!-- Ảnh bìa -->
                <img src="../../../../../public/images/coved/curved0.jpg" alt="Ảnh bìa" class="object-cover w-full h-full">
            </div>

            <!-- Avatar ở giữa mặt dưới -->
            <div class="relative top-0">
                <div class="absolute left-20 right-20 ">
                    <img src="../../../../../public/images/project/bruce-mars.jpg" alt="Ảnh đại diện"
                        class="w-20 h-20 rounded-full border-4 border-white -mt-10 ">
                </div>
            </div>

            <!-- Platform Settings -->
            <div class="flex justify-between">
                <!-- Thẻ div ở bên trái -->
                <div class="flex-shrink-0 mt-10 mb-5">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="text-2xl font-bold text-gray-800">Bruce Mars</div>
                        <div class="ml-2 mt-2 md:mt-0">
                            <button
                                class="flex items-center justify-center w-20 h-8 rounded-full text-white bg-green-500 hover:bg-green-600">
                                + Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-center mt-2">
                        <div class="text-sm text-gray-500">Laravel Developer</div>
                        <div class="ml-2 text-sm text-gray-500">New York, USA</div>
                    </div>
                </div>
                <!-- Thẻ div ở giữa -->
                <div class="flex flex-grow flex-col md:flex-row justify-center items-center  mr-[175px] ">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-bold text-gray-800">12</div>
                        <div class="text-sm text-gray-500">Posts</div>
                    </div>
                    <div class="flex flex-col items-center mx-5">
                        <div class="text-2xl font-bold text-gray-800">2.4K</div>
                        <div class="text-sm text-gray-500">Followers</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-bold text-gray-800">1.2K</div>
                        <div class="text-sm text-gray-500">Following</div>
                    </div>
                </div>
                <!-- Thẻ div ở bên phải -->
                <div class="flex-shrink-0">
                    <!-- Nội dung của div ở bên phải -->
                </div>
            </div>

            <!-- Thông tin người dùng -->

            <!-- Profile Information -->

            <div class="flex">
                <div class="w-1/3">
                    <!-- Cột 1 - Profile Information -->
                    <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3 ">

                        <!-- ID task and dropdown -->
                        <div class="overflow-auto">
                            <p class="float-left text-xs text-accent font-bold">Profile Information</p>
                            <button
                                class='mt-[-18px] float-right items-center text-xl hover:cursor-pointer bg-lightPrimary p-2 text-brand-500 hover:bg-gray-100 dark:bg-navy-700 dark:text-white dark:hover:bg-white/20 dark:active:bg-white/10 rounded-lg'>
                                <svg stroke="black" fill="black" stroke-width="0" viewBox="0 0 16 16" class="h-6 w-6"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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

                <div class="w-1/3 ml-5">
                    <!-- Cột 1 - Profile Information -->
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

                <div class="w-1/3 ml-5">
                    <!-- Cột 1 - Profile Information -->
                    <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3 ">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mb-2">Activity</h2>
                            + hiện thị hoạt động gần đây của bạn

                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="flex">
                    <div class="w-1/3 mr-2">
                        <Bar id="my-chart-id" :options="chartOptions" :data="chartData" />
                    </div>

                    <div class="w-1/3 mr-2">
                        <Bar id="my-chart-id" :options="chartOptions" :data="chartData" />
                    </div>

                    <div class="w-1/3 mr-2">
                        <Bar id="my-chart-id" :options="chartOptions" :data="chartData" />
                    </div>
                </div>
            </div>


            <div>
                <div class="flex">
                    <div class="w-1/4 mr-2">
                        <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3 ">

                            <!-- ID task and dropdown -->
                            <div class="overflow-auto">
                                <p class="float-left text-xs text-accent font-bold">3 Dự án gần nhất</p>
                                <button
                                    class='mt-[-18px] float-right items-center text-xl hover:cursor-pointer bg-lightPrimary p-2 text-brand-500 hover:bg-gray-100 dark:bg-navy-700 dark:text-white dark:hover:bg-white/20 dark:active:bg-white/10 rounded-lg'>
                                    <svg stroke="black" fill="black" stroke-width="0" viewBox="0 0 16 16" class="h-6 w-6"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
                                    <svg stroke="black" fill="black" stroke-width="0" viewBox="0 0 16 16" class="h-6 w-6"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
                                    <svg stroke="black" fill="black" stroke-width="0" viewBox="0 0 16 16" class="h-6 w-6"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
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
                            + New Project
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>




<script>
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';
import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
    name: 'BarChart',
    components: {
        LeftSidebar,
        Bar
    },
    data() {
        return {
            chartData: {
                labels: ['January', 'February', 'March'],
                datasets: [
                    {
                        label: 'Team 1',
                        backgroundColor: 'yellow',
                        data: [40, 20, 12]
                    },
                    {
                        label: 'Team 2',
                        backgroundColor: 'blue',
                        data: [30, 25, 20]
                    },
                    {
                        label: 'Team 3',
                        backgroundColor: 'green',
                        data: [15, 10, 8]
                    }
                ]
            },
            chartOptions: {
                responsive: true,
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        fontColor: 'black',
                        fontSize: 10
                    }
                },
                scales: {
                    x: {
                        stacked: true // Xác định trục x có dạng cột chồng
                    },
                    y: {
                        beginAtZero: true,
                        stacked: true // Xác định trục y có dạng cột chồng
                    }
                }
            }
        }
    },
};
</script>
