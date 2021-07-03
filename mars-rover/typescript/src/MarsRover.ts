export class Grid {
  private x: number
  private y: number

  constructor(x: number, y: number) {
    this.x = x
    this.y = y
  }
}

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
    }

    return  `${x}:${y}:${facing}`
  }
}