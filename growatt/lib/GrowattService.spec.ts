import {error, ErrorApiStub, SuccessApiStub} from './api/ApiStub'
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

    test('should fetch coal from growatt', async() => {
        const coal = new GrowattService(new SuccessApiStub());
        const coalSummary = await coal.coalSummary();
        expect(coalSummary).toEqual(666);
    });

    test('should fetch total energy', async () => {
        const energy = new GrowattService(new SuccessApiStub());
        const energySummary = await energy.energySummary();
        expect(energySummary).toEqual(6666);
    })
})