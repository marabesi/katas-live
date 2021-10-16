require('dotenv').config()

import { ApiInterface, ApiResponse } from '../types'

const growatt = require('growatt')

const api = new growatt({ timeout: 20000 })

export class GrowattApi implements ApiInterface {
  private readonly growattLogin: () => any;
  constructor(user: string, password: string) {
    this.growattLogin = () => api.login(user, password)
  }

  async getData(): Promise<ApiResponse>{
    const loginResult = await this.growattLogin()

    if (loginResult.result === "-2") {
      throw new Error('Username Password Error')
    }
    const plantData = await api.getAllPlantData()
    const plantId = '582073'

    return {
      [plantId]: {
        "id": plantData[plantId].id,
        "plantData": {
          "co2": plantData[plantId].plantData.co2,
          "coal": plantData[plantId].plantData.coal,
          "eTotal": plantData[plantId].plantData.eTotal,
          "eToday": plantData[plantId].plantData.eToday,
          "tree": plantData[plantId].plantData.tree,
        },
        "devices" : {
          "YIDBA470E3" : {
            "historyLast" : {
              "pac": plantData[plantId].devices["YIDBA470E3"].historyLast.pac
            }
          }
        }
      }
    }
  }
}
