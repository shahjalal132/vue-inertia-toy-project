<template>

    <Head title="Create User" />

    <div class="max-w-lg mt-20 mx-auto bg-white dark:bg-gray-800 shadow rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-6">Create User</h2>

        <!-- Form -->
        <form @submit.prevent="form.post(route('users.store'))" class="space-y-4">
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Name
                </label>
                <input v-model="form.name" type="text" id="name"
                    class="mt-1 py-3 px-2 block w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:border-blue-500 focus:ring-blue-500 sm:text-sm"/>
                <div v-if="form.errors.name" class="text-red-500 text-sm mt-1">
                    {{ form.errors.name }}
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Email
                </label>
                <input v-model="form.email" type="email" id="email"
                    class="mt-1 block py-3 px-2 w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:border-blue-500 focus:ring-blue-500 sm:text-sm" />
                <div v-if="form.errors.email" class="text-red-500 text-sm mt-1">
                    {{ form.errors.email }}
                </div>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Password
                </label>
                <input v-model="form.password" type="password" id="password"
                    class="mt-1 block py-3 px-2 w-full rounded-md border-gray-300 shadow-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:border-blue-500 focus:ring-blue-500 sm:text-sm" />
                <div v-if="form.errors.password" class="text-red-500 text-sm mt-1">
                    {{ form.errors.password }}
                </div>
            </div>

            <!-- Submit -->
            <div>
                <button type="submit" :disabled="form.processing"
                    class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 disabled:opacity-50">
                    Create User
                </button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { Head, useForm } from "@inertiajs/vue3";
import Layout from "@/shared/Layout.vue";

defineOptions({
    layout: Layout,
});

// Form state
const form = useForm({
    name: "",
    email: "",
    password: "",
});
</script>