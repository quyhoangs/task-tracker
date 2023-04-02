<template>
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-1 w-1/5">
            <LeftSidebar> </LeftSidebar>
        </div>
        <div class="col-span-4 w-5/5 ml-[-68px]">
            <BreadCrumb> </BreadCrumb>
            <div class="flex items-center">
                <div class="w-1/2">
                    <DropdownListProjectTask> </DropdownListProjectTask>
                    <ButtonCreateProject> </ButtonCreateProject>
                </div>
                <div class="w-1/2">
                    <SearchAllCategory> </SearchAllCategory>
                </div>
            </div>

            <FilterTask> </FilterTask>
            <TabProject> </TabProject>

            <CardProjectTask> </CardProjectTask>

        </div>
    </div>
</template>

<script>
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';
import BreadCrumb from '../common/breadcrumb/BreadCrumb.vue';
import SearchAllCategory from '../common/search/SearchAllCategory.vue';
import DropdownListProjectTask from '../common/dropdown/DropdownListProjectTask.vue';
import ButtonCreateProject from '../common/button/ButtonCreateProject.vue';
import FilterTask from '../common/filter/FilterTask.vue';
import TabProject from '../common/tabs/TabProject.vue';
import CardProjectTask from '../common/card/CardProjectTask.vue';
export default {
    components: {
        LeftSidebar,
        BreadCrumb,
        SearchAllCategory,
        DropdownListProjectTask,
        ButtonCreateProject,
        FilterTask,
        TabProject,
        CardProjectTask,
    }
}
</script>
