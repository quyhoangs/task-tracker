<template>
    <div class="px-4 pb-4">
        <div class="min-w-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">

                <div class="bg-white shadow-md rounded my-6">
                    <ButtonCreateProject class="mb-2" @click="openModal"> </ButtonCreateProject>
                    <ModalCreateProject v-if="showModal" @closeModal="closeModal" />
                    <button>Export Excel</button>
                    <TableProject> </TableProject>
                    <PaginationProject />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ButtonCreateProject from '../../common/button/ButtonCreateProject.vue';
import TableProject from '../../view/Project/TableProject.vue';
import PaginationProject from '../../common/paginate/PaginationProject.vue';
import ModalCreateProject from '../../common/modal/ModalCreateProject.vue';

export default {
    components: {
        ButtonCreateProject,
        TableProject,
        PaginationProject,
        ModalCreateProject,
    },
    data() {
        return {
            showModal: false,
        };
    },
    methods: {
        openModal() {
            // Mở modal
            this.showModal = true;
        },
        closeModal() {
            // Đóng modal
            this.showModal = false;
        },
    },
};
</script>
