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

  <br>

  <div id="example2">
    <pre>
      <code ref="code">
        class ExampleAgain
        {
          Public function __construct()
          {
            //
          }
        }
      </code>
    </pre>
  </div>
</template>

<script>
// import Layout from "../Shared/Layout";
// import { Head } from "@inertiajs/inertia-vue3";
import { highlightAll } from "@/Services/SyntaxHighlighting" 
import { highlight, highlightElement } from "@/Services/SyntaxHighlighting" 

export default {
  // layout: Layout
  mounted() {
    // highlightAll();
    // highlight('#example2');
    highlightElement(this.$refs.code);
  }
}
</script>