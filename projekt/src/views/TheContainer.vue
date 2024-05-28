<template>
  <div style="height: 100vh">
    <router-view />
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue"

export default defineComponent({
  name: "TheContainer"
})
</script>
