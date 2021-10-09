import { ApiInterface, ApiResponse } from './types';

export class GrowattService {
    constructor(private growattApi: ApiInterface) { }

    private readonly plantId = '582073'

    async coalSummary() {
        const response = await this.growattApi.getData();
        return parseFloat(response[this.plantId].plantData.coal);
    }

    async co2Summary(): Promise<Number> {
        const response = await this.growattApi.getData();
        return parseFloat(response[this.plantId].plantData.co2);
    }

    async energySummary(): Promise<Number> {
        const response = await this.growattApi.getData();
        return this.getValueFor('eTotal', response);
    }

    async savedTrees() {
        const response: ApiResponse = await this.growattApi.getData();
        return this.getValueFor('tree', response);
    }

    private getValueFor(key: string, response: ApiResponse): number {
        return parseFloat(response[this.plantId].plantData[key]);
    }
}