import MarsRover from './MarsRover'

describe('Mars rover', () => {
  test('assert true', () => {
    const rover = new MarsRover()
    expect(rover.move('M')).toBeTruthy()
  })
})