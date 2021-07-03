export default class MarsRover {
  move(commands: string) {
    let facing = 'N'
    let x = 0
    let y = 0

    for (let command of commands) {
      if (command === 'M' && facing === 'N') {
        y++
      }
    }

    return  `${x}:${y}:${facing}`
  }
}