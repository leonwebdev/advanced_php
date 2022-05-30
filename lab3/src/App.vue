<template>
  <h1 class="mt-3 mb-5">Book List</h1>

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
        <td><img v-bind:src="getImagePath(user.image)"></td>
        <td v-text="user.title"></td>
        <td v-text="user.author"></td>
        <td v-text="user.publisher"></td>
        <td v-text="user.format"></td>
        <td v-text="user.genre"></td>
        <td v-text="user.year_published"></td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      users: [],
      user:false
    }
  },
  methods: {
    getImagePath(img) {
      return "images/covers/" + img;
    }
  },
  created() {
    fetch("http://localhost:8001")
      .then(resp => resp.json())
      .then(json => {
        this.users = json;
        console.log(this.users);
      })
  }
};
</script>

<style>
#app {
  margin: 0 auto;
  width: 980px;
}
img{
  width: 50px;
  height: auto;
}
</style>
