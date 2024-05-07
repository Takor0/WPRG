<template>
  <div>
    <AButton>Click me</AButton>
    <ACard>A card</ACard>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
  name: "AComponents",
})
</script>

<style scoped lang="scss">
.login {
  gap: 30px;
  display: flex;
  margin: 30px;
}
</style>
