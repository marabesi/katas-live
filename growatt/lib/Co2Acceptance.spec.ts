import { Co2Summary } from './Co2Summary'
import { GrowattApi } from './GrowattApi'

describe('Fetch quantity of Co2 not burned', function () {
 test('should give the co2 not used as a kg number', async () => {
  const co2Summary = new Co2Summary(new GrowattApi());
  expect(await co2Summary.fetch()).toEqual(1248)
 });
});