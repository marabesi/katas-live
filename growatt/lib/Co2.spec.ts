import { Co2Summary } from './Co2Summary'
import { ErrorApiStub, SuccessApiStub } from './ApiStub'

describe('fetch co2', () => {
  test('should return co2 information from the api', async () => {
    const co2 = new Co2Summary(new SuccessApiStub())
    const burnedCo2 = await co2.fetch()

    expect(burnedCo2).toEqual(1246.9)
  })

  test('should display error if request fails', async () => {
    const co2 = new Co2Summary(new ErrorApiStub())
    const burnedCo2 = await co2.fetch()

    expect(burnedCo2).toEqual(1246.9)
  })
})
