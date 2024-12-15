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
                @click="showModal('name')">
                <span class="font-bold">User Name : </span>{{ name }}
            </div>
        </div>

        <!-- button email  -->
        <div class="flex flex-col md:flex-row items-center mt-2">
            <button class="w-10 h-10 font-medium text-sm px-3 text-center bg-gray-200 rounded-full border-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 -ml-[3px]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                    </path>
                </svg>
            </button>
            <div class="ml-2 text-sm text-gray-500 cursor-pointer hover:border-dashed border-gray-400 hover:border"
                @click="showModal('email')">
                <span class="font-bold inline-block">Email : </span>
                <p class=" inline-block text-blue-500 ml-1"> {{ email }}</p>
            </div>
        </div>

        <!-- button phone  -->
        <div class="flex flex-col md:flex-row items-center mt-2">
            <button class="w-10 h-10 font-medium text-sm px-3 text-center bg-gray-200 rounded-full border-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 -ml-[3px]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3">
                    </path>
                </svg>
            </button>
            <div class="ml-2 text-sm text-gray-500 cursor-pointer hover:border-dashed border-gray-400 hover:border"
                @click="showModal('phone')">
                <span class="font-bold ">Phone : </span>{{ phone }}
            </div>
        </div>

        <!-- button Sky  -->
        <div class="flex flex-col md:flex-row items-center mt-2">
            <button class="w-10 h-10 font-medium text-sm px-3 text-center bg-gray-200 rounded-full border-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 -ml-[3px]">
                    <path
                        d=" M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z" />
                </svg>
            </button>
            <div class="ml-2 text-sm text-gray-500 cursor-pointer hover:border-dashed border-gray-400 hover:border"
                @click="showModal('skype')">
                <span class="font-bold ">Skype : </span>{{ skype }}
            </div>
        </div>

        <!-- button location  -->
        <div class="flex flex-col md:flex-row items-center mt-2">
            <button class="w-10 h-10 font-medium text-sm px-3 text-center bg-gray-200 rounded-full border-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 -ml-[3px]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z">
                    </path>
                </svg>
            </button>
            <div class="ml-2 text-sm text-gray-500 cursor-pointer hover:border-dashed border-gray-400 hover:border"
                @click="showModal('location')">
                <span class="font-bold ">Location : </span>{{ location }}
            </div>
        </div>

        <!-- button birthday  -->
        <div class="flex flex-col md:flex-row items-center mt-2">
            <button class="w-10 h-10 font-medium text-sm px-3 text-center bg-gray-200 rounded-full border-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 -ml-[3px]">
                    <path stroke-linecap=" round" stroke-linejoin="round"
                        d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z">
                    </path>
                </svg>
            </button>
            <div class="ml-2 text-sm text-gray-500 cursor-pointer hover:border-dashed border-gray-400 hover:border"
                @click="showModal('birthday')">
                <span class="font-bold ">Birthday : </span>{{ birthday }}
            </div>
        </div>

        <ModalEditProfile :is-open="isModalOpen" :field-label="fieldLabel" :field-value="fieldValue" @close="closeModal"
            @update-user-info="updateField" />

    </div>
</template>

<script>
import ModalEditProfile from '../PersonInfo/Modal/ModalEditProfile.vue';
export default {
    components: {
        ModalEditProfile,
    },
    data() {
        return {
            name: '',
            email: '',
            phone: '',
            skype: '',
            location: '',
            birthday: '',

            userField: {
                name: '',
                email: '',
                phone: '',
                skype: '',
                location: '',
                birthday: '',
            },
            isModalOpen: false,
            fieldLabel: '',
            fieldValue: '',
        };
    },
    async created() {
        try {
            const response = await axios.get('/api/profile/person-info');
            this.name = response.data.user.name;
            this.email = response.data.user.email;
            this.phone = response.data.user.phone;
            this.skype = response.data.user.skype;
            this.location = response.data.user.location;
            this.birthday = response.data.user.birthday;
        } catch (error) {
            console.log(error);
        }
    },

    methods: {
        showModal(fieldName) {
            this.fieldLabel = fieldName;
            this.fieldValue = this.userField[fieldName];
            this.isModalOpen = true;
        },
        closeModal() {
            this.isModalOpen = false;
        },
        async updateField(value) {
            try {
                const response = await axios.put('/api/profile/person-info', {
                    data: value,
                });
                //Lấy giá trị mới từ server
                const updatedValue = response.data.fieldValue;
                //Cập nhật giá trị mới vào input
                this[this.fieldLabel] = updatedValue;

            } catch (error) {
                console.log(error);
            }


        },
    },

};

</script>
