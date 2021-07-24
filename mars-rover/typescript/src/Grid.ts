import {Position} from "./Position";

type Obstacle = { x: number; y: number }

export class Grid {
  private position: Position = new Position()
  private _obstacle?: Obstacle

  constructor(x: number, y: number, obstacle?: Obstacle) {
    this.position.y = y
    this.position.x = x
    this._obstacle = obstacle
  }

  get x(): number {
    return this.position.x
  }

  get y(): number {
    return this.position.y
  }

  get obstacle(): Obstacle {
    return this._obstacle
  }

}
