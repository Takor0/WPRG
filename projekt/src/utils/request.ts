const BASE_URL = "http://localhost/projekt/api/endpoint"

export default async function request(
  url: string,
  method: "GET" | "POST" = "GET",
  body: any = null,
  params: Record<string, any> = {}
): Promise<any> {
  try {
    const options: RequestInit = {
      method,
      headers: {
        "Content-Type": "application/json"
      },
      credentials: "include"
    }

    if (body) {
      options.body = JSON.stringify(body)
    }

    let urlWithParams = BASE_URL + url
    if (Object.keys(params).length > 0) {
      urlWithParams += "?" + new URLSearchParams(params).toString()
    }

    const response = await fetch(urlWithParams, options)

    // PHP DEBUGGER xd
    const r: string = await response.clone().text()
    console.log("resik:", r)

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`)
    }

    return await response.json()
  } catch (error) {
    console.error(error)
  }
}
