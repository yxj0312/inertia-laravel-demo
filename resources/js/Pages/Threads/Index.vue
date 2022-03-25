<template>
    <Head title="Threads" />

    <div>
        <article v-for="thread in threads" :key="thread.id" class="mb-8">
            <header>
                <h1 class="font-bold text-lg">{{ thread.title }}</h1>
                <p class="text-xs">By {{ thread.author.name }}</p>
            </header>

            <div class="mt-3">{{ thread.body }}</div>
        </article>
    </div>
</template>

<script setup>
defineProps({ threads: Array })
</script>