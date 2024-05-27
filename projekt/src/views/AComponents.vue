<template>
  <div class="d-flex flex-column m-5 gap-5">
    <div class="d-flex gap-4">
      <AButton color="primary">Click me</AButton>
      <AButton color="secondary">Click me</AButton>
    </div>
    <ATabs v-model="tab" :options="['TAG1', 'TAG2', 'TAG3']" />
    <ATextArea v-model="textArea" />
    <APost :label="post.label" :content="post.content" />
    <AInput v-model="inputText" label="Label" />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue"
import APost from "@/global-components/APost.vue"
import moment from "moment"
import AInput from "@/global-components/AInput.vue"
export default defineComponent({
  name: "AComponents",
  components: { AInput, APost },
  data() {
    return {
      tab: "TAG1",
      textArea: "Inpucik kogucik",
      post: {
        label: moment().format("MMM D, HH:mm"),
        content: "Post content"
      },
      inputText: null
    }
  }
})
</script>
