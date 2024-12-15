<template>
    <router-link :to="route" class="flex justify-center"
        :class="{ 'bg-white rounded-full shadow text-indigo-900': isActive }">
        {{ label }}
    </router-link>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true
        },
        route: {
            type: Object,
            required: true
        }
    },
    computed: {
        isActive() {
            return this.$route.name === this.route.name;
        }
    }
};
</script>
