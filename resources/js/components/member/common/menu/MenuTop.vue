<template>
    <!-- component -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <div class="bg-gray-200  flex flex-wrap sys-app-notCollapsed ">
        <div class="p-2 w-full ">
            <div class="p-2 text-gray-900 bg-white rounded-lg shadow-lg flex items-center">
                <span class="px-2 mr-36 border-r border-gray-800 font-sans">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"
                        alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto "> SPOTIFY SPACE
                </span>
                <div class="flex-1">
                    <SearchAllCategory></SearchAllCategory>
                </div>
                <span class="float-right px-1 cursor-pointer hover:text-gray-700">
                    <i class="fas fa-stream p-2 bg-gray-200 rounded-full">
                    </i>
                </span>
                <span class="float-right px-1 cursor-pointer hover:text-gray-700">
                    <i class="fas fa-search p-2 bg-gray-200 rounded-full">
                    </i>
                </span>
                <span class="float-right px-1 cursor-pointer hover:text-gray-700">
                    <i class="fas fa-th p-2 bg-gray-200 rounded-full">
                    </i>
                </span>
                <span class="float-right px-1 cursor-pointer hover:text-gray-700">
                    <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">
                    </i>
                </span>
                <span class="float-right px-1 w-8 relative cursor-pointer hover:text-gray-700">
                    <i class="fas fa-bell p-2 bg-gray-200 rounded-full">
                    </i>
                    <span
                        class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>
                </span>
                <span class="w-10 relative ml-auto cursor-pointer hover:text-gray-700">
                    <i class="fas fa-user p-2 bg-gray-200 rounded-full"></i>
                    <span
                        class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>
                </span>
            </div>
        </div>
    </div>
</template>


<script>
import SearchAllCategory from '../search/SearchAllCategory.vue';
export default {
    components: {
        SearchAllCategory,
    }
}
</script>
