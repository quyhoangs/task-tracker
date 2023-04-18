<template>
    <!-- Cột 1 - Profile Information -->
    <div class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 mb-3 p-3">
        <!-- button user  -->
        <div class="flex flex-col md:flex-row items-center mt-2">
            <button class="w-10 h-10 font-medium text-sm px-3 text-center bg-gray-200 rounded-full border-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 -ml-[3px]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                    </path>
                </svg>
            </button>
            <div class="ml-2 text-sm text-gray-500 cursor-pointer hover:border-dashed border-gray-400 hover:border"
                @click="openModal('user')">
                <span>User Name : </span>
                John Doe
            </div>
        </div>

        <!-- button email  -->
        <div class="flex flex-col md:flex-row items-center mt-2">
            <button class="w-10 h-10 font-medium text-sm px-3 text-center bg-gray-200 rounded-full border-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 -ml-[3px]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 4h18M3 10h18M3 16h18M3 20h18M3 8l9 5 9-5M3 12l9 5 9-5M3 16l9 5 9-5"></path>
                </svg>
            </button>
            <div class="ml-2 text-sm text-gray-500 cursor-pointer hover:border-dashed border-gray-400 hover:border"
                @click="openModal('email')">
                <span>Email : </span>
                John Doe
            </div>
        </div>

        <!-- Modal -->
        <div v-if="activeField" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
            aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-40 transition-opacity" aria-hidden="true">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-40 transition-opacity" @click="closeModal"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                        role="dialog" aria-modal="true" aria-labelledby="modal-title">
                        <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <!-- Modal Icon -->
                                    <!-- You can customize the icon based on the field, e.g., user or email -->
                                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                        class="h-6 w-6 text-green-600">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        <!-- Modal Title -->
                                        <!-- You can customize the title based on the field, e.g., user or email -->
                                        {{ activeField === 'user' ? 'Edit User Name' : 'Edit Email' }}
                                    </h3>
                                    <div class="mt-2">
                                        <!-- Modal Content -->
                                        <!-- You can customize the content based on the field, e.g., user or email -->
                                        <input v-model="activeField === 'user' ? userField : emailField"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                            type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button @click="saveField" type="button"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Save
                            </button>
                            <button @click="closeModal" type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showModal: false, // Whether or not to show the modal
            activeField: '', // The active field being edited (e.g., 'user' or 'email')
            userField: '', // The value of the user field
            emailField: '', // The value of the email field
        };
    },
    methods: {
        openModal(field) {
            this.showModal = true;
            this.activeField = field;
            if (field === 'user') {
                this.userField = ''; // Clear the user field value
            } else if (field === 'email') {
                this.emailField = ''; // Clear the email field value
            }
        },
        saveField() {
            // Perform save logic based on the active field and its value
            if (this.activeField === 'user') {
                // Save user field value
                console.log('User field value:', this.userField);
            } else if (this.activeField === 'email') {
                // Save email field value
                console.log('Email field value:', this.emailField);
            }
            this.closeModal();
        },
        closeModal() {
            this.showModal = false;
            this.activeField = '';
            this.userField = '';
            this.emailField = '';
        },
    },
};
</script>
