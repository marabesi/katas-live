import { ApiInterface, ApiResponse } from './types'

export class ApiStub implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {
    return api;
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
