<template>
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        User Detail
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <CreateForm v-if="!user.id" :user="user" />
                    <CreateForm v-if="user.id" :user="user" />
                </div>
            </div>
        </div>
    </div>
    <h1 class="mb-5">Full CRUD</h1>
    <button
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        class="btn btn-success mb-5"
        @click="createUser"
    >
        Create
    </button>
    <ListView :users="users" />
</template>

<script>
    import ListView from "./components/ListView.vue";
    import CreateForm from "./components/CreateForm.vue";

    export default {
        name: "App",
        components: {
            ListView,
            CreateForm,
        },
        methods: {
            showListView() {
                // ReLoad Full List View
            },
            createUser() {
                this.user = this.user_void;
            },
        },
        data() {
            return {
                api_url: "http://localhost:8001",
                error: false,
                users: [],
                user: false,
                user_void: {
                    id: "",
                    name: "",
                    email: "",
                    phone: "",
                },
            };
        },
        created() {
            fetch(this.api_url)
                .then((resp) => resp.json())
                .then((json) => {
                    this.users = json.results.reverse();
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
