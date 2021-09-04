import { ApiInterface, ApiResponse } from './types'

export class SuccessApiStub implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {
    return api;
  }
}

export class ErrorApiStub implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {
    return Promise.reject('Failed to fetch');
  }
}

const api: ApiResponse = {
  "582073": {
    "id": "582073",
    "plantData": {
      "co2": "1246.9",
    },
  }
}
