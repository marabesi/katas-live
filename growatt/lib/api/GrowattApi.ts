require('dotenv').config()

import { ApiInterface, ApiResponse } from '../types'

const growatt = require('growatt')

// const growatt = new api({})
// let login = await growatt.login(user,passwort).catch(e => {console.log(e)})
// console.log('login:',login)
// let getAllPlantData = await growatt.getAllPlantData(options).catch(e => {console.log(e)})
// console.log('getAllPlatData:',JSON.stringify(getAllPlantData,null,' '));
// let logout = await growatt.logout().catch(e => {console.log(e)})
// console.log('logout:',logout)

const user = process.env.GROWATT_USER || 'root'
const password = process.env.GROWATT_PASS || 'charmander'

const api = new growatt({ timeout: 20000 })

const login = () => api.login(user, password)

export class GrowattApi implements ApiInterface {
  async getData(): Promise<ApiResponse>{
    await login()
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
