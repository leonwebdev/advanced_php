<template>
    <li class="nav-item">
        <a class="nav-link" @click.prevent="$emit('scroll', target)" href="#">{{ str
        }}</a>
    </li>
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
