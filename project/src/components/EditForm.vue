<template>
    <form novalidate>
        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name</label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                v-model="edit_user.name"
            />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input
                type="text"
                class="form-control"
                id="email"
                name="email"
                v-model="edit_user.email"
            />
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label fw-bold">Phone</label>
            <input
                type="text"
                class="form-control"
                id="phone"
                name="phone"
                v-model="edit_user.phone"
            />
        </div>
        <button
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            type="submit"
            class="btn btn-primary"
            @click.prevent="submitEdit"
        >
            Submit
        </button>
    </form>
</template>

<script>
    export default {
        name: "CreateForm",
        props: {
            user: Object,
        },
        data() {
            return {
                edit_user: this.user,
            };
        },
        methods: {
            submitEdit() {
                this.$emit("edit", this.edit_user);
                this.edit_user = {
                    id: "",
                    name: "",
                    email: "",
                    phone: "",
                };
            },
        },
    };
</script>

<style></style>
