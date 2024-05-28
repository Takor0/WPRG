import request from "@/utils/request"
export const Helpers = {
  methods: {
    $request(url: string) {
      return request(url)
    }
  }
}
