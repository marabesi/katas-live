export interface ApiInterface {
   co2Information: any
}

export interface ApiResponse {

}

export class Co2Summary {
  constructor(private growatt: ApiInterface) {
  }

  fetch() {
    return parseFloat(this.growatt.co2Information()['582073'].plantData.co2);
  }
}
