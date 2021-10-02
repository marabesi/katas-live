import {error, ErrorApiStub, SuccessApiStub} from './ApiStub'
import {GrowattService} from "./GrowattService";

describe('fetch co2', () => {
  test('should return co2 information from the api', async () => {
    const co2 = new GrowattService(new SuccessApiStub())
    const burnedCo2 = await co2.co2Summary()

    expect(burnedCo2).toEqual(1246.9)
  })

  test('should display error if request fails', async () => {
    const co2 = new GrowattService(new ErrorApiStub())
    await expect(co2.co2Summary()).rejects.toEqual(error)
  })
})
