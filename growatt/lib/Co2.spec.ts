import { Co2Summary } from './Co2Summary'
import { ApiStub } from './ApiStub'

describe('fetch co2', () => {
  test('should return co2 information from the api', async () => {
    const co2 = new Co2Summary(new ApiStub())
    const burnedCo2 = await co2.fetch()

    expect(burnedCo2).toEqual(1246.9)
  })
})
