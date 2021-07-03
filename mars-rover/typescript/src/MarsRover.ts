import {Grid} from './Grid'
import {Compass} from './Compass';
import {Move} from "./Move";
import {MoveRight} from "./MoveRight";

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
        new Move(this).move()
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
    new MoveRight(this).move()
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
    if (this.facing === Compass.EAST) {
      this.facing = Compass.NORTH
      return
    }
    if (this.facing === Compass.SOUTH) {
      this.facing = Compass.EAST
      return
    }
  }
}
