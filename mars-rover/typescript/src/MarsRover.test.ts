import MarsRover from './MarsRover'
import { Grid } from './Grid'

describe('Mars rover', () => {
  test.each(
    [
      [{ command: 'M', expectedPosition: '0:1:N'}]
    ]
  )('move mars rover based on %s', ({ command, expectedPosition }) => {
    const rover = new MarsRover(new Grid(10, 10))
    expect(rover.move(command)).toEqual(expectedPosition)
  })
})