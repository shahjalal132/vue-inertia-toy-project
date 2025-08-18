<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
      <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome 🎉</h1>
        <p class="text-gray-600 mb-6">
          This is a simple welcome page built with <span class="font-semibold">Vue 3</span> & <span class="font-semibold">Inertia.js</span>.
        </p>
  
        <div class="flex justify-center space-x-4">
          <Link
            href="/login"
            class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
          >
            Login
          </Link>
          <Link
            href="/register"
            class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition"
          >
            Register
          </Link>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3';
  </script>
  