<template>

    <Head>
        <title>Home</title>
        <meta name="description" content="Information about the app"  head-key="description"/>
    </Head>
    <div>
        <h2>About</h2>
    </div>
</template>
<script setup>
import Layout from '@/shared/Layout.vue';
import { Head } from '@inertiajs/vue3';

defineOptions({
    layout: Layout
});
</script>