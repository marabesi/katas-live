import {Grid} from "./Grid";
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
      return
    }
    if (this.rover.facing === Compass.EAST) {
      this.rover.x++
      return
    }
    if (this.rover.facing === Compass.SOUTH) {
      this.rover.y--
      return
    }
    if (this.rover.facing === Compass.WEST) {
      this.rover.x--
      return
    }
    }
}