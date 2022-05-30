<template>
    <div>
        <h1 class="mt-3 mb-5">Book List</h1>

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
                            Book Detail
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-unstyled">
                            <li>
                                <img class="dtl_img mb-3" v-bind:src="getImagePath(user.image)" />
                            </li>
                            <li v-html="'<strong>Title:</strong> '+ user.title"></li>
                            <li v-html="'<strong>Author:</strong> '+ user.author"></li>
                            <li v-html="'<strong>Publisher:</strong> '+ user.publisher"></li>
                            <li v-html="'<strong>Format:</strong> '+ user.format"></li>
                            <li v-html="'<strong>Genre:</strong> '+ user.genre"></li>
                            <li v-html="'<strong>Year Published:</strong> '+ user.year_published"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <table id="list" class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Format</th>
                    <th>Genre</th>
                    <th>Year Published</th>
                </tr>

                <tr v-for="user in users" :key="user.id">
                    <td data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor_pointer" @click="setUser(user)"><img v-bind:src="getImagePath(user.image)" /></td>
                    <td data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor_pointer" @click="setUser(user)" v-html="user.title"></td>
                    <td v-html="user.author"></td>
                    <td v-html="user.publisher"></td>
                    <td v-html="user.format"></td>
                    <td v-html="user.genre"></td>
                    <td v-html="user.year_published"></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            users: [],
            user: false,
        };
    },
    methods: {
        getImagePath(img) {
            return "images/covers/" + img;
        },
        setUser(user){
          this.user = user
          var myModal = document.getElementById("exampleModal")
          myModal.show()
        }
    },
    created() {
        fetch("http://localhost:8001")
            .then((resp) => resp.json())
            .then((json) => {
                this.users = json;
                //console.log(this.users);
                //this.user = this.users[0];
            });
    },
};
</script>

<style>
#app {
    margin: 0 auto;
    width: 980px;
}
img {
    width: 50px;
    height: auto;
}
img.dtl_img {
    width: 70%;
    height: auto;
}
.cursor_pointer{
  cursor: pointer;
}

</style>
