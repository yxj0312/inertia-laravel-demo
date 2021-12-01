<template>
<div class="page">

    <h1 class="text-xl">Hello Laracasts</h1>

    <img src="http://picsum.photos/150" alt />

    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta voluptatibus, praesentium voluptas temporibus, explicabo quos debitis obcaecati optio aut officiis saepe voluptatum illo labore cum nihil libero amet possimus. Esse!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta voluptatibus, praesentium voluptas temporibus, explicabo quos debitis obcaecati optio aut officiis saepe voluptatum illo labore cum nihil libero amet possimus. Esse!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta voluptatibus, praesentium voluptas temporibus, explicabo quos debitis obcaecati optio aut officiis saepe voluptatum illo labore cum nihil libero amet possimus. Esse!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta voluptatibus, praesentium voluptas temporibus, explicabo quos debitis obcaecati optio aut officiis saepe voluptatum illo labore cum nihil libero amet possimus. Esse!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta voluptatibus, praesentium voluptas temporibus, explicabo quos debitis obcaecati optio aut officiis saepe voluptatum illo labore cum nihil libero amet possimus. Esse!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta voluptatibus, praesentium voluptas temporibus, explicabo quos debitis obcaecati optio aut officiis saepe voluptatum illo labore cum nihil libero amet possimus. Esse!
    </p>
</div>
</template>

    <script>
export default {
    layout: null,
};
</script>
    
<style>
html,
body {
    height: 100%;
}

body {
    display: grid;
    place-items: center;
}

.page {
    width: 400px;
    padding: 1rem 2rem;
    margin: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    font-family: sans-serif;
    line-height: 1.5rem;
}

img {
    float: right;
    clip-path: circle();
}
</style>
