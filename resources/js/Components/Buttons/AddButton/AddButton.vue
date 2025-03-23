<script>
export default {
  name: 'AddButton',
  props: {
    title: {
      type: String,
      default: 'Добавить',
    },
  },
};
</script>

<template>
  <button class="flex flex-row items-center text-lg">
    <img src="@img/icons/plus.svg" alt="Add Icon" class="w-[20px]" />
    <span class="ml-2">{{ title }}</span>
  </button>
</template>
