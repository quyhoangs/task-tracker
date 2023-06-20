<template>
    <div>
        <nav class="bg-sky-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="block h-8 w-auto lg:hidden"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                            <img class="hidden h-8 w-auto lg:block"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <!-- <router-link :to="{ name: 'Home' }"
                                    class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">Home
                                </router-link> -->
                                <router-link :to="{ name: 'Contact' }"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">Contact
                                </router-link>
                                <router-link :to="{ name: 'About' }"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">About
                                </router-link>

                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                        <div v-if="!authenticated">
                            <router-link :to="{ name: 'Login' }"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Login
                            </router-link>
                            <router-link :to="{ name: 'Register' }"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Register
                            </router-link>
                        </div>


                    </div>

                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    computed: {
        ...mapGetters('auth', ['authenticated', 'user'])
    },

    methods: {
        ...mapActions('auth', ['logout']),
        handleLogout() {
            this.logout().then(() => {
                this.$router.push({ name: 'Login' });
            });
        },
    }
}
</script>
