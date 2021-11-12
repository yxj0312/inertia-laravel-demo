<template>
  <Head title="Users" />
  <h1 class="text-3xl">Users</h1>

  <ul>
    <li v-for="user in users" :key="user.id" v-text="user.name"></li>
  </ul>

  <div style="margin-top: 1000px">
    <p>The current time is {{ time }}.</p>

    <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
  </div>
</template>

<script setup>
defineProps({ time: String, users: Array });
// import Layout from "../Shared/Layout";
// export default {
//   // layout: Layout,
//   props: { time: String }
// };
</script>