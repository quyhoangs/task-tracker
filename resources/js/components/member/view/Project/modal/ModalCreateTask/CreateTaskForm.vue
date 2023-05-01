<template>
    <div class="flex items-center border border-grey-300">
        <button
            class="m-4  bg-green-500 text-white font-bold py-2 px-4 rounded-l-lg mr-[1px] hover:scale-105">Inprogress</button>
        <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-r-lg mr-5 hover:scale-105">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </button>

        <!-- Mark TODO -->
        <button
            class="w-8 h-8 bg-gray-300 hover:bg-green-500 text-gray-800 hover:text-white font-bold py-2 px-4 rounded-lg mr-10">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" class="h-5 w-5 ml-[-8px] mt-[-2px]">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
            </svg>
        </button>

        <!-- Invite member -->
        <div
            class="w-10 h-10 bg-white rounded-full flex items-center justify-center border-2 border-dashed border-gray-400 hover:border-green-400 mr-5">
            <button><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                    class="w-5 h-5 text-gray-400 hover:text-green-800">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Set priority -->
        <div
            class="mr-10 w-10 h-10 bg-white rounded-full flex items-center justify-center border-2 border-dashed border-gray-400 hover:border-green-400">
            <button>
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Created date-->
        <div class="border-l-2 border-gray-300 pl-2 mr-10">
            <span class="text-gray-400 text-xs font-medium mr-2">Created</span>
            <div class="text-gray-400 text-xs flex-1">Apr 11,10:55 pm</div>
        </div>



        <!-- Due date -->
        <div class="border-l-2 border-gray-300 pl-2 mr-10">
            <span class="text-gray-400 text-xs ml-1 font-medium mr-2">Due date</span>
            <div class="text-gray-400 text-xs ml-1 flex-1">Tommorrow </div>
        </div>

        <!-- button option ... -->
        <button class="transform hover:rotate-180 transition duration-300">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z">
                </path>
            </svg>
        </button>





        <!-- watches -->
        <div class="relative ml-auto mr-5">
            <span class="absolute top-0 right-0 bg-green-500 text-white rounded-full p-1 mt-[-10px] w-6 h-6">5</span>
            <div
                class="w-10 h-10 bg-white rounded-full flex items-center justify-center border-2 border-dashed border-gray-400 hover:border-green-400">
                <button>
                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </button>
            </div>
        </div>



    </div>




    <div class="flex h-full">
        <div class="w-1/2 overflow-y-scroll " :style="{ width: leftWidth + 'px' }" ref="left">
            content of the left column goes here
        </div>

        <div class="relative w-1/2" ref="right">
            <div class="resize-handle absolute top-0 bottom-0 w-4 cursor-col-resize z-10" @mousedown="onMouseDown"
                @mouseup="onMouseUp">
            </div>
            <div class="w-full flex-end">
                <div class=" p-4" :style="{ width: rightWidth + 'px' }">
                    content of the right column goes here
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isDragging: false,
            startX: 0,
            startLeftWidth: 600, // set initial width of the left column
            startRightWidth: 600 // set initial width of the right column
        };
    },
    computed: {
        leftWidth() {
            return this.startLeftWidth;
        },
        rightWidth() {
            return this.startRightWidth;
        }
    },
    methods: {
        onMouseDown(event) {
            this.isDragging = true;
            this.startX = event.clientX;
            window.addEventListener("mousemove", this.onMouseMove);
            window.addEventListener("mouseup", this.onMouseUp);
        },
        onMouseMove(event) {
            if (!this.isDragging) return;
            const leftWidth = this.$refs.left.offsetWidth;
            const rightWidth = this.$refs.right.offsetWidth;
            const offset = event.clientX - this.startX;
            const newLeftWidth = Math.max(10, Math.min(leftWidth + offset, 790));
            const newRightWidth = Math.max(10, Math.min(rightWidth - offset, 790));
            this.startLeftWidth = newLeftWidth;
            this.startRightWidth = newRightWidth;
            this.startX = event.clientX;
        },

        onMouseUp() {
            this.isDragging = false;
            window.removeEventListener("mousemove", this.onMouseMove);
            window.removeEventListener("mouseup", this.onMouseUp);
        }
    }
};
</script>

<style>
.resize-handle:hover {
    background-color: #9a5f5f;
}
</style>
