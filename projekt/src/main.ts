import { createApp } from "vue"
import App from "./App.vue"
import router from "./router"
import store from "./store"
import { Helpers } from "@/mixins/helpers"

import AButton from "@/global-components/AButton.vue"
import APost from "@/global-components/APost.vue"
import ATabs from "@/global-components/ATabs.vue"
import ATextArea from "@/global-components/ATextArea.vue"
import AInput from "@/global-components/AInput.vue"

import moment from "moment"
moment.locale("pl")

import "@fontsource/ubuntu"

const app = createApp(App)
app.use(store).use(router).mount("#app")
app.mixin(Helpers)
app.component("AButton", AButton)
app.component("APost", APost)
app.component("ATabs", ATabs)
app.component("ATextArea", ATextArea)
app.component("AInput", AInput)
