require('dotenv').config()

import { ApiInterface, ApiResponse } from './types'

const api = require('growatt')

// const growatt = new api({})
// let login = await growatt.login(user,passwort).catch(e => {console.log(e)})
// console.log('login:',login)
// let getAllPlantData = await growatt.getAllPlantData(options).catch(e => {console.log(e)})
// console.log('getAllPlatData:',JSON.stringify(getAllPlantData,null,' '));
// let logout = await growatt.logout().catch(e => {console.log(e)})
// console.log('logout:',logout)

const responseGrowattApi: ApiResponse = {
  "582073": {
    "id": "582073",
    "plantData": {
      "co2": "1.2",
    },
  }
}

const user = process.env.GROWATT_USER || 'root'
const password = process.env.GROWATT_PASS || 'charmander'

export class GrowattApi implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {

    const result = await api.login(user, password)
    console.log(result)

    return responseGrowattApi;
  }
}
