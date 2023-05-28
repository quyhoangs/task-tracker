
<template></template>

<script>
// GoogleCallback.vue

export default {
    mounted() {
        // Truy cập vào URL callback từ Google
        const callbackUrl = window.location.href;
        console.log('callbackUrl', callbackUrl);
        // Xử lý thông tin từ callbackUrl (lấy thông tin user, kiểm tra thành công...)
        // ...

        // Đẩy người dùng đến trang project
        this.$router.push({ name: 'ListProject' });
    },
};

</script>
