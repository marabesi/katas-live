import MarsRover from "./MarsRover";
import {Compass} from "./Compass";

export class Move {
    private rover: MarsRover;
    constructor(rover: MarsRover) {
        this.rover = rover
    }

    move() {
        if (this.rover.facing === Compass.NORTH) {
          this.rover.y++
          this.validate()
          return
        }
        if (this.rover.facing === Compass.EAST) {
          this.rover.x++
          return
        }
        if (this.rover.facing === Compass.SOUTH) {
          this.rover.y--
          this.validate()
          return
        }
        if (this.rover.facing === Compass.WEST) {
          this.rover.x--
          return
        }
    }

    private validate() {
        if (this.rover.y > this.rover.grid.y-1) {
            this.rover.y = 0;
            return;
        }

        if (this.rover.y < 0) {
        this.rover.y = this.rover.grid.y - 1;
        return;
      }
    }
}
