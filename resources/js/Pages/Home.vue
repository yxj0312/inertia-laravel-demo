<template>
  <div>Hello,  {{ name }}</div>

  <p>In this series, we will use the following framworks:</p>

  <ul>
    <li v-for="framework in frameworks" v-text="framework"></li>
  </ul>
</template>

<script>
export default {
  props: {
    name: String,
    frameworks: Array
  }
};
</script>