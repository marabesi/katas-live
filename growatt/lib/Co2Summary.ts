export interface ApiInterface {
   co2Information: () => Promise<ApiResponse>
}

export interface ApiResponse {

}

export class Co2Summary {
  constructor(private growatt: ApiInterface) {
  }

  async fetch() {
    const response = await this.growatt.co2Information();
    return parseFloat(response['582073'].plantData.co2);
  }
}
