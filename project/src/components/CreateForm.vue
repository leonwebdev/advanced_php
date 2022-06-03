<template>
    <form novalidate>
        <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name</label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                v-model="local_user.name"
            />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email</label>
            <input
                type="text"
                class="form-control"
                id="email"
                name="email"
                v-model="local_user.email"
            />
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label fw-bold">Phone</label>
            <input
                type="text"
                class="form-control"
                id="phone"
                name="phone"
                v-model="local_user.phone"
            />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>``
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
                local_user: this.user,
            };
        },
    };
</script>

<style></style>
