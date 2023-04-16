<template>
    <GuestLayout> </GuestLayout>
    <!-- component -->
    <div>Tạo 1 table có thể kéo thả vị trí cột , hàng , filter , search , import , export </div>
    <div
        class=" w-9 h-9 bg-white rounded-full flex items-center justify-center border-2  border-dashed border-gray-400  hover:border-green-400">
        <button>
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" class="w-5 h-5 text-gray-400 hover:text-green-800">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z">
                </path>
            </svg>
        </button>

    </div>


    <div class="overflow-x-auto">
        <div
            class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Project</th>
                                <th class="py-3 px-6 text-left">Owner</th>
                                <th class="py-3 px-6 text-left">Progress</th>
                                <th class="py-3 px-6 text-left">Taks</th>
                                <th class="py-3 px-6 text-center">Members</th>
                                <th class="py-3 px-6 text-left">Deadline</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                                viewBox="0 0 48 48" style=" fill:#000000;">
                                                <path fill="#80deea"
                                                    d="M24,34C11.1,34,1,29.6,1,24c0-5.6,10.1-10,23-10c12.9,0,23,4.4,23,10C47,29.6,36.9,34,24,34z M24,16	c-12.6,0-21,4.1-21,8c0,3.9,8.4,8,21,8s21-4.1,21-8C45,20.1,36.6,16,24,16z">
                                                </path>
                                                <path fill="#80deea"
                                                    d="M15.1,44.6c-1,0-1.8-0.2-2.6-0.7C7.6,41.1,8.9,30.2,15.3,19l0,0c3-5.2,6.7-9.6,10.3-12.4c3.9-3,7.4-3.9,9.8-2.5	c2.5,1.4,3.4,4.9,2.8,9.8c-0.6,4.6-2.6,10-5.6,15.2c-3,5.2-6.7,9.6-10.3,12.4C19.7,43.5,17.2,44.6,15.1,44.6z M32.9,5.4	c-1.6,0-3.7,0.9-6,2.7c-3.4,2.7-6.9,6.9-9.8,11.9l0,0c-6.3,10.9-6.9,20.3-3.6,22.2c1.7,1,4.5,0.1,7.6-2.3c3.4-2.7,6.9-6.9,9.8-11.9	c2.9-5,4.8-10.1,5.4-14.4c0.5-4-0.1-6.8-1.8-7.8C34,5.6,33.5,5.4,32.9,5.4z">
                                                </path>
                                                <path fill="#80deea"
                                                    d="M33,44.6c-5,0-12.2-6.1-17.6-15.6C8.9,17.8,7.6,6.9,12.5,4.1l0,0C17.4,1.3,26.2,7.8,32.7,19	c3,5.2,5,10.6,5.6,15.2c0.7,4.9-0.3,8.3-2.8,9.8C34.7,44.4,33.9,44.6,33,44.6z M13.5,5.8c-3.3,1.9-2.7,11.3,3.6,22.2	c6.3,10.9,14.1,16.1,17.4,14.2c1.7-1,2.3-3.8,1.8-7.8c-0.6-4.3-2.5-9.4-5.4-14.4C24.6,9.1,16.8,3.9,13.5,5.8L13.5,5.8z">
                                                </path>
                                                <circle cx="24" cy="24" r="4" fill="#80deea"></circle>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <span class="font-medium mr-2">React Project</span>
                                            <div class="flex-1">This is title</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full"
                                                src="https://randomuser.me/api/portraits/men/1.jpg" />
                                        </div>
                                        <span>Eshal Rosas</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex-1">
                                        <div class="mr-2">
                                            50%
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 ">
                                            <div class="bg-gray-600 h-2.5 rounded-full" style="width: 45%">
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <div class="flex-1">
                                        <span class="font-medium mr-2">12/100</span>
                                        <div class="flex-1">5 Task in progress</div>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                            src="https://randomuser.me/api/portraits/men/1.jpg" />
                                        <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                            src="https://randomuser.me/api/portraits/women/2.jpg" />
                                        <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                            src="https://randomuser.me/api/portraits/men/3.jpg" />
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex-1">
                                        <span class="font-medium mr-2">31/12/2023</span>
                                        <div class="flex-1">30 Days</div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>



                        </tbody>
                    </table>
                    <div class="flex flex-col items-center px-5 py-5 bg-white xs:flex-row xs:justify-between">
                        <div class="flex items-center">
                            <button type="button"
                                class="w-full p-4 text-base text-gray-600 bg-white border rounded-l-xl hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 text-base text-indigo-500 bg-white border-t border-b hover:bg-gray-100 ">
                                1
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 text-base text-gray-600 bg-white border hover:bg-gray-100">
                                2
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 text-base text-gray-600 bg-white border-t border-b hover:bg-gray-100">
                                3
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 text-base text-gray-600 bg-white border hover:bg-gray-100">
                                4
                            </button>
                            <button type="button"
                                class="w-full p-4 text-base text-gray-600 bg-white border-t border-b border-r rounded-r-xl hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import GuestLayout from '../layouts/GuestLayout.vue';
export default {
    components: {
        GuestLayout,
    }
};
</script>
