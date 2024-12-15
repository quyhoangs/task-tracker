<template>
    <div class="border border-gray-200 dark:border-grey-300 overflow-hidden mb-2 -ml-4 border-r-0 ">
        <div class="float-left">
            <ul class=" flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                <li class="mr-2 ml-4">
                    <router-link :to="{ name: 'ListProject' }"
                        class="dark:border-green-500 text-green-500 inline-flex p-4 border-b-4 border-transparent rounded-t-lg  ">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 mr-2 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122">
                            </path>
                        </svg>
                        Project
                    </router-link>
                </li>
                <li class="mr-2">
                    <router-link :to="{ name: 'CardProjectTask' }"
                        class="inline-flex p-4  border-b-4 rounded-t-lg active hover:text-red-300 hover:border-red-300 dark:hover:text-red-300 group  "
                        aria-current="page">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2 " fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>Board
                        <span
                            class="inline-flex items-center justify-center h-4 w-4 rounded-full bg-red-300 text-white text-xs">
                            5
                        </span>

                    </router-link>
                </li>
                <li class="mr-2">
                    <a href="#"
                        class="inline-flex p-4 border-b-4 border-transparent rounded-t-lg hover:text-red-300 hover:border-red-300 dark:hover:text-red-300 group">
                        <svg aria-hidden="true"
                            class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-red-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z">
                            </path>
                        </svg>List
                    </a>
                </li>
                <li class="mr-2">
                    <a href="#"
                        class="inline-flex p-4 border-b-4 border-transparent rounded-t-lg hover:text-red-300 hover:border-red-300 dark:hover:text-red-300 group">
                        <svg aria-hidden="true"
                            class="w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-red-300"
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
        <ButtonCreateTask />
    </div>
</template>

<script>
import ButtonCreateTask from '../../view/Project/button/ButtonCreateTask.vue'
export default {
    components: {
        ButtonCreateTask
    }
}
</script>
