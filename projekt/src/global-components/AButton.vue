<template>
  <button class="a-button">
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
      default: "primary",
      validator: (value: string) => ["primary", "secondary"].includes(value),
    },
  },
})
</script>

<style scoped lang="scss">
.a-button {
}
</style>
