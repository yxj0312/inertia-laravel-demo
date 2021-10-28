<template>
  <h1 class="text-4xl font-bold">Users</h1>
  <Nav />

  <div>
    <p style="margin-top: 400px">The current time is {{ time }}.</p>

    <Link href="/users" class="text-blue-500">
      Refresh
    </Link>
  </div>
</template>

<script>
import Nav from "../Shared/Nav.vue"
import { Link } from '@inertiajs/inertia-vue3'
export default {
  components: { Nav, Link },

  props: { time: String}
};
</script>