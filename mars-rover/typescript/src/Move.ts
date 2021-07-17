import MarsRover from './MarsRover';
import { Compass } from './Compass';
import {Position} from "./Position";

export class Move {
  private rover: MarsRover;

  constructor(rover: MarsRover) {
    this.rover = rover
  }

  isObstacle(roverX: number, roverY: number) : boolean {
    if (!this.rover.grid.obstacle) {
      return false
    }

    const { x, y } = this.rover.grid.obstacle
    if(this.rover.grid.obstacle && x === roverX && y === roverY) {
      return true
    }
    return false
  }

  move() {
    let currentX = this.rover.x
    let currentY = this.rover.y

    if (this.rover.facing === Compass.NORTH) {
      currentY++
    }
    if (this.rover.facing === Compass.EAST) {
      currentX++
    }
    if (this.rover.facing === Compass.SOUTH) {
      currentY--
    }
    if (this.rover.facing === Compass.WEST) {
      currentX--
    }

    const { x, y } = this.nextPosition(currentX, currentY)

    if (this.isObstacle(x, y)) {
      this.rover.hasObstacle = true
      return
    }

    this.rover.x = x
    this.rover.y = y
  }

  private nextPosition(x: number, y: number): Position {
    if (y > this.rover.grid.y - 1) {
      y = 0;
    }

    if (y < 0) {
      y = this.rover.grid.y - 1;
    }

    if (x < 0) {
      x = this.rover.grid.x - 1;
    }

    if (x > this.rover.grid.x - 1) {
      x = 0;
    }

    return { x, y }
  }
}
