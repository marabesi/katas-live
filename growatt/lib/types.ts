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

interface HistoryLast {
  pac: Number
}

interface Device {
  historyLast: HistoryLast
}

interface Devices {
  [key: string]: Device
}

interface SolarPanel {
  id: string
  plantData: PlantData
  devices: Devices
}

interface PlantData {
  co2: string
  coal: string
  eTotal: string
  tree: string
  eToday: string
}
