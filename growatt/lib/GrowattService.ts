import {ApiInterface} from './types';

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
        return parseFloat(response[this.plantId].plantData.eTotal)
    }

    async savedTrees() {
        const response = await this.growattApi.getData();
        return parseFloat(response[this.plantId].plantData.tree)
    }
}