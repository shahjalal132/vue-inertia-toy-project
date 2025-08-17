<template>
    <div class="px-4">
        <!-- Header -->
        <header class="flex items-center justify-between p-4">
            <div class="flex items-center gap-2">
                <!-- <h2 class="font-black text-2xl text-center text-light">Logo</h2> -->
                 <input type="text" value="jalal" class="border border-white rounded p-2 text-white">
                <p>Welcome Back, {{ username }}!</p>
            </div>
            <Nav />
            <h2>App</h2>
        </header>

        <!-- Main content -->
        <main class="p-4 mt-2">
            <slot />
        </main>
    </div>
</template>

<script>
import Nav from '@/shared/Nav.vue';
export default {
    components: {
        Nav
    },
    computed: {
        username() {
            return this.$page.props.auth.username;
        }
    }
}
</script>