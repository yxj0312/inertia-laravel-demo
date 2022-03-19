<template>
    <pre><code ref="code">{{ code }}</code></pre>
</template>

<script setup>
import { highlightElement } from "@/Services/SyntaxHighlighting"
import {onMounted} from "vue"

defineProps: ({
    code: String
}),
onMounted(() => {
    highlightElement(this.$refs.code);
})
</script>