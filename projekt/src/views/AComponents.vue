<template>
  <div class="d-flex flex-column m-5 gap-5">
    <div class="d-flex gap-4">
      <AButton color="primary">Click me</AButton>
      <AButton color="secondary">Click me</AButton>
    </div>
    <ACard>A card</ACard>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
  name: "AComponents",
})
</script>
