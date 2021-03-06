import { ApiInterface, ApiResponse, ErrorApiResponse } from '../types'

export class SuccessApiStub implements ApiInterface {
  async getData() : Promise<ApiResponse> {
    return api;
  }
}

export class ErrorApiStub implements ApiInterface {
  async getData(): Promise<ApiResponse> {
    return Promise.reject(error);
  }
}

export class ErrorCredentialsStub implements ApiInterface {
  getData(): Promise<ApiResponse> {
    throw new Error(error.result)
  }

}

const api: ApiResponse = {
  "582073": {
    "id": "582073",
    "plantData": {
      "co2": "1246.9",
      "coal": "666",
      "eTotal": "6668",
      "tree": "10",
      "eToday": "12",
    },
    "devices": {
      "YIDBA470E3" : {
        "historyLast": {
          "pac": 50
        }
      }
    }
  }
}

export const error: ErrorApiResponse = {
 result: "-2", msg: '用户名或密码错误'
}