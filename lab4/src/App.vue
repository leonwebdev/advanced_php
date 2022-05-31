<template>
  <div>
    <NavBar @scroll="navscroll" />
    <div id="section">
      <PageSection section_id="blog" section_title="Blog" sec_content="This is the Blog Content." />
      <PageSection section_id="about" section_title="About" sec_content="This is the About Content." />
      <PageSection section_id="shop" section_title="Shop" sec_content="This is the Shop Content." />
      <PageSection section_id="featured" section_title="Featured" sec_content="This is the Featured Content." />
      <PageSection section_id="contact" section_title="Contact" sec_content="This is the Contact Content." />
    </div>
  </div>
</template>

<script>
import PageSection from "./components/PageSection.vue";
import NavBar from "./components/NavBar.vue";

export default {
  name: "App",
  components: {
    PageSection,
    NavBar,
  },
  methods: {
    navscroll(target) {
      console.log(target);
      document.querySelector(target).scrollIntoView({
        behavior: "smooth"
      });
    }
  }
};
</script>

<style>
#section {
  padding-top: 5rem;
  margin-left: 2rem;
}

body{
  padding-top: 1px;
  padding-bottom: 10rem;
}
</style>
