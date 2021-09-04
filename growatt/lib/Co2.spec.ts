import { ApiInterface, ApiResponse, Co2Summary } from './Co2Summary'

class ApiStub implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {
    return api;
  }
}

describe('fetch co2', () => {
  test('should return co2 information from the api', async () => {
    const co2 = new Co2Summary(new ApiStub())
    const burnedCo2 = await co2.fetch()

    expect(burnedCo2).toEqual(1246.9)
  })
})

const api: ApiResponse = {
    "582073": {
      "id": "582073",
      "plantData": {
        "co2": "1246.9",
      },
    }
  }
