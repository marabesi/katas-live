import {CoalSummary} from "./CoalSummary";
import {SuccessApiStub} from "./ApiStub";

describe('fetch coal not burned information', () => {

  test('should fetch coal from growatt', async() => {
    const coal = new CoalSummary(new SuccessApiStub());
    const coalSummary = await coal.fetch();
    expect(coalSummary).toEqual(666);
  });
});