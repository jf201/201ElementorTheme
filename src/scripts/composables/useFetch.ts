import AppConfig from '../app.config'
import { Response } from '../types/repsones.modal'

export default function useFetch<T>(ressource: string, options = {}): Promise<T> {
    return fetch(`${AppConfig.apiBaseUrl}${ressource}`, options)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText)
            }
            return response.json() as Promise<Response<T>>
        })
        .then((repsonse) => {
            if (repsonse.success === false) {
                throw new Error(repsonse.error)
            }
            return repsonse.data
        })
}
