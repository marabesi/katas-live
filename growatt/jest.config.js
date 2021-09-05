module.exports = {
  'testEnvironment': 'node',
  'roots': [
    '<rootDir>/'
  ],
  'testMatch': [
    '**/?(*.)+(spec|test).+(ts)'
  ],
  transform: {
    '^.+\\.ts?$': 'ts-jest',
  },
  testTimeout: 30000
};