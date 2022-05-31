<template>
    <div>
        <li class="nav-item">
            <a class="nav-link" @click="$emit('scroll', target)" :data-target="target" href="#">{{ str
            }}</a>
        </li>
    </div>
</template>

<script>
export default {
    name: "NavList",
    props: {
        target: String,
        str: String,
    },
};
</script>

<style>
</style>
