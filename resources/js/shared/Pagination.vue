<template>
    <div class="flex justify-center space-x-1">
        <template v-for="link in links" :key="link.label">
            <Link v-if="link.url" :href="link.url" v-html="link.label" class="px-3 py-1 border rounded-md" :class="[
                link.active
                    ? 'bg-blue-600 text-white border-blue-600'
                    : 'bg-white text-gray-700 hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600'
            ]" />
            <span v-else v-html="link.label"
                class="px-3 py-1 text-gray-400 border rounded-md cursor-not-allowed dark:border-gray-600" />
        </template>
    </div>
</template>
<script>
import { Link } from '@inertiajs/vue3';
export default {
    components: {
        Link
    },
    props: {
        links: Array
    }
}
</script>
