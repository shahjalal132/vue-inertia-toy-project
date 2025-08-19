<template>

    <Head title="Projects" />

    <div class="max-w-5xl mx-auto py-10 px-6">
        <!-- Page Title -->
        <h2 class="text-3xl font-bold text-white mb-6">Projects</h2>

        <!-- Polling Buttons -->
        <div class="flex justify-center gap-3 my-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="start">
                Start Polling
            </button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="stop">
                Stop Polling
            </button>
        </div>

        <!-- Projects Grid -->
        <div v-if="projects.length" class="space-y-4">
            <div v-for="project in projects" :key="project.id"
                class="bg-white shadow-md rounded-2xl p-5 hover:shadow-lg transition">
                <Link :href="route('projects.show', project.id)" class="grid grid-cols-3 items-center gap-4">
                <!-- Project Name -->
                <h3 class="text-xl font-semibold text-gray-900">
                    {{ project.name }}
                </h3>

                <!-- Stats -->
                <p class="text-sm text-center text-gray-600">
                    💬 <span class="font-medium">{{ project.comments_count }}</span>
                    comments
                </p>
                <p class="text-sm text-end text-gray-600">
                    👁️ <span class="font-medium">{{ project.user_read }}</span>
                    users read
                </p>
                </Link>
            </div>
        </div>

        <!-- Empty State -->
        <div v-else class="text-center py-10 text-gray-500">
            <p class="text-lg">No projects found 🚀</p>
        </div>
    </div>
</template>

<script setup lang="ts">
import Layout from '@/shared/Layout.vue'
import { Head, usePoll, Link } from '@inertiajs/vue3'

defineOptions({
    layout: Layout,
})

defineProps<{
    projects: {
        id: number
        name: string
        comments_count: number
        user_read: number
    }[]
}>()

let { start, stop } = usePoll(
    2000,
    { only: ['projects'] },
    { autoStart: false }
)
</script>