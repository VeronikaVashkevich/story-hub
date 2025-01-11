<template>
  <div class="container mx-auto">
    <Header></Header>
    <slot/>
  </div>
</template>

<script>
import Header from "@/Components/Header.vue";

export default {
  name: "AppLayouts",

  components: {
    Header,
  },
};
</script>
