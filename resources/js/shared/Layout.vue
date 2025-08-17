<template>
    <div class="px-4">
        <!-- Header -->
        <header class="flex items-center justify-between p-4">
            <h2 class="font-black text-center text-light">Logo</h2>
            <Nav/>
            <h2>App</h2>
        </header>

        <!-- Main content -->
         <main class="p-4 mt-2">
            <slot/>
         </main>
    </div>
</template>

<script>
import Nav from '@/shared/Nav.vue';
export default {
    components: {
        Nav
    }
}
</script>