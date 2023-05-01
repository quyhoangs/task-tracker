<template>
    <div class="grid grid-cols-5 gap-4 ">
        <div class="col-span-1 w-1/5 ">
            <LeftSidebar> </LeftSidebar>
        </div>
        <div class="col-span-4 w-5/5 ml-[-68px]">
            <MenuTop> </MenuTop>
            <BreadCrumb> </BreadCrumb>
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

            <details open>
                <summary class="py-2 outline-none cursor-pointer ">My Project(4)
                </summary>


                <!-- + New Project -->

                <div class="px-4 pb-4">
                    <div class="min-w-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                        <div class="w-full lg:w-5/6">

                            <div class="bg-white shadow-md rounded my-6">
                                <ButtonCreateProject class="mb-2" @click="openModal"> </ButtonCreateProject>
                                <ModalCreateProject v-if="showModal" @closeModal="closeModal" />
                                <button>Export Excel</button>
                                <TableProject> </TableProject>
                                <PaginationProject />
                            </div>
                        </div>
                    </div>
                </div>
            </details>

            <div class="bg-gray-100">
                <p> My Work</p>
                <div class="float-left">
                    <ul class=" flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="mr-2">
                            <a href="#"
                                class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg aria-hidden="true"
                                    class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                        clip-rule="evenodd"></path>
                                </svg>Task Overview
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="inline-flex p-4 text-blue-600 border-b-4  border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group"
                                aria-current="page">
                                <svg aria-hidden="true" class="w-5 h-5 mr-2 text-blue-600 dark:text-blue-500"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>Comments
                                <span
                                    class="inline-flex items-center justify-center h-4 w-4 rounded-full bg-red-500 text-white">
                                    5
                                </span>

                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg aria-hidden="true"
                                    class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                                    </path>
                                </svg>Done
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="inline-flex p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                                <svg aria-hidden="true"
                                    class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd"
                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                        clip-rule="evenodd"></path>
                                </svg>Disscussion
                            </a>
                        </li>

                    </ul>
                </div>

                <section class="">
                    <div class="container flex flex-col justify-center p-4 mx-auto md:p-8">
                        <div class="flex flex-col divide-y sm:px-8 lg:px-12 xl:px-32 divide-gray-700">
                            <details>
                                <summary class="py-2 outline-none cursor-pointer focus:underline">Today(4)</summary>
                                <div class="px-4 pb-4">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde neque in fugiat
                                        magni,
                                        quas animi enim veritatis deleniti ex. Impedit.</p>
                                </div>
                            </details>
                            <details>
                                <summary class="py-2 outline-none cursor-pointer focus:underline">Overdue(2)</summary>
                                <div class="px-4 pb-4">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aspernatur quae, eos
                                        explicabo odit minima libero veniam similique quibusdam doloribus facilis ipsa
                                        accusantium vel maiores corrupti! Libero voluptate a doloribus?</p>
                                </div>
                            </details>
                            <details>
                                <summary class="py-2 outline-none cursor-pointer focus:underline">Next Task(3)</summary>
                                <div class="px-4 pb-4 space-y-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptates aspernatur
                                        dolores in consequatur doloremque inventore reprehenderit, consequuntur
                                        perspiciatis
                                        architecto.</p>
                                    <p>Sed consectetur quod tenetur! Voluptatibus culpa incidunt veritatis velit quasi
                                        cupiditate unde eaque! Iure, voluptatibus autem eaque unde possimus quae.</p>
                                </div>
                            </details>
                        </div>
                    </div>
                </section>
            </div>

        </div>

    </div>
</template>

<script>
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';
import MenuTop from '../common/menu/MenuTop.vue';
import BreadCrumb from '../common/breadcrumb/BreadCrumb.vue';
import ButtonCreateProject from '../view/Project/button/ButtonCreateProject.vue';
import TableProject from '../view/Project/TableProject.vue';
import PaginationProject from '../common/paginate/PaginationProject.vue';
import ModalCreateProject from '../view/Project/modal/ModalCreateProject.vue';

import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)


export default {
    name: 'BarChart',
    components: {
        MenuTop,
        LeftSidebar,
        BreadCrumb,
        ButtonCreateProject,
        TableProject,
        PaginationProject,
        ModalCreateProject,
        Bar
    },
    data() {
        return {
            showModal: false,
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
        };
    },
    methods: {
        openModal() {
            // Mở modal
            this.showModal = true;
        },
        closeModal() {
            // Đóng modal
            this.showModal = false;
        },
    }
};
</script>
