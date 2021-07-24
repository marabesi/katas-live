import {Grid} from './Grid'
import {Compass} from './Compass';
import {Move} from './Move';
import {MoveRight} from './MoveRight';
import {MoveLeft} from './MoveLeft';
import {Command} from "./Command";
import {Position} from "./Position";

export default class MarsRover {
  grid: Grid
  private _position: Position = new Position()
  facing: Compass = Compass.NORTH
  hasObstacle: boolean = false

  constructor(grid: Grid) {
    this.grid = grid
  }

  get position(): Position {
    return this._position;
  }

  set position(value: Position) {
    this._position = value;
  }

  execute(commands: string) {
    for (let command of commands) {
      this.validateCommand(command)
      if (command === Command.MOVE) {
        new Move(this).move()
      }
      if (command === Command.LEFT) {
        new MoveLeft(this).move()
      }
      if (command === Command.RIGHT) {
        new MoveRight(this).move()
      }
    }

    const obstacle = `${this.hasObstacle ? 'O:' : ''}`
    return `${obstacle}${this._position.x}:${this._position.y}:${this.facing}`
  }

  validateCommand(command: string) {
    const commands = [Command.MOVE, Command.LEFT, Command.RIGHT]
    for (let commandIn of commands) {
      if (commandIn === command) {
        return
      }
    }
    throw Error('invalid command')
  }
}
