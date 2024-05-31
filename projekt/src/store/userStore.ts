import { createStore } from "vuex"
import request from "@/utils/request"
import router from "@/router"

export interface loginParam {
  email: string
  password: string
}

export const userStore = createStore({
  state: {
    ACCESS_TOKEN: ""
  },
  getters: {},
  mutations: {},
  actions: {
    async login(context: any, param: loginParam): Promise<void> {
      const res = await request("/login.php", "POST", param)
      console.log(res)
      this.state.ACCESS_TOKEN = res.token
      //TODO: token expire
      await router.push("/")
    }
  },
  modules: {}
})
