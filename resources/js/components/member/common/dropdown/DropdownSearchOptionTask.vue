<template>
    <ul class="absolute top-0  py-2 w-48 bg-white rounded-md shadow-2xl z-10 mt-10 ml-10 px-2 ">
        <p class="ml-2 text-xs p-2">SEARCH IN</p>
        <label class="relative inline-flex items-center mb-3 cursor-pointer hover:bg-gray-200 ml-3 ">
            <input type="checkbox" value="" class="sr-only peer ">
            <div
                class="w-9 h-4 bg-gray-200
                         rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full
                         peer-checked:after:border-white after:content-['']
                         after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border
                         after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
            </div>
            <span class="ml-4 text-sm font-medium">Task Name</span>
        </label>

        <label class="relative inline-flex items-center mb-5 cursor-pointer hover:bg-gray-200 ml-3 ">
            <input type="checkbox" value="" class="sr-only peer ">
            <div
                class="w-9 h-4 bg-gray-200
                         rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full
                         peer-checked:after:border-white after:content-['']
                         after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border
                         after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
            </div>
            <span class="ml-4 text-sm font-medium">Task Description</span>
        </label>
    </ul>
</template>
