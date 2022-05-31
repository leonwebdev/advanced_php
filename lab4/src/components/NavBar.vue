<template>
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <NavList @scroll="$emit('scroll', $event)" str="Home" target="#app" />
                        <NavList @scroll="$emit('scroll', $event)" str="Blog" target="#blog" />
                        <NavList @scroll="$emit('scroll', $event)" str="About" target="#about" />
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import NavList from "./NavList.vue";

export default {
    name: "NavBar",
    components: {
        NavList,
    },
};
</script>

<style>
</style>
