<template>
    <table id="list" class="table table-striped table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>

            <tr v-for="user in users" :key="user.id">
                <ListItem
                    @edituser="$emit('edituser', $event)"
                    @deleteuser="$emit('deleteuser', $event)"
                    :user="user"
                />
            </tr>
        </tbody>
    </table>
</template>

<script>
    import ListItem from "./ListItem.vue";

    export default {
        name: "ListView",
        components: {
            ListItem,
        },
        props: {
            users: Array,
        },
    };
</script>

<style></style>
