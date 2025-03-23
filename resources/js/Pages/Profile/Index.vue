<script>
import UserProfileLayout from '@/Layouts/UserProfileLayout.vue';
import Stories from '@/Components/Profile/Story/Stories.vue';

export default {
  components: {
    UserProfileLayout,
    Stories,
  },

  props: {
    stories: Array,
  },

  layout: UserProfileLayout,
};
</script>

<template>
  <Stories :stories="stories" />
</template>
