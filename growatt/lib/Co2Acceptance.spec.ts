import { Co2Summary } from './Co2Summary'
import { CoalSummary } from './CoalSummary'
import { GrowattApi } from './GrowattApi'
import any = jasmine.any

describe('Fetch (from real api) the quantity of Co2 not burned', () => {
 test('should give the co2 not used as a kg number', async () => {
  const co2Summary = new Co2Summary(new GrowattApi());
  expect(await co2Summary.fetch()).toEqual(any(Number))
 });

 test('should give the coal not burned as a kg number', async () => {
  const coalSummary = new CoalSummary(new GrowattApi());
  expect(await coalSummary.fetch()).toEqual(any(Number))
 });
});