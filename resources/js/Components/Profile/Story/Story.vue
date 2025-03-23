<script>
import {
  STORY_DIRECTIONS,
  STORY_DIRECTIONS_COLORS,
  STORY_RATINGS,
  STORY_SIZES,
  STORY_STATUES,
  STORY_STATUSES_COLORS,
} from '@/Constants/stories.js';

export default {
  name: 'Story',
  props: {
    name: {
      type: String,
      default: '',
    },
    status: {
      type: String,
      default: '',
    },
    likesCount: {
      type: Number,
      default: 0,
    },
    direction: {
      type: String,
      default: '',
    },
    fandom: {
      type: Number,
      default: 0,
    },
    rating: {
      type: String,
      default: '',
    },
    characters: {
      type: Object,
      default: {},
    },
    pages: {
      type: Number,
      default: '',
    },
    size: {
      type: String,
      default: '',
    },
    tags: {
      type: Object,
      default: {},
    },
  },
  computed: {
    storyStatus() {
      return STORY_STATUES[this.status];
    },
    storyStatusColorClass() {
      return STORY_STATUSES_COLORS[this.status];
    },
    storyDirection() {
      return STORY_DIRECTIONS[this.direction];
    },
    storyDirectionClass() {
      return STORY_DIRECTIONS_COLORS[this.direction];
    },
    storyRating() {
      return STORY_RATINGS[this.rating].label;
    },
    storySize() {
      return STORY_SIZES[this.size];
    },
  },
};
</script>

<template>
  <div class="flex flex-col border-2 rounded-md p-3 [&:not(:first-child)]:mt-3">
    <div class="flex flex-row content-between">
      <div class="flex flex-row items-center">
        <span class="font-semibold text-xl">{{ name }}</span>
        <span class="ml-2" :class="storyStatusColorClass">{{
          storyStatus
        }}</span>
        <img src="@img/icons/like.svg" alt="Like" class="ml-2" />
        <span class="ml-1">115</span>
      </div>
    </div>
    <div class="flex flex-col text-lg mt-2">
      <div class="flex flex-row">
        <span>Направление:</span>
        <span class="ml-2" :class="storyDirectionClass">{{
          storyDirection
        }}</span>
      </div>
      <div class="flex flex-row">
        <span>Фандом:</span>
        <span class="ml-2">
          <a href="#">{{ fandom }}</a>
        </span>
      </div>
      <div class="flex flex-row">
        <span>Рейтинг:</span>
        <span class="ml-2">{{ storyRating }}</span>
      </div>
      <div class="flex flex-row">
        <span>Персонажи:</span>
        <span class="ml-2">
          <a href="#" v-for="(character, chIndex) in characters"
            >{{ character.name
            }}<span v-if="chIndex !== characters.length - 1">, </span></a
          >
        </span>
      </div>
      <div class="flex flex-row">
        <span>Количество страниц:</span>
        <span class="ml-2">{{ pages }}</span>
      </div>
      <div class="flex flex-row">
        <span>Размер:</span>
        <span class="ml-2">{{ storySize }}</span>
      </div>
      <div class="flex flex-row">
        <span>Метки:</span>
        <span class="ml-2">
          <a href="#" v-for="(tag, lIndex) in tags"
            >{{ tag.name }}<span v-if="lIndex !== tags.length - 1">, </span></a
          >
        </span>
      </div>
    </div>
  </div>
</template>
