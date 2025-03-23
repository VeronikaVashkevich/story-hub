<script>
import Story from '@/Components/Profile/Story/Story.vue';

export default {
  name: 'Stories',
  components: {
    Story,
  },
  props: {
    stories: Array,
  },
};
</script>

<template>
  <div class="flex flex-col ml-5 w-[846px]">
    <Story
      v-for="story in stories"
      :name="story.name"
      :status="story.status"
      :likesCount="story.likes"
      :direction="story.direction"
      :fandom="story.fandom_id"
      :rating="story.rating"
      :pages="story.pages"
      :size="story.size"
      :characters="story.characters"
      :tags="story.tags"
    />
  </div>
</template>
