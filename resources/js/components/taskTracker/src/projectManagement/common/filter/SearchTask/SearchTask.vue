<template>
    <div class="">
        <div class="pt-2 relative text-gray-600">
            <svg class="absolute left-0 top-0 mt-4 mr-5 ml-2 text-gray-600 h-3 w-3 fill-current"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                xml:space="preserve" width="512px" height="512px">
                <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>

            <input class="text-xs border-2 border-gray-300 bg-white h-7 px-5 pr-16 rounded-lg focus:outline-none"
                type="search" name="search" placeholder="Search Task ...">
            <button @click="showDropdownList = true" class="hover:bg-gray-300 hover:rounded-md absolute mt-2 right-0 mr-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                    </path>
                </svg>
            </button>

            <DropdownSearchOptionTask v-if="showDropdownList" />

        </div>
    </div>
</template>

<script>

import DropdownSearchOptionTask from '../../dropdown/DropdownSearchOptionTask.vue';

export default {
    components: {
        DropdownSearchOptionTask
    },
    data() {
        return {
            showDropdownList: false,
        };
    },
    // thêm một event listener vào nơi khác trong ứng dụng của bạn để lắng nghe
    // sự kiện click chuột và tắt dropdown nếu dropdown đang mở
    mounted() {
        window.addEventListener('click', this.handleOutsideClick);
    },
    methods: {
        //Phương thức handleOutsideClick sẽ kiểm tra xem sự kiện click chuột có xảy ra bên trong dropdown hay không.
        //Nếu không, nó sẽ đóng dropdown bằng cách đặt thuộc tính showDropdownList thành false
        handleOutsideClick(event) {
            if (!this.$el.contains(event.target)) {
                this.showDropdownList = false;
            }
        },
    },
    // loại bỏ event listener này khi component bị hủy để tránh memory leak:
    beforeDestroy() {
        window.removeEventListener('click', this.handleOutsideClick);
    },
}
</script>

