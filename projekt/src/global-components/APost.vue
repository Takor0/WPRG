<template>
  <div class="a-post d-flex flex-column gap-3">
    <label>
      {{ label }}
    </label>
    <div class="content">
      {{ content }}
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
  name: "APost",
  props: {
    content: {
      type: String,
      default: ""
    },
    label: {
      type: String,
      default: ""
    }
  }
})
</script>

<style scoped lang="scss">
.a-post {
  border: 1px solid $primary;
  color: $primary;
  border-radius: 5px;
  padding: 16px;

  label {
    font-weight: 300;
    font-size: 13px;
    text-transform: capitalize;
  }

  .content {
  }
}
</style>
