import {Grid} from './Grid'
import {Compass} from './Compass';

export default class MarsRover {
  private grid: Grid

  constructor(grid: Grid) {
    this.grid = grid
  }
  move(commands: string) {
    let facing: Compass = Compass.NORTH
    let x = 0
    let y = 0

    for (let command of commands) {
      if (command === 'M') {
        if (facing === Compass.NORTH) {
          y++
          continue
        }
        if (facing === Compass.EAST) {
          x++
          continue
        }
        if (facing === Compass.SOUTH) {
          y--
          continue
        }
      }

      if (command === 'L' ) {
        if (facing === Compass.WEST) {
          facing = Compass.SOUTH
          continue
        }

        if (facing === Compass.NORTH) {
          facing = Compass.WEST
          continue
        }
      }

      if (command === 'R') {
        if (facing === Compass.EAST) {
          facing = Compass.SOUTH
          continue
        }
        if (facing === Compass.NORTH) {
          facing = Compass.EAST
          continue
        }
      }
    }

    return  `${x}:${y}:${facing}`
  }
}
