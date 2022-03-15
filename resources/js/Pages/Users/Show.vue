<template>
    <div class="border-b border-gray-100">
        <Link href="/users" class="text-blue-500 hover:underline">Back</Link>
    </div>
    <div class="mt-4">
        <h1 class="text-2xl font-bold"> {{ user.name }}</h1>
        <div>{{ user.email }}</div>
        <div>Registered: {{ user.created_at }}</div>
    </div>
</template>

<script setup>
defineProps({ user: Object });
</script>