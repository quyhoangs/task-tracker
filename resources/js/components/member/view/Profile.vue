<template>
    <div class="flex">
        <div class="flex-shrink-0">
            <!-- Left sidebar content -->
            <LeftSidebar></LeftSidebar>
        </div>
        <div class="flex-1 relative p-7 ml-5">
            <!-- Nội dung lên trên cùng bên trái của ảnh bìa -->
            <div class="mt-5 ml-5 absolute top-0 left-0 p-4">
                <span class="text-white font-bold text-xl">Pages > Profile</span>
            </div>
            <!-- Icon thông báo và cài đặt phía trên cùng bên phải -->
            <div class="absolute top-0 right-0 flex items-center p-4">
                <div class="mr-4">
                    <!-- Icon thông báo -->
                    Helo
                </div>
                <div>
                    <!-- Icon cài đặt -->
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
            </div>
            <div class=" w-full h-40 rounded-3xl overflow-hidden">
                <!-- Ảnh bìa -->
                <img src="../../../../../public/images/coved/curved0.jpg" alt="Ảnh bìa" class="object-cover w-full h-full">
            </div>

            <!-- Avatar ở giữa mặt dưới -->
            <div class="relative top-0">
                <div class="absolute left-20 right-20 ">
                    <img src="../../../../../public/images/project/bruce-mars.jpg" alt="Ảnh đại diện"
                        class="w-20 h-20 rounded-full border-4 border-white -mt-10 ">
                </div>
            </div>

            <!-- Platform Settings -->
            <div class="flex justify-between">
                <!-- Thẻ div ở bên trái -->
                <div class="flex-shrink-0 mt-10 mb-5">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="text-2xl font-bold text-gray-800">Bruce Mars</div>
                        <div class="ml-2 mt-2 md:mt-0">
                            <button
                                class="flex items-center justify-center w-20 h-8 rounded-full text-white bg-green-500 hover:bg-green-600">
                                + Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-center mt-2">
                        <div class="text-sm text-gray-500">Laravel Developer</div>
                        <div class="ml-2 text-sm text-gray-500">New York, USA</div>
                    </div>
                </div>
                <!-- Thẻ div ở giữa -->
                <div class="flex flex-grow flex-col md:flex-row justify-center items-center  mr-[175px] ">
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-bold text-gray-800">12</div>
                        <div class="text-sm text-gray-500">Posts</div>
                    </div>
                    <div class="flex flex-col items-center mx-5">
                        <div class="text-2xl font-bold text-gray-800">2.4K</div>
                        <div class="text-sm text-gray-500">Followers</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="text-2xl font-bold text-gray-800">1.2K</div>
                        <div class="text-sm text-gray-500">Following</div>
                    </div>
                </div>
                <!-- Thẻ div ở bên phải -->
                <div class="flex-shrink-0">
                    <!-- Nội dung của div ở bên phải -->
                </div>
            </div>

            <!-- Tab :Persion info , Working status , Password, Language and region , Session History  -->
            <div>
                <ul class="grid grid-flow-col text-center text-gray-500 bg-gray-100 rounded-full p-1 mb-3">
                    <li>
                        <tab-item label="Person Info" :route="{ name: 'PersonInfo' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Working Status" :route="{ name: 'WorkingStatus' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Password" :route="{ name: 'Password' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Language and Region" :route="{ name: 'LanguageRegion' }"></tab-item>
                    </li>
                    <li>
                        <tab-item label="Session History" :route="{ name: 'SessionHistory' }"></tab-item>
                    </li>
                </ul>

                <router-view></router-view>
            </div>




        </div>
    </div>
</template>

<script>
import LeftSidebar from '../common/sidebar/LeftSidebar.vue';

// Định nghĩa base cho router được chọn
import TabItem from '../common/tabs/TabItem.vue';

export default {
    name: 'Profile',
    components: {
        LeftSidebar,
        TabItem
    },

};
</script>
