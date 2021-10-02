import { Co2Summary } from './Co2Summary'
import { GrowattApi } from './GrowattApi'
import any = jasmine.any

describe('Fetch (from real api) the quantity of Co2 not burned', () => {
 test('should give the co2 not used as a kg number', async () => {
  const co2Summary = new Co2Summary(new GrowattApi());
  expect(await co2Summary.fetch()).toEqual(any(Number))
 });
});