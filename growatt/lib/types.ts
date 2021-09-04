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
