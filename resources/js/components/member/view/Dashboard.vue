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

                    <div class="w-2/3 mr-2">
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


        </div>

    </div>
</template>
<script>
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';
import MenuTop from '../common/menu/MenuTop.vue';
import BreadCrumb from '../common/breadcrumb/BreadCrumb.vue';
import ButtonCreateProject from '../common/button/ButtonCreateProject.vue';
import TableProject from '../view/Project/TableProject.vue';
import PaginationProject from '../common/paginate/PaginationProject.vue';
import ModalCreateProject from '../common/modal/ModalCreateProject.vue';

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
