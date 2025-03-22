<template>
  <div class="container mx-auto">
    <Header></Header>
    <slot />
  </div>
</template>

<script>
import Header from '@/Components/Header/Header.vue';

export default {
  name: 'AppLayout',

  components: {
    Header,
  },
};
</script>
