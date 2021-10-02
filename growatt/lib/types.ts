export interface ApiInterface {
  getData: () => Promise<ApiResponse>
}

export interface ApiResponse {
  [key: string]: SolarPanel
}

export interface ErrorApiResponse {
  result: string
  msg: string
}

interface SolarPanel {
  id: string
  plantData: PlantData
}

interface PlantData {
  co2: string
  coal: string
  eTotal: string
}
