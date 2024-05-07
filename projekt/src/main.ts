import { createApp } from "vue"
import App from "./App.vue"
import router from "./router"
import store from "./store"
import components from "@/global-components/index"
// TODO: add global components
console.log(components)

import "@fontsource/ubuntu"

const app = createApp(App)
app.use(store).use(router).mount("#app")
Object.entries(components).forEach(([name, component]) => {
  app.component(name, component)
})
