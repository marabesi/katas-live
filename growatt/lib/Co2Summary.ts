import { ApiInterface } from './types'

export class Co2Summary {
  constructor(private growatt: ApiInterface) { }

  async fetch(): Promise<Number> {
    const response = await this.growatt.getData();
    return parseFloat(response['582073'].plantData.co2);
  }
}
