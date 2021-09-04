require('dotenv').config()
const api = require('growatt')

const user = process.env.GROWATT_USER || 'root'
const password = process.env.GROWATT_PASS || 'charmander'

async function run() {
  return api.login(user, password)
}

run()
  .then(data => console.log(data))
  .catch(error => console.error(error))
