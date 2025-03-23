<script>
export default {
  name: 'PageHeader',
  props: {
    title: String,
  },
};
</script>

<template>
  <div class="flex flex-row justify-between">
    <h2 class="text-2xl font-bold">{{ title }}</h2>
    <slot />
  </div>
</template>
