import {error, ErrorApiStub, ErrorCredentialsStub, SuccessApiStub} from './api/ApiStub'
import {GrowattService} from "./GrowattService";

describe('fetch Growatt apiData', () => {
    let growattServiceSuccess: GrowattService
    let growattServiceError: GrowattService
    let growattServiceCredentialsError: GrowattService

    beforeEach(() => {
        growattServiceSuccess = new GrowattService(new SuccessApiStub())
        growattServiceError = new GrowattService(new ErrorApiStub())
        growattServiceCredentialsError = new GrowattService(new ErrorCredentialsStub())
    })

    test('should return co2 information from the api', async () => {
        const burnedCo2 = await growattServiceSuccess.co2Summary()
        expect(burnedCo2).toEqual(1246.9)
    })

    test('should display error if request fails', async () => {
        await expect(growattServiceError.co2Summary()).rejects.toEqual(error)
    })

    test('Username Password Error', async () => {
        expect(await growattServiceCredentialsError.co2Summary()).toThrow('Username Password Error')
    })

    test('should fetch coal from growatt', async() => {
        const coalSummary = await growattServiceSuccess.coalSummary();
        expect(coalSummary).toEqual(666);
    })

    test('should fetch total energy', async () => {
        const energySummary = await growattServiceSuccess.energySummary();
        expect(energySummary).toEqual(6668);
    })

    test('should fetch total of saved trees', async () => {
        const energySummary = await growattServiceSuccess.savedTrees();
        expect(energySummary).toEqual(10);
    })

    test('should fetch amount generated energy today', async () => {
        const generatedEnergy = await growattServiceSuccess.generatedEnergyToday();
        expect(generatedEnergy).toEqual(12);
    })

    test('should fetch amount generated power', async () => {
        const generatedEnergy = await growattServiceSuccess.generatedPower();
        expect(generatedEnergy).toEqual(50);
    })
})