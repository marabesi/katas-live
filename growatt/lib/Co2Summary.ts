export interface ApiInterface {
   co2Information: () => Promise<ApiResponse>
}

export interface ApiResponse {
  [key: string]: SolarPanel
}

interface SolarPanel {
  id: string
  plantData: PlantData
}

interface PlantData {
  co2: string
}

export class Co2Summary {
  constructor(private growatt: ApiInterface) { }

  async fetch(): Promise<Number> {
    const response = await this.growatt.co2Information();
    return parseFloat(response['582073'].plantData.co2);
  }
}
