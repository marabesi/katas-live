import MarsRover from './MarsRover';
import { Compass } from './Compass';

export class Move {
  private rover: MarsRover;

  constructor(rover: MarsRover) {
    this.rover = rover
  }

  move() {
    if (this.rover.facing === Compass.NORTH) {
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
