import MarsRover from './MarsRover'
import { Grid } from './Grid'

describe('Mars rover', () => {
  test.each(
    [
      [{command: 'M', expectedPosition: '0:1:N'}],
      [{command: 'L', expectedPosition: '0:0:W'}],
      [{command: 'R', expectedPosition: '0:0:E'}],
      [{command: 'LL', expectedPosition: '0:0:S'}],
      [{command: 'RR', expectedPosition: '0:0:S'}],
      [{command: 'ML', expectedPosition: '0:1:W'}],
      [{command: 'RM', expectedPosition: '1:0:E'}],
      [{command: 'MRM', expectedPosition: '1:1:E'}],
      [{command: 'MRRM', expectedPosition: '0:0:S'}],
      [{command: 'RMRRM', expectedPosition: '0:0:W'}],
      [{command: 'RL', expectedPosition: '0:0:N'}],
      [{command: 'RRL', expectedPosition: '0:0:E'}],
      [{command: 'RRM', expectedPosition: '0:9:S'}],
      [{command: 'RMLL', expectedPosition: '1:0:W'}],
      [{command: 'RRRR', expectedPosition: '0:0:N'}],
      [{command: 'LM', expectedPosition: '9:0:W'}],
      // acceptance, katalyst
      [{command: 'MMRMMLM', expectedPosition: '2:3:N'}],
      [{command: 'MMMMMMMMMM', expectedPosition: '0:0:N'}],
    ]
  )('move mars rover based on %s', ({command, expectedPosition}) => {
    const rover = new MarsRover(new Grid(10, 10))
    expect(rover.execute(command)).toEqual(expectedPosition)
  })
  test.each(
    [
      [{command: 'MMMMMMMMMM', expectedPosition: '0:10:N'}],
      [{command: 'MMMMMMMMMMMMMMMMMMMM', expectedPosition: '0:0:N'}],
    ]
  )('move mars rover based on %s', ({command, expectedPosition}) => {
    const rover = new MarsRover(new Grid(20, 20))
    expect(rover.execute(command)).toEqual(expectedPosition)
  })
})
