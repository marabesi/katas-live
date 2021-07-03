import MarsRover from './MarsRover'

describe('Mars rover', () => {
  test.each(
    [
      [{ command: 'M', expectedPosition: '0:1:N'}]
    ]
  )('move mars rover based on %s', ({ command, expectedPosition }) => {
    const rover = new MarsRover()
    expect(rover.move(command)).toEqual(expectedPosition)
  })
})