<script>
    export default {
        props: {
            links: Array
        }
    }
</script>

<template>
  <div>
    <Component
      :is="link.url ? 'Link' : 'Span'"
      v-for="link in users.links"
      :href="link.url"
      v-html="link.label"
      class="px-1"
      :class="link.url ? '' : 'text-gray-500'"
    />
  </div>
</template>
