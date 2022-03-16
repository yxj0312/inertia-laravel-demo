<template>
  <Head>
    <title>Home</title>
    <meta
      type="description"
      content="Home information"
      head-key="description"
    >
  </Head>

  <h1 class="text-3xl">Blog</h1>

  <pre>
    <code>
      class Example
      {
        Public function __construct()
        {
          //
        }
      }
    </code>
  </pre>
</template>

<script>
import Layout from "../Shared/Layout";
import { Head } from "@inertiajs/inertia-vue3";
import hljs from "highlight.js";
import styles from "highlight.js/styles/github-dark.css"

export default {
  // layout: Layout
  mounted() {
    hljs.highlightAll();
    console.log(styles);
  }
}
</script>