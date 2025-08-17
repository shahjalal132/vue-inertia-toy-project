<template>
    <div>
        <!-- links -->
        <nav>
            <ul class="flex space-x-4 list-unstyled">
                <li>
                    <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
                </li>
                <li>
                    <NavLink href="/about" :active="$page.component === 'About'">About</NavLink>
                </li>
                <li>
                    <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
                </li>
                <li>
                    <NavLink href="/contact" :active="$page.component === 'Contact'">Contact</NavLink>
                </li>
            </ul>
        </nav>
    </div>
</template>
<script>
import NavLink from '@/shared/NavLink.vue';
export default {
    components: {
        NavLink
    }
}
</script>
