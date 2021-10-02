import {ApiInterface} from "./types";

export class GrowattService {
    constructor(private growattApi: ApiInterface) { }

    async coalSummary() {
        const response = await this.growattApi.getData();
        return parseFloat(response['582073'].plantData.coal);
    }

    async co2Summary(): Promise<Number> {
        const response = await this.growattApi.getData();
        return parseFloat(response['582073'].plantData.co2);
    }
}