<template>
    <title>Shapes Exercise</title>
    <div class="shape-div">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore illo eveniet fugit rem? Quia reiciendis facilis dolores eos magnam reprehenderit! Magni sit, vero omnis laboriosam sint nihil ipsum obcaecati.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore illo eveniet fugit rem? Quia reiciendis facilis dolores eos magnam reprehenderit! Magni sit, vero omnis laboriosam sint nihil ipsum obcaecati.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore illo eveniet fugit rem? Quia reiciendis facilis dolores eos magnam reprehenderit! Magni sit, vero omnis laboriosam sint nihil ipsum obcaecati.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore illo eveniet fugit rem? Quia reiciendis facilis dolores eos magnam reprehenderit! Magni sit, vero omnis laboriosam sint nihil ipsum obcaecati.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore illo eveniet fugit rem? Quia reiciendis facilis dolores eos magnam reprehenderit! Magni sit, vero omnis laboriosam sint nihil ipsum obcaecati.
    </div>

    <div class="shape-div--background"></div>

    <div class="shape-div--polygon"></div>
    <div class="shape-div--polygon-2"></div>
</template>

<style>
html,
body {
    height: 100%;
}

body {
    display: grid;
    place-items: center;
}

.shape-div {
    width: 200px;
    height: 200px;
    background: red;
    clip-path: circle();
}

.shape-div--background {
    width: 200px;
    height: 200px;
    background: url("http://picsum.photos/200");
    clip-path: circle();
}

.shape-div--polygon {
    width: 200px;
    height: 200px;
    background: url("http://picsum.photos/200");
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}

.shape-div--polygon-2 {
    width: 200px;
    height: 200px;
    background: url("http://picsum.photos/200");
    clip-path: polygon(50% 0%, 0% 50%, 50% 100%, 100% 50%);
    animation: fancyfancy 2s;
    animation-iteration-count: infinite;
}

@keyframes fancyfancy {
    from {
        clip-path: polygon(50% 0%, 0% 50%, 50% 100%, 100% 50%);
    }

    to {
        clip-path: polygon(50% 0%, 0% 50%, 50% 100%, 100% 0%);
    }
}
</style>

<script>
export default {
    layout: null,
};
</script>