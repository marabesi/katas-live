import {GrowattApi} from './GrowattApi'
import {GrowattService} from "./GrowattService";
import any = jasmine.any;

describe('Fetch (from real api) the quantity of Co2 not burned', () => {
 test('should give the co2 not used as a kg number', async () => {
  const co2Summary = new GrowattService(new GrowattApi());
  expect(await co2Summary.co2Summary()).toEqual(any(Number))
 });

 test('should give the coal not burned as a kg number', async () => {
  const coalSummary = new GrowattService(new GrowattApi());
  expect(await coalSummary.coalSummary()).toEqual(any(Number))
 });
});