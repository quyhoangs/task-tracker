<template>
    <div class="float-right ">
        <button class="bg-teal-500 hover:bg-teal-300 text-white rounded mt-2 mr-2 text-sm" @click="showModal = true">
            <p class="p-2">Add task +</p>
        </button>
        <ModalCreateTask v-if="showModal" @close="showModal = false" />
    </div>
</template>

<script>
import ModalCreateTask from '../modal/ModalCreateTask.vue';

export default {
    components: {
        ModalCreateTask,
    },
    data() {
        return {
            showModal: false,
        };
    },

};
</script>
