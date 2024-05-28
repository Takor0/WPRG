<template>
  <div class="login d-flex h-100 align-items-center justify-content-center">
    <div class="d-flex flex-column gap-3">
      <AInput
        v-for="(input, key) in inputs"
        :key="key"
        v-model="input.value"
        :type="input.type"
        :label="input.label"
      />
      <AButton color="primary">Zaloguj</AButton>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue"
import AInput from "@/global-components/AInput.vue"

export default defineComponent({
  name: "LoginView",
  components: { AInput },
  data() {
    return {
      inputs: [
        { label: "Email", value: "", type: "email" },
        { label: "Password", value: "", type: "password" }
      ]
    }
  }
})
</script>
