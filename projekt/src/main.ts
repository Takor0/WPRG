import { createApp } from "vue"
import App from "./App.vue"
import router from "./router"
import store from "./store"
import components from "@/global-components/index"
// TODO: add global components
console.log(components)

import "@fontsource/ubuntu"

createApp(App).use(store).use(router).mount("#app")
