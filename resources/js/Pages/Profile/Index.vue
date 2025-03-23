<script>
import UserProfileLayout from '@/Layouts/UserProfileLayout.vue';
import Stories from '@/Components/Profile/Story/Stories.vue';
import PageHeader from '@/Components/Profile/PageHeader/PageHeader.vue';
import AddButton from '@/Components/Buttons/AddButton/AddButton.vue';

export default {
  components: {
    AddButton,
    UserProfileLayout,
    Stories,
    PageHeader,
  },

  props: {
    stories: Array,
  },

  layout: UserProfileLayout,
};
</script>

<template>
  <div class="flex flex-col ml-5">
    <PageHeader title="Мои истории">
      <AddButton />
    </PageHeader>
    <div class="mt-3">
      <Stories :stories="stories" />
    </div>
  </div>
</template>
