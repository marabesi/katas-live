type Obstacle = { x: number; y: number }

export class Grid {
  private _x: number
  private _y: number
  private _obstacle?: Obstacle

  constructor(x: number, y: number, obstacle?: Obstacle) {
    this._x = x
    this._y = y
    this._obstacle = obstacle
  }

  get x(): number {
    return this._x
  }

  get y(): number {
    return this._y
  }

  get obstacle(): Obstacle {
    return this._obstacle
  }

}
