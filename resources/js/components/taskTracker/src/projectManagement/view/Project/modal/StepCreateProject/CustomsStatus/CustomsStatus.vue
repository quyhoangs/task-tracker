<template>
    <div class="mb-3 text-center text-xl font-bold">What task statuses do you want?</div>
    <div class="flex flex-col w-[600px] h-[600px]">
        <div class="flex flex-row h-full bg-slate-100">
            <div class="w-1/2 overflow-y-auto">
                <div class="flex flex-col">
                    <div class="flex flex-row justify-between items-center px-4 py-2 border-b border-slate-200">
                        <div class="text-xs text-slate-600">TEMPLATES ({{ templateStatuses.length }})</div>
                    </div>
                </div>

                <ul>
                    <li v-for="(template, index) in templateStatuses" :key="index"
                        class="px-4 py-2 border-b border-slate-200 hover:bg-red-200">
                        <div class="group-hover:block">
                            <!-- Hiển thị icon Edit và Delete -->
                            <span @click="editTemplate(template)">Edit</span> |
                            <span @click="deleteTemplate(template)">Delete</span>
                        </div>
                        <button @click="selectTemplate(template)" class="text-left w-full">{{ template.template_name
                        }}</button>
                    </li>
                </ul>

                <div v-if="!isAddingTemplate" class="text-xs font-semibold text-slate-600">
                    <button @click="startAddingTemplate" class="flex flex-row items-center space-x-2">
                        <div class="flex flex-row items-center justify-center w-8 h-8 rounded-full bg-slate-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-9h3a1 1 0 010 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 112 0v3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        Add template
                    </button>
                </div>
                <div v-else>
                    <input v-model="templateNameToAdd" @keyup.enter="addTemplate" placeholder="Template Name"
                        class="border rounded px-2 py-1">
                    <button @click="addTemplate"> + Add</button>
                </div>
            </div>

            <div class="w-1/2">
                <div class="group flex relative">
                    <div class=" flex flex-row justify-between items-center px-1 py-2 border-b border-slate-200">
                        <div class="text-xs text-slate-600">ACTIVE STATUSES </div>
                    </div>
                    <svg aria-haspopup="true" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-info-circle mt-2" width="18" height="18" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#A0AEC0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="12" r="9" />
                        <line x1="12" y1="8" x2="12.01" y2="8" />
                        <polyline points="11 12 12 12 12 16 13 16" />
                    </svg>
                    <span
                        class="-mt-12 p-2 group-hover:opacity-100 bg-gray-800 w-48 text-xs text-gray-100 rounded-md absolute left-1/2 translate-y-full opacity-0 ">
                        Active statuses are for tasks that have not been completed yet.
                    </span>
                </div>

                <ul v-if="selectedTemplate.statuses">
                    <li v-for="status in selectedTemplate.statuses" :key="status.name"
                        class="px-4 py-2 border-b border-slate-200">
                        {{ status.name }}
                    </li>
                </ul>
                <div v-else class="px-4 py-2 text-gray-500">No status selected</div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            templateStatuses: [], // Khởi tạo mảng rỗng để lưu trữ danh sách template_status
            selectedTemplate: {}, // Initialize as an empty object to store the selected template
            isAddingTemplate: false,
            templateNameToAdd: '',
        };
    },
    mounted() {
        // Gọi API để lấy danh sách template_status khi component được tải
        axios.get('/api/template-status/index')
            .then((response) => {
                console.log('template_status:', response.data);
                this.templateStatuses = response.data.templateStatuses; // Lưu dữ liệu vào biến templateStatuses
            })
            .catch((error) => {
                console.error('Error fetching template_status:', error);
            });
    },
    methods: {
        selectTemplate(template) {
            this.selectedTemplate = template;
        },
        startAddingTemplate() {
            this.isAddingTemplate = true;
        },
        addTemplate() {
            if (this.templateNameToAdd.trim() !== '') {
                // Copy bộ status đang chọn hiện tại thành 1 template mới + tên template khi Chọn "Add template"
                const newTemplate = {
                    template_name: this.templateNameToAdd,
                    statuses: [...this.selectedTemplate.statuses],
                };

                // Thêm template mới vào mảng templateStatuses
                this.templateStatuses = [...this.templateStatuses, newTemplate];

                // Reset lại các biến
                this.templateNameToAdd = '';
                this.isAddingTemplate = false;
            }
        },
    },
};
</script>
