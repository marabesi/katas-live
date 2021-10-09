import { ApiInterface, ApiResponse } from './types';

export class GrowattService {
    constructor(private growattApi: ApiInterface) { }

    private readonly plantId = '582073'

    async coalSummary() {
        const response = await this.growattApi.getData();
        return this.getValueFor('coal', response);
    }

    async co2Summary(): Promise<Number> {
        const response = await this.growattApi.getData();
        return this.getValueFor('co2', response);
    }

    async energySummary(): Promise<Number> {
        const response = await this.growattApi.getData();
        return this.getValueFor('eTotal', response);
    }

    async savedTrees() {
        const response: ApiResponse = await this.growattApi.getData();
        return this.getValueFor('tree', response);
    }

    async generatedEnergyToday(): Promise<number> {
        const response: ApiResponse = await this.growattApi.getData();
        return this.getValueFor('eToday', response);
    }

    private getValueFor(key: string, response: ApiResponse): number {
        return parseFloat(response[this.plantId].plantData[key]);
    }

    async generatedPower() {
        return null;
    }
}