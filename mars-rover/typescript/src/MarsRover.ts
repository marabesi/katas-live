import {Grid} from './Grid'
import {Compass} from "./Compass";

export default class MarsRover {
  private grid: Grid

  constructor(grid: Grid) {
    this.grid = grid
  }
  move(commands: string) {
    let facing = Compass.NORTH
    let x = 0
    let y = 0

    for (let command of commands) {
      if (command === 'M' && facing === Compass.NORTH) {
        y++
      }
      if(command === 'L' && facing === Compass.NORTH) {
        facing = Compass.WEST
      }
      if(command === 'R' && facing === Compass.NORTH) {
        facing = <Compass>"E"
      }
    }

    return  `${x}:${y}:${facing}`
  }
}
