<script>
import LeftNavbarItem from '@/Components/LeftNavbar/LeftNavbarItem.vue';

export default {
  name: 'LeftNavbar',

  components: {
    LeftNavbarItem,
  },
};
</script>

<template>
  <div class="flex flex-col text-xl border-2 px-6 py-2 rounded-md pb-2 h-max">
    <LeftNavbarItem :link="route('profile.index')" label="Мои истории" />
    <LeftNavbarItem
      :link="route('profile.index')"
      label="Мои сборники"
      class="mt-2"
    />
    <LeftNavbarItem :link="route('profile.index')" label="Блог" class="mt-2" />
    <LeftNavbarItem
      :link="route('profile.index')"
      label="Отзывы"
      class="mt-2"
    />
  </div>
</template>
