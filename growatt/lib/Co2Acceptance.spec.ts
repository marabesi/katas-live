import { Co2Summary } from './Co2Summary'

describe('Fetch quantity of Co2 not burned', function () {
 test.skip('should give the co2 not used as a kg number', () => {
  const co2Summary = new Co2Summary();
  expect(co2Summary.fetch()).toEqual(1.2)
 });
});