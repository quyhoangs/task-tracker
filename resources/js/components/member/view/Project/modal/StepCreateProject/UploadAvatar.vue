<template>
    <div class="antialiased sans-serif bg-gray-200 flex flex-col w-[600px] h-[600px]">
        <div class="mb-5">
            <div class="flex items-center">
                <div class="relative">
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center w-20 h-20 text-lg text-white rounded bg-emerald-500"
                        :style="`background: ${colorSelected}; color: white`">

                        <div v-if="projectName" class="text-white text-xl ml-4 mt-5">
                            <span class="font-medium text-gray-600 dark:text-gray-300 ">{{
                                getInitials(projectName) }}
                            </span>
                        </div>
                        <span
                            class="absolute inline-flex items-center justify-center gap-1 p-1 text-sm text-white bg-green-500 border-2 border-white rounded-full -top-1 -right-1">
                            <span class="sr-only"> 7 new emails </span>
                        </span>

                    </button>

                    <div class="relative my-6">
                        <input v-model="projectName" type="text" placeholder="Facebook...."
                            class="pl-20 w-full h-10 px-4 text-sm placeholder-transparent transition-all border rounded outline-none focus-visible:outline-none peer border-slate-200 text-slate-500 autofill:bg-white invalid:border-pink-500 invalid:text-pink-500 focus:border-emerald-500 focus:outline-none invalid:focus:border-pink-500 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400" />
                        <label
                            class=" cursor-text peer-focus:cursor-default absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 transition-all before:absolute before:top-0 before:left-0 before:z-[-1] before:block before:h-full before:w-full before:bg-white before:transition-all peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-required:after:text-pink-500 peer-required:after:content-['\00a0*'] peer-invalid:text-pink-500 peer-focus:-top-2 peer-focus:text-xs peer-focus:text-emerald-500 peer-invalid:peer-focus:text-pink-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400 peer-disabled:before:bg-transparent">
                            Project Name <span class="text-red-600">*</span>
                        </label>

                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            class="h-5 w-5 text-gray-400 hover:text-gray-600" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z">
                            </path>
                        </svg>
                        <!--Khi User nhập tên project không hợp lệ hãy hiển thị lỗi validate ở đây  -->

                        <small
                            class="absolute flex justify-between w-full px-4 py-1 text-xs transition text-slate-400 peer-invalid:text-pink-500">
                            <span>Note: This name will be displayed if you don't upload an avatar.</span>
                        </small>
                        <div v-if="projectName" class="absolute top-1/2 right-2 transform -translate-y-1/2 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-400 hover:text-gray-600"
                                viewBox="0 0 20 20" fill="currentColor" @click="clearInput">
                                <path
                                    d="M6.707 5.293a1 1 0 010 1.414L8.414 9l-1.707 1.293a1 1 0 11-1.414-1.414L7.586 7l-1.293-1.293a1 1 0 111.414-1.414L9 5.586l1.293-1.293a1 1 0 111.414 1.414L10.414 7l1.293 1.293a1 1 0 11-1.414 1.414L9 8.414l-1.293 1.293a1 1 0 11-1.414-1.414L7.586 7 6.293 5.707a1 1 0 010-1.414z" />
                            </svg>

                        </div>
                    </div>

                    <div v-show="isOpen" @click.away="isOpen = false"
                        class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg ">
                        <div class="rounded-md bg-white shadow-xs px-4 py-3">
                            <div class="flex flex-wrap -mx-2">
                                <template v-for="(color, index) in colors" :key="index">
                                    <div class="px-2">
                                        <template v-if="colorSelected === color">
                                            <div class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white bg-"
                                                :class="`bg-${color}-500`">
                                            </div>
                                        </template>

                                        <template v-if="colorSelected !== color">
                                            <div @click="colorSelected = color" @keydown.enter="colorSelected = color"
                                                role="checkbox" tabindex="0" :aria-checked="colorSelected === color"
                                                class="w-8 h-8 inline-flex rounded-full cursor-pointer border-4 border-white focus:outline-none focus:shadow-outline"
                                                :class="`bg-${color}-500`">
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
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
            isOpen: false,
            // colors: ["blue", "teal", "yellow", "yellow", "green", "red", "pink", "indigo", "yellow"],
            // 9 màu khác nhau
            colors: ["blue", "teal", "green", "green", "red", "pink", "indigo", "yellow", "purple"],
            colorSelected: '',
            projectName: '',
        };
    },
    mounted() {
        // Mặc định chọn màu teal
        this.colorSelected = this.colors[1];

    },
    methods: {
        //Xử lý lấy các chữ cái đầu của tên project, VD : Facebook => FB
        getInitials(text) {
            if (text) {
                const words = text.split(' ');
                let initials = '';

                if (words.length === 1) {
                    initials = words[0].substring(0, 2).toUpperCase();
                } else {
                    initials = words
                        .map(word => word.charAt(0))
                        .join('')
                        .toUpperCase()
                        .substring(0, 2);
                }

                return initials;
            }

            return '';
        },
        /*
            Ví dụ, nếu text là "project name", thì quá trình sẽ diễn ra như sau:
            Tách text thành mảng words: ['project', 'name'].
            Lấy chữ cái đầu tiên của mỗi từ: ['p', 'n'].
            Kết hợp các chữ cái đầu tiên: 'pn'.
            Chuyển thành chữ hoa: 'PN'.
            Lấy 2 chữ cái đầu tiên: 'PN'.
            Trường hợp text chỉ có 1 từ, ví dụ 'Facebook', thì kết quả sẽ là 'FB'.
        */
        clearInput() {
            this.projectName = ''; // Xóa nội dung của input
        },

    },

};
</script>

<style>
[x-cloak] {
    display: none;
}
</style>
