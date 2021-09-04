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

const ResponseGrowattApi: ApiResponse = {
  "582073": {
    "id": "582073",
    "plantData": {
      "co2": "1246.9",
    },
  }
}

export class GrowattApi implements ApiInterface {
  async co2Information(): Promise<ApiResponse> {
    const user = process.env.USER || 'root'
    const password = process.env.PASS || 'charmander'

    const login = await api.login(user, password)

    return Promise.resolve(ResponseGrowattApi);
  }
}
