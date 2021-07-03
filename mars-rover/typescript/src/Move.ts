import MarsRover from './MarsRover';
import { Compass } from './Compass';

export class Move {
  private rover: MarsRover;

  constructor(rover: MarsRover) {
    this.rover = rover
  }

  isObstacle(roverX: number, roverY: number) {
    if (!this.rover.grid.obstacle) {
      return false
    }

    const { x, y } = this.rover.grid.obstacle
    return this.rover.grid.obstacle && x === roverX && y === roverY
  }

  move() {
    if (this.rover.facing === Compass.NORTH) {
      const nextY = this.rover.y + 1

      if (this.isObstacle(this.rover.x, nextY)) {
        this.rover.hasObstacle = true
        return
      }

      this.rover.y++
    }
    if (this.rover.facing === Compass.EAST) {
      this.rover.x++
    }
    if (this.rover.facing === Compass.SOUTH) {
      this.rover.y--
    }
    if (this.rover.facing === Compass.WEST) {
      this.rover.x--
    }

    this.validate()
  }

  private validate() {
    if (this.rover.y > this.rover.grid.y - 1) {
      this.rover.y = 0;
      return;
    }

    if (this.rover.y < 0) {
      this.rover.y = this.rover.grid.y - 1;
      return;
    }

    if (this.rover.x < 0) {
      this.rover.x = this.rover.grid.x - 1;
      return;
    }

    if (this.rover.x > this.rover.grid.x - 1) {
      this.rover.x = 0;
      return;
    }
  }
}
