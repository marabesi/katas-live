import MarsRover from './MarsRover'
import { Grid } from './Grid'

describe('Mars rover', () => {
  test.each(
    [
      [{ command: 'M', expectedPosition: '0:1:N'}],
      [{ command: 'L', expectedPosition: '0:0:W'}],
      [{ command: 'R', expectedPosition: '0:0:E'}],
      [{ command: 'LL', expectedPosition: '0:0:S'}],
      [{ command: 'RR', expectedPosition: '0:0:S'}],
      [{ command: 'ML', expectedPosition: '0:1:W'}],
      [{ command: 'RM', expectedPosition: '1:0:E'}],
    ]
  )('move mars rover based on %s', ({ command, expectedPosition }) => {
    const rover = new MarsRover(new Grid(10, 10))
    expect(rover.move(command)).toEqual(expectedPosition)
  })
})
