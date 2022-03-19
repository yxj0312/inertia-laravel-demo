/* can use common instead following specific settings   */
// import hljs from "highlight.js/lib/common";
import hljs from "highlight.js/lib/core";
import styles from "highlight.js/styles/github-dark.css"
import javascript from "highlight.js/lib/languages/javascript"
import php from "highlight.js/lib/languages/php"
// import html from "highlight.js/lib/languages/html"
import yaml from "highlight.js/lib/languages/yaml"


hljs.registerLanguage("php", php)
hljs.registerLanguage("javascript", javascript)
// hljs.registerLanguage("html", html)
hljs.registerLanguage("yaml", yaml)

export function highlightAll() {
    hljs.highlightAll();
    console.log(styles);
}

export function highlight(selector) {
    if (! selector) {
        hljs.highlightAll();
        console.log(styles);
        
        return;
    }
    document.querySelectorAll(selector + ' pre code').forEach(highlightElement)
}

export function highlightElement(element) {
    hljs.highlightElement(element)
}