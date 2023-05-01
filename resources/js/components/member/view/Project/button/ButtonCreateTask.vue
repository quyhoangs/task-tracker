<template>
    <div class=" ml-2">
        <button class="bg-teal-500 hover:bg-teal-300 text-white rounded " @click="showModal = true">
            Add task +
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
