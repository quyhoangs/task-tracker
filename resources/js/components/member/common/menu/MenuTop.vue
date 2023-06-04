<template>
    <!-- component -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <div class="flex  flex-wrap sys-app-notCollapsed -ml-4 ">
        <div class="p-2 text-gray-900   flex items-center flex-1 ">
            <span class="px-2 mr-36 border-r border-gray-800 font-sans">
                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                    alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto "> SPOTIFY SPACE
            </span>
            <div class="flex-1 mr-2">
                <SearchAllCategory></SearchAllCategory>
            </div>

            <div class="flex-1">
                <DropdownListProjectTask></DropdownListProjectTask>

            </div>

            <span class="ml-auto px-1 w-10 relative cursor-pointer hover:text-gray-700 mr-4">
                <i class="fas fa-bell p-2 bg-gray-200 rounded-full">
                </i>
                <span
                    class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>
            </span>
            <div class="flex items-center text-xs mr-3">
                <div class="relative">
                    <!-- <img class="w-10 h-10 rounded-full mr-1" src="https://i.ibb.co/L1LQtBm/Ellipse-1.png" alt=""> -->

                    <!-- Trường hợp chưa update avatar hiển thị 2 chữ cái trong User Name -->
                    <div
                        class="mr-1 relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                        <span v-if="user && user.avatar" class="font-medium text-gray-600 dark:text-gray-300">
                            <img class="w-full h-full object-cover" :src="user.avatar" alt="User Avatar">
                        </span>
                        <span v-else class="font-medium text-gray-600 dark:text-gray-300">
                            {{ user && user.name ? user.name.substring(0, 2).toUpperCase() : '' }}
                        </span>
                    </div>

                    <span
                        class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full">
                    </span>
                </div>

                <div>
                    <!-- Username -->
                    <div class="font-medium">{{ user && user.name ? user.name : '' }}</div>
                </div>
            </div>

            <DropdownUserOption></DropdownUserOption>

        </div>
    </div>
</template>


<script>
import DropdownListProjectTask from '../dropdown/DropdownListProjectTask.vue';
import DropdownUserOption from '../dropdown/DropdownUserOption.vue';
import SearchAllCategory from '../search/SearchAllCategory.vue';
import { mapGetters } from 'vuex';

export default {
    components: {
        DropdownListProjectTask,
        SearchAllCategory,
        DropdownUserOption
    },
    computed: {
        ...mapGetters(['user']),
    },
}
</script>
