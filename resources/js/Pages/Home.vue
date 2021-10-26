<template>
  <div>Home</div>

  <nav>
    <ui>
      <li>
        <Link href="/">Home</Link>
      </li>
      <li>
        <Link href="/users">Users</Link>
      </li>
      <li>
        <Link href="/settings">Settings</Link>
      </li>
    </ui>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: { Link }
};
</script>