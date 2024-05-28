<template>
  <div class="a-input">
    <div class="a-input__wrapper">
      <input
        id="input"
        :class="aInputClass"
        :value="modelValue"
        @input="updateValue"
        :type="type"
      />
      <label for="input">{{ label }}</label>
    </div>
  </div>
</template>
<script>
export default {
  name: "AInput",
  props: {
    modelValue: {
      type: String,
      required: true
    },
    label: {
      type: String,
      default: null
    },
    type: {
      type: String,
      default: "text"
    }
  },
  methods: {
    updateValue(event) {
      this.$emit("update:modelValue", event.target.value)
    }
  },
  computed: {
    aInputClass() {
      return {
        active: this.modelValue
      }
    }
  }
}
</script>
<style lang="scss">
input:focus {
  border: 1px solid red;
}

.a-input {
  &__wrapper {
    width: fit-content;
    position: relative;
    input + label {
      transition: all 0.3s;
    }

    input {
      background-color: transparent;
      box-shadow: none;
      outline: none;
      border: 1px solid $primary;
      border-radius: 5px;
      color: $primary;
      font-size: 20px;
      padding: 10px;

      &:focus + label,
      &.active + label {
        top: -14px;
        left: 6px;
        z-index: 1;
        font-size: 16px;
      }
    }

    label {
      z-index: -1;
      top: 10px;
      left: 6px;
      position: absolute;
      background-color: $secondary;
      padding: 0 5px;
      font-size: 20px;
      color: $primary;
    }
  }
}
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
  -webkit-text-fill-color: $primary;
  transition: background-color 5000s ease-in-out 0s;
}
</style>
