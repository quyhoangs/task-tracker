<template>
    <div class="relative text-xs">
        <button class="bg-gray-200 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"
            @click="isOpen = !isOpen">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-4 w-4 mr-2">
                <path
                    d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z" />
            </svg>
            <span>{{ buttonText }}</span>
            <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M6.217 8.485l3.132 3.132c.293.293.677.439 1.061.439s.768-.146 1.061-.439l3.132-3.132c.586-.586.586-1.536 0-2.121-.586-.586-1.536-.586-2.121 0L10 8.879 7.338 6.217c-.586-.586-1.536-.586-2.121 0-.586.585-.586 1.535 0 2.121z" />
            </svg>
        </button>
        <ul v-show="isOpen" class="absolute z-50 right-0 mt-2 w-48 bg-white rounded-md shadow-lg overflow-hidden"
            @click.away="isOpen = false">
            <slot></slot>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Dropdown',
    data() {
        return {
            isOpen: false,
        };
    },
    props: {
        buttonText: {
            type: String,
            default: 'Dropdown',
        },
    },
    mounted() {
        window.addEventListener('click', this.handleOutsideClick);
    },
    methods: {
        //Phương thức handleOutsideClick sẽ kiểm tra xem sự kiện click chuột có xảy ra bên trong dropdown hay không.
        //Nếu không, nó sẽ đóng dropdown bằng cách đặt thuộc tính showDropdownList thành false
        handleOutsideClick(event) {
            if (!this.$el.contains(event.target)) {
                this.isOpen = false;
            }
        },
    },
    // loại bỏ event listener này khi component bị hủy để tránh memory leak:
    beforeDestroy() {
        window.removeEventListener('click', this.handleOutsideClick);
    },
};
</script>
