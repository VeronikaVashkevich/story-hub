<script>
import UserProfileLayout from '@/Layouts/UserProfileLayout.vue';
import Stories from "@/Components/Profile/Story/Stories.vue";

export default {
  components: {
    UserProfileLayout,
    Stories,
  },

  layout: UserProfileLayout,
};
</script>

<template>
  <Stories/>
</template>
