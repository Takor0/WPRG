<template>
  <div class="a-tabs">
    <div v-for="(option, index) in options" :key="index">
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

type OptionType = string | Option
export default defineComponent({
  name: "ATabs",
  methods: {
    getLabel(option: OptionType): string | number {
      return typeof option === "string" ? option : option.label
    },
  },
  props: {
    options: {
      type: Array as () => OptionType[],
      required: true,
    },
  },
})
</script>

<style scoped lang="scss"></style>
