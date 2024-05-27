<template>
  <div class="a-text-area">
    <label>{{ label }}</label>
    <span class="d-flex">
      <textarea :value="modelValue" @input="updateValue" />
    </span>
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
      default: ""
    }
  },
  methods: {
    updateValue(event) {
      this.$emit("update:modelValue", event.target.value)
    }
  }
}
</script>
<style lang="scss">
.a-text-area {
  textarea {
    width: 20vw;
    height: 10vh;
    resize: none;
    background-color: transparent;
    box-shadow: none;
    outline: none;
    border: 1px solid $primary;
    color: $primary;
    border-radius: 5px;
    padding: 16px;
    transition: border 0.2s;
  }
  textarea:focus {
    border: 1px solid darken($primary, 10%);
  }
}
</style>
