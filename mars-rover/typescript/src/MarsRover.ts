import {Grid} from './Grid'
import {Compass} from './Compass';

export default class MarsRover {
  private grid: Grid
  x: number = 0
  y: number  = 0
  facing: Compass = Compass.NORTH

  constructor(grid: Grid) {
    this.grid = grid
  }
  execute(commands: string) {
    for (let command of commands) {
      if (command === 'M') {
        this.move()
      }

      if (command === 'L' ) {
        if (this.facing === Compass.WEST) {
          this.facing = Compass.SOUTH
          continue
        }

        if (this.facing === Compass.NORTH) {
          this.facing = Compass.WEST
          continue
        }
      }

      if (command === 'R') {
        if (this.facing === Compass.EAST) {
          this.facing = Compass.SOUTH
          continue
        }
        if (this.facing === Compass.NORTH) {
          this.facing = Compass.EAST
          continue
        }
      }
    }

    return  `${this.x}:${this.y}:${this.facing}`
  }

  move() {
    if (this.facing === Compass.NORTH) {
      this.y++
      return
    }
    if (this.facing === Compass.EAST) {
      this.x++
      return
    }
    if (this.facing === Compass.SOUTH) {
      this.y--
      return
    }
  }
}
