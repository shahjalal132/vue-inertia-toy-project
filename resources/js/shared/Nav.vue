<template>
    <div>
        <!-- links -->
        <nav>
            <ul class="flex space-x-4 list-unstyled">
                <li>
                    <NavLink href="/home" :active="$page.component === 'Home'">Home</NavLink>
                </li>
                <li>
                    <NavLink href="/about" :active="$page.component === 'About'">About</NavLink>
                </li>
                <li>
                    <NavLink href="/projects" :active="$page.component === 'projects/Index'">Projects</NavLink> 
                </li>
                <li>
                    <NavLink href="/users" :active="$page.component === 'users/Index' || $page.component === 'users/Create'">Users</NavLink>
                </li>
                <li>
                    <NavLink href="/contact" :active="$page.component === 'Contact'">Contact</NavLink>
                </li>
            </ul>
        </nav>
    </div>
</template>
<script setup>
import NavLink from '@/shared/NavLink.vue';
</script>
