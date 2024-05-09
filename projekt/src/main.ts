import { createApp } from "vue"
import App from "./App.vue"
import router from "./router"
import store from "./store"
import AButton from "@/global-components/AButton.vue"
import ACard from "@/global-components/ACard.vue"
import ATabs from "@/global-components/ATabs.vue"

import "@fontsource/ubuntu"

const app = createApp(App)
app.use(store).use(router).mount("#app")

app.component("AButton", AButton)
app.component("ACard", ACard)
app.component("ATabs", ATabs)
