import { GrowattApi } from './GrowattApi'

export class CoalSummary {
  constructor(private growattApi: GrowattApi) { }

  async fetch() {
    const response = await this.growattApi.coalInformation();
    return parseFloat(response['582073'].plantData.coal);
  }
}