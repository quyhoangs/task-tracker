<template>
    <div class="flex">
        <div class="mr-4">
            <LeftSidebar> </LeftSidebar>
        </div>
        <div class="">
            <MenuTop> </MenuTop>
            <TabProject> </TabProject>
            <!-- <BreadCrumb> </BreadCrumb> -->
            <div class="flex flex-row">
                <SearchFilterTask>
                </SearchFilterTask>
            </div>
            <!-- <CardProjectTask> </CardProjectTask> -->
            <router-view></router-view>

        </div>
    </div>
</template>

<script>
import MenuTop from '../common/menu/MenuTop.vue';
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';
import BreadCrumb from '../common/breadcrumb/BreadCrumb.vue';
import SearchFilterTask from '../common/filter/SearchFilterTask.vue';
import TabProject from '../common/tabs/TabProject.vue';
import CardProjectTask from '../view/Project/card/CardProjectTask.vue';


export default {

    components: {
        MenuTop,
        LeftSidebar,
        BreadCrumb,
        SearchFilterTask,
        TabProject,
        CardProjectTask,
    },
}
</script>
