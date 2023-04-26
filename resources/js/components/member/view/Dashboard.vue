<template>
    <div class="grid grid-cols-5 gap-4 ">
        <div class="col-span-1 w-1/5 ">
            <LeftSidebar> </LeftSidebar>
        </div>
        <div class="col-span-4 w-5/5 ml-[-68px]">
            <MenuTop> </MenuTop>
            <BreadCrumb> </BreadCrumb>


            <DashboardChart> </DashboardChart>


            <details open>
                <summary class="py-2 outline-none cursor-pointer ">My Project(4)
                </summary>
                <!-- + New Project -->
                <DashboardTable> </DashboardTable>

            </details>


        </div>

    </div>
</template>

<script>
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';
import MenuTop from '../common/menu/MenuTop.vue';
import BreadCrumb from '../common/breadcrumb/BreadCrumb.vue';

import DashboardChart from '../view/Dashboard/DashboardChart.vue';
import DashboardTable from '../view/Dashboard/DashboardTable.vue';


export default {
    components: {
        MenuTop,
        LeftSidebar,
        BreadCrumb,
        DashboardChart,
        DashboardTable,
    },
};
</script>

