export default function request(url: string) {
  return fetch(url)
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`)
      }
      return response.json()
    })
    .then((data) => {
      console.log(data)
    })
    .catch((error) => {
      console.error(error)
    })
}
