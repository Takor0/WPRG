<template>
  <div class="login d-flex h-100 align-items-center justify-content-center">
    <div class="d-flex flex-column gap-3 align-items-center">
      <AInput
        v-for="(input, key) in inputs"
        :key="key"
        v-model="input.value"
        :type="input.type"
        :label="input.label"
      />
      <AButton
        color="primary"
        type="submit"
        class="w-100"
        @click="handleButtonClick"
        >{{ isRegister ? "Utwórz konto" : "Zaloguj" }}
      </AButton>
      <div class="c-primary mt-2">
        {{ isRegister ? "Posiadasz już konto?" : "Nie posiadasz konta?" }}
        <span class="fw-bold pointer" @click="isRegister = !isRegister">
          {{ isRegister ? "Zaloguj się" : "Zarejestruj się" }}
        </span>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue"
import AInput from "@/global-components/AInput.vue"
import { userStore } from "@/store/userStore"

export default defineComponent({
  name: "LoginView",
  components: { AInput },
  data() {
    return {
      isRegister: false,
      inputs: {
        email: { label: "Email", value: "", type: "email" },
        password: { label: "Password", value: "", type: "password" }
      }
    }
  },
  methods: {
    handleButtonClick() {
      userStore.dispatch("login", {
        email: this.inputs.email.value,
        password: this.inputs.password.value
      })
    }
  },
  watch: {
    isRegister() {
      Object.values(this.inputs).forEach((input) => (input.value = ""))
    }
  }
})
</script>
