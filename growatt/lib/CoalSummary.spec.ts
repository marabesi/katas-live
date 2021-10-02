import {SuccessApiStub} from "./ApiStub";
import {GrowattService} from "./GrowattService";

describe('fetch coal not burned information', () => {

  test('should fetch coal from growatt', async() => {
    const coal = new GrowattService(new SuccessApiStub());
    const coalSummary = await coal.coalSummary();
    expect(coalSummary).toEqual(666);
  });
});