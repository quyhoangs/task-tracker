<template>
    <div class="flex flex-col items-center  w-[600px] h-[600px]">
        <div class="rounded-full w-32 h-32 flex items-center justify-center" :style="{ backgroundColor: avatarColor }">
            <span class="text-3xl text-white">{{ projectInitials }}</span>
        </div>
        <div class="mt-4">
            <input v-model="projectName" class="border p-2" type="text" placeholder="Nhập tên Project">
        </div>
        <div class="mt-2 text-red-500" v-if="showWarning">
            Tên Project cần ít nhất 2 ký tự
        </div>
        <div class="mt-4">
            <input type="file" @change="handleFileChange">
        </div>
        <div class="mt-2" v-if="uploadedImage">
            <img :src="uploadedImage" alt="Uploaded Avatar" class="w-32 h-32 rounded-full">
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            projectName: '',
            avatarColor: '#ff0000',
            showWarning: false,
            uploadedImage: null,
        };
    },
    computed: {
        projectInitials() {
            if (this.projectName.length >= 2) {
                return this.projectName.slice(0, 2).toUpperCase();
            }
            return '';
        },
    },
    methods: {
        handleFileChange(event) {
            const file = event.target.files[0];
            // Xử lý logic upload ảnh
            // Ví dụ: sử dụng URL.createObjectURL để tạo URL cho ảnh đã upload
            this.uploadedImage = URL.createObjectURL(file);
        },
    },
};
</script>
