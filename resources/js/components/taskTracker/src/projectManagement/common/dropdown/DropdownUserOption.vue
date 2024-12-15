<template>
    <!-- Dropdown menu -->
    <Dropdown buttonText="Setting" class="py-2 text-sm border-b border-t">
        <div class="px-4 py-3 text-sm ">
            <div class="font-medium ">Pro User</div>
            <div class="truncate">name@flowbite.com</div>
        </div>

        <ul class="border-t border-b">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
        </ul>


        <div class="py-2 inline-flex ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mt-3 ml-2">
                <path
                    d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z" />
            </svg>
            <a href="#" class="block px-4 py-2 text-sm">Sign out</a>
        </div>

    </Dropdown>
</template>

<script>

import Dropdown from './Dropdown.vue';

export default {
    name: 'DropdownUserOption',
    components: {
        Dropdown,
    },
};
</script>
