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
                    <CreateForm
                        v-if="!user.id"
                        :user="user"
                        @create="submitCreateUser"
                    />
                    <EditForm
                        v-if="user.id"
                        :user="user"
                        @edit="submitEditUser"
                    />
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-5">Full CRUD</h1>
    <button
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        class="btn btn-success mb-5"
        @click.prevent="createUser"
    >
        Create
    </button>
    <ListView
        @edituser="setUserByListItem"
        @deleteuser="setUserByListItem"
        :users="users"
    />
</template>

<script>
    import ListView from "./components/ListView.vue";
    import CreateForm from "./components/CreateForm.vue";
    import EditForm from "./components/EditForm.vue";

    export default {
        name: "App",
        components: {
            ListView,
            CreateForm,
            EditForm,
        },
        methods: {
            showListView() {
                fetch(this.api_url)
                    .then((resp) => resp.json())
                    .then((json) => {
                        this.users = json.results.reverse();
                    });
            },
            setUserByListItem(list_user) {
                this.user = list_user;
            },
            createUser() {
                this.user = this.user_void;
            },
            submitCreateUser(create_user) {
                var options = {
                    method: "POST",
                    body: JSON.stringify(create_user),
                    headers: {
                        "Content-Type": "application/json",
                    },
                };
                fetch(this.api_url, options)
                    .then((resp) => resp.json())
                    .then((json) => {
                        console.log(json);
                        if (json.status == "201") {
                            this.user = this.user_void;
                            this.success_message = json.message;
                            this.showListView();
                        } else {
                            this.error_message = json.message;
                        }
                    });
            },
            submitEditUser(edit_user) {
                var options = {
                    method: "PUT",
                    body: JSON.stringify(edit_user),
                    headers: {
                        "Content-Type": "application/json",
                    },
                };
                fetch(this.api_url, options)
                    .then((resp) => resp.json())
                    .then((json) => {
                        console.log(json);
                        if (json.status == "200") {
                            this.user = this.user_void;
                            this.success_message = json.message;
                            this.showListView();
                        } else {
                            this.error_message = json.message;
                        }
                    });
            },
        },
        data() {
            return {
                api_url: "http://localhost:8001",
                error: false,
                users: [],
                user: {
                    id: "",
                    name: "",
                    email: "",
                    phone: "",
                },
                user_void: {
                    id: "",
                    name: "",
                    email: "",
                    phone: "",
                },
                success_message: "",
                error_message: "",
            };
        },
        created() {
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
