<template>
  <div class="login d-flex h-100 align-items-center justify-content-center">
    <form class="d-flex flex-column gap-3">
      <AInput
        v-for="(input, key) in inputs"
        :key="key"
        v-model="input.value"
        :type="input.type"
        :label="input.label"
      />
      <AButton color="primary" type="submit">{{
        isRegister ? "Utwórz konto" : "Zaloguj"
      }}</AButton>
      <div class="c-primary mt-2">
        {{ isRegister ? "Posiadasz już konto?" : "Nie posiadasz konta?" }}
        <span class="fw-bold pointer" @click="isRegister = !isRegister">
          {{ isRegister ? "Zaloguj się" : "Zarejestruj się" }}
        </span>
      </div>
    </form>
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
      isRegister: false,
      inputs: [
        { label: "Email", value: "", type: "email" },
        { label: "Password", value: "", type: "password" }
      ]
    }
  },
  watch: {
    isRegister() {
      Object.values(this.inputs).forEach((input) => (input.value = ""))
    }
  }
})
</script>
