<template>
    <details open>
        <summary class="py-2 outline-none cursor-pointer ">My Project(4)
        </summary>
        <!-- + New Project -->
        <DashboardTable> </DashboardTable>

    </details>
</template>

<script>
import DashboardTable from '../view/Dashboard/DashboardTable.vue';

export default {
    components: {
        DashboardTable,
    },
};


</script>
