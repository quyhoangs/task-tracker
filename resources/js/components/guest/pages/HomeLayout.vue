<template>
    <GuestLayout> </GuestLayout>
    <div>
        <h1>Home</h1>
        <div>{{ name }}</div>
        <div>{{ email }}</div>
    </div>
</template>

<script>
import GuestLayout from '../layouts/GuestLayout.vue';

import { mapActions, mapMutations, mapGetters } from 'vuex';
export default {
    components: {
        GuestLayout,
    },
    data() {
        return {
            name: '',
            email: ''
        }
    },
    mounted() {
        axios.get('/api/user').then(response => {
            this.name = response.data.name;
            this.email = response.data.email;
        });
    }

};
</script>
