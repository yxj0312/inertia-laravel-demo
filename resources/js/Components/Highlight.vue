<template>
    <div>
        <header class="bg-gray-800 text-white flex justify-end px-2 py-1 text-xs border-b border-grey-700">
            <button class="hover:bg-gray-600 rounded px-2" @click="copyToClipboard">{{ copied? 'Copied' : 'Copy'}}</button>
        </header>
        <pre><code ref="block">{{ code }}</code></pre>
    </div>
</template>

<script setup>
import { highlightElement } from "@/Services/SyntaxHighlighting"
import { onMounted, ref } from "vue"

let props = defineProps({
    code: String
});

let block = ref(null);
let copied = ref(false)

let copyToClipboard = () => {
    // to check if it works under IE
    // if those two don't return undefined, then go
    if (navigator && navigator.clipboard) {
        navigator.clipboard.writeText(props.code)

        copied.value = true

        setTimeout(() => {
            copied.value = false
        }, 3000);
        
        return
    }

    alert('Apologies, your browser does not support the Clipboard API.')
}


onMounted(() => {
    highlightElement(block.value);
})
</script>