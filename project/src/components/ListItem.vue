<template>
    <td v-text="user.id"></td>
    <td v-text="user.name"></td>
    <td v-text="user.email"></td>
    <td v-text="user.phone"></td>
    <td>
        <button class="btn btn-primary me-3">Edit</button>
        <button class="btn btn-danger">Delete</button>
    </td>
</template>

<script>
    export default {
        name: "ListItem",
        props: {
            user: Object,
        },
    };
</script>

<style></style>
