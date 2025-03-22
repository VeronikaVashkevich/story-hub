<script>
import Story from '@/Components/Profile/Story/Story.vue';

export default {
  name: 'Stories',
  components: {
    Story,
  },
};
</script>

<template>
  <div class="flex flex-col ml-5 w-[846px]">
    <Story
      name="Бар Кот Шредингера"
      status="inProcess"
      likesCount="2"
      direction="get"
      fandom="11111"
      rating="pg18"
      pages="23"
      size="maxi"
      :characters="['Jack', 'Nelly']"
      :tags="['Алкоголь', 'Курение']"
    />
  </div>
</template>
