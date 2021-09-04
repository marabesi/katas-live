import { ApiInterface, ApiResponse, ErrorApiResponse } from './types'

export class SuccessApiStub implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {
    return api;
  }
}

export class ErrorApiStub implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {
    return Promise.reject(error);
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

export const error: ErrorApiResponse = {
 result: "-2", msg: '用户名或密码错误'
}