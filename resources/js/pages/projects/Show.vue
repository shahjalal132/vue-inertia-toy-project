<template>

    <Head :title="`Project - ${project.name}`" />

    <div class="max-w-3xl mx-auto px-4 py-8">
        <!-- Back button -->
        <Link :href="route('projects.index')" prefetch="mount"
            class="inline-flex items-center text-gray-600 hover:text-indigo-600 transition mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Back to Projects
        </Link>

        <!-- Project details -->
        <div class="bg-white shadow-md rounded-xl p-6 border">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">
                {{ project.name }}
            </h1>

            <div class="space-y-3 text-gray-600">
                <p><span class="font-semibold">Project ID:</span> {{ project.id }}</p>
                <p >
                    <span class="font-semibold">Comments:</span>
                    <span>{{ project.comments_count ?? 0 }}</span>
                </p>
                <p >
                    <span class="font-semibold">Read Status:</span>
                    <span>{{ project.user_read ?? 0 }}</span>
                </p>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import Layout from '@/shared/Layout.vue'
import { Head, Link } from '@inertiajs/vue3'

defineOptions({
    layout: Layout,
})

defineProps<{
    project: {
        id: number
        name: string
        comments_count?: number
        user_read?: boolean
    }
}>()
</script>