<template>
  <button class="a-button" :class="color">
    <slot></slot>
  </button>
</template>

<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
  name: "AButton",
  props: {
    color: {
      type: String,
      validator: (value: string) => ["primary", "secondary"].includes(value),
    },
  },
})
</script>

<style scoped lang="scss">
@import "src/styles/colors";

.a-button {
  background-color: transparent;
  cursor: pointer;
  border-radius: 6px;
  padding: 10px 20px;
  border: 1px solid $primary;
  transition: background-color 0.3s ease, color 0.3s ease,
    border-color 0.3s ease;

  &:focus {
    outline: none;
  }

  &:disabled {
    background-color: lighten($primary, 40%);
    cursor: not-allowed;
  }

  &.primary {
    background-color: $primary;
    color: $secondary;
  }

  &.secondary {
    color: $primary;
  }

  &:hover {
    background-color: darken($primary, 10%);
    border-color: $secondary;
  }

  &:active {
    background-color: darken($primary, 20%);
  }
}
</style>
