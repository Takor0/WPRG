import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router"
import TheContainer from "@/views/TheContainer.vue"
import LoginView from "@/views/LoginView.vue"
import AComponents from "@/views/AComponents.vue"
import { h, resolveComponent } from "vue"

const routes: Array<RouteRecordRaw> = [
  {
    path: "",
    name: "home",
    component: TheContainer,
    children: [
      {
        path: "/login",
        name: "login",
        component: LoginView
      },
      {
        path: "/components",
        name: "components",
        component: AComponents
      }
    ]
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
