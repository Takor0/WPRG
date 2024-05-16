<template>
  <div class="a-tabs d-flex flex-row`">
    <div
      class="tab"
      v-for="(option, index) in options"
      :key="index"
      @click="updateValue(getValue(option))"
      :class="{ tab__selected: getValue(option) === modelValue }"
    >
      {{ getLabel(option) }}
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue"

interface Option {
  label: string
  value: string | number
}

type OptionType = string | number | Option
export default defineComponent({
  name: "ATabs",
  methods: {
    getValue(option: OptionType): string | number {
      return typeof option === "object" ? option.value : option
    },
    getLabel(option: OptionType): string | number {
      return typeof option === "object" ? option.label : option
    },
    updateValue(value: string | number) {
      this.$emit("update:modelValue", value)
    }
  },
  props: {
    options: {
      type: Array as () => OptionType[],
      required: true
    },
    modelValue: {
      type: [String, Number],
      default: null
    }
  }
})
</script>
<style lang="scss" scoped>
.a-tabs {
  background-color: black;
  width: fit-content;
  border-radius: 8px;

  .tab {
    color: $primary;
    cursor: pointer;
    padding: 12px 32px;

    &__selected {
      background-color: $primary;
      color: black;
      border-radius: 8px;
    }
  }
}
</style>
