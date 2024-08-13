// src/utils/apiClient.ts
import axios, { AxiosResponse } from 'axios'

// Создаем экземпляр axios с базовым URL
const apiClient = axios.create({
  baseURL: 'http://localhost:8080', // Указываем базовый URL
})

interface ApiResponse<T> {
  data: T
  status: number
}

// Функция отправки запроса с использованием настроенного apiClient
export async function sendRequest<T>(
  url: string,
  method: 'GET' | 'POST' | 'PUT' | 'DELETE',
  payload?: any,
): Promise<ApiResponse<T>> {
  try {
    const response: AxiosResponse<T> = await apiClient({
      url, // Здесь мы теперь используем относительный URL, например, '/api/signup'
      method,
      data: payload,
    })

    return {
      data: response.data,
      status: response.status,
    }
  } catch (error) {
    throw new Error(`API request failed: ${error}`)
  }
}
