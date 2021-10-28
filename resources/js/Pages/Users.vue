<template>
  <h1 class="text-4xl font-bold">Users</h1>
  <Nav />

  <div>
    <p style="margin-top: 400px">The current time is {{ time }}.</p>
  </div>
</template>

<script>
import Nav from "../Shared/Nav.vue"
export default {
  components: { Nav },

  props: { time: String}
};
</script>