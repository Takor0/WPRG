<template>
  <div class="a-card">
    <slot></slot>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
  name: "ACard"
})
</script>

<style scoped lang="scss">
.a-card {
  border: 1px solid $primary;
  color: $primary;
  border-radius: 5px;
  padding: 16px;
}
</style>
