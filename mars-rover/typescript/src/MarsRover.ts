import { Grid } from './Grid'
import { Compass } from './Compass';
import { Move } from './Move';
import { MoveRight } from './MoveRight';
import { MoveLeft } from './MoveLeft';

export default class MarsRover {
  grid: Grid
  x: number = 0
  y: number = 0
  facing: Compass = Compass.NORTH
  hasObstacle: boolean = false

  constructor(grid: Grid) {
    this.grid = grid
  }

  execute(commands: string) {
    for (let command of commands) {
      if (command === 'M') {
        new Move(this).move()
      }
      if (command === 'L') {
        new MoveLeft(this).move()
      }
      if (command === 'R') {
        new MoveRight(this).move()
      }
    }

    const obstacle = `${this.hasObstacle ? 'O:' : ''}`
    return `${obstacle}${this.x}:${this.y}:${this.facing}`
  }
}
