<template>
    <h1 class="mb-5">Full CRUD</h1>
    <button class="btn btn-success mb-5">Create</button>
    <ListView :users="users" />
</template>

<script>
    import ListView from "./components/ListView.vue";

    export default {
        name: "App",
        components: {
            ListView,
        },
        methods: {
            showListView() {
                // ReLoad Full List View
            },
        },
        data() {
            return {
                api_url: "http://localhost:8001",
                error: false,
                users: {},
                user: false,
            };
        },
        mounted() {
            fetch(this.api_url)
                .then((resp) => resp.json())
                .then((json) => {
                    this.users = json.results;
                });
            this.showListView();
        },
    };
</script>

<style>
    #app {
        width: 980px;
        margin: 0 auto;
        margin-top: 1rem;
    }
</style>
