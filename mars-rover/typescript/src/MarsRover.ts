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
        this.moveLeft()
      }

      if (command === 'R') {
        this.moveRight()
      }
    }

    return  `${this.x}:${this.y}:${this.facing}`
  }

  moveRight() {
    if (this.facing === Compass.EAST) {
      this.facing = Compass.SOUTH
      return
    }
    if (this.facing === Compass.NORTH) {
      this.facing = Compass.EAST
      return
    }
  }

  moveLeft() {
    if (this.facing === Compass.WEST) {
      this.facing = Compass.SOUTH
      return
    }
    if (this.facing === Compass.NORTH) {
      this.facing = Compass.WEST
      return
    }
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
