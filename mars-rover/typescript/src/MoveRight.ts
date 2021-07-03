import MarsRover from './MarsRover';
import { Compass } from './Compass';

export class MoveRight {
  private rover: MarsRover;

  constructor(rover: MarsRover) {
    this.rover = rover
  }

  move() {
    if (this.rover.facing === Compass.EAST) {
      this.rover.facing = Compass.SOUTH
      return
    }
    if (this.rover.facing === Compass.NORTH) {
      this.rover.facing = Compass.EAST
      return
    }
    if (this.rover.facing === Compass.SOUTH) {
      this.rover.facing = Compass.WEST
      return
    }
  }
}