<template>
    <div :id="section_id" class="section" :class="bg">
        <h2>{{ section_title }}</h2>
        <div>
            <p>{{ sec_content }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PageSection',
    props: {
        section_id: String,
        section_title: String,
        sec_content: String,
        bg: String
    }
}
</script>

<style>
.section{
    height: 20rem;
    padding-top: 5rem;
    padding-left: 2rem;
    width: 50rem;
}
</style>