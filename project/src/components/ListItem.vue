<template>
    <td v-text="user.id"></td>
    <td v-text="user.name"></td>
    <td v-text="user.email"></td>
    <td v-text="user.phone"></td>
    <td>
        <button
            @click.prevent="$emit('edituser', list_user)"
            class="btn btn-primary me-3"
        >
            Edit
        </button>
        <button
            @click.prevent="$emit('deleteuser', list_user)"
            class="btn btn-danger"
        >
            Delete
        </button>
    </td>
</template>

<script>
    export default {
        name: "ListItem",
        props: {
            user: Object,
        },
        emits: ["edituser", "deleteuser"],
        data() {
            return {
                list_user: this.user,
            };
        },
    };
</script>

<style></style>
