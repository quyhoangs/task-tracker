<template>
    <div class="flex ">
        <SearchTask> </SearchTask>
        <FilterTask></FilterTask>
    </div>
</template>

<script>

import SearchTask from './SearchTask/SearchTask.vue';
import FilterTask from './FilterTask/FilterTask.vue';

export default {

    components: {
        SearchTask,
        FilterTask
    },
}

</script>


