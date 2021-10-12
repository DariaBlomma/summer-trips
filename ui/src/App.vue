<template>
    <Index-page/>
</template>

<script>
import IndexPage from './components/indexPage.vue';
import $ from 'jquery'
import '@/jquery.selectric.min.js';

export default {
    name: 'App',
    components: {
        IndexPage,
    },
    mounted() {
        //jquery for select
        $(() => {
            $('select').selectric({
                disableOnMobile: false,
                nativeOnMobile: false
            });
        });
    }
}
</script>

<style></style>
