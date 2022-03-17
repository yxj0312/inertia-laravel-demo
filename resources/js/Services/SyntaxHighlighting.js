import hljs from "highlight.js";
import styles from "highlight.js/styles/github-dark.css"
import javascript from "highlight.js/lib/languages/javascript"
import php from "highlight.js/lib/languages/php"
// import html from "highlight.js/lib/languages/html"
import yaml from "highlight.js/lib/languages/yaml"


hljs.registerLanguage("php", php)
hljs.registerLanguage("javascript", javascript)
// hljs.registerLanguage("html", html)
hljs.registerLanguage("yaml", yaml)

export function highlight() {
    hljs.highlightAll();
    console.log(styles);
}