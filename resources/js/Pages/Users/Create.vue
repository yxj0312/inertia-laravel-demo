<script>
export default {}
</script>

<template>
    <Head title="Create User" />

    <h1 class="text-3xl">Create New User</h1>

    <form action="/" method="post">
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>

            <input
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                required
            />
        </div>
    </form>
</template>
