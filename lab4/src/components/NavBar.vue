<template>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <NavList @scroll="$emit('scroll', $event)" str="Home" target="#app" />
                        <NavList @scroll="$emit('scroll', $event)" str="Blog" target="#blog" />
                        <NavList @scroll="$emit('scroll', $event)" str="About" target="#about" />
                        <NavList @scroll="$emit('scroll', $event)" str="Shop" target="#shop" />
                        <NavList @scroll="$emit('scroll', $event)" str="Featured" target="#featured" />
                        <NavList @scroll="$emit('scroll', $event)" str="Contact" target="#contact" />
                    </ul>
                </div>
            </div>
        </nav>
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
