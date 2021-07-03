import { Grid } from './Grid'

export default class MarsRover {
  private grid: Grid

  constructor(grid: Grid) {
    this.grid = grid
  }
  move(commands: string) {
    let facing = 'N'
    let x = 0
    let y = 0

    for (let command of commands) {
      if (command === 'M' && facing === 'N') {
        y++
      }
      if(command === 'L' && facing === 'N') {
        facing = 'W'
      }
    }

    return  `${x}:${y}:${facing}`
  }
}