import {GrowattApi} from './api/GrowattApi'
import {GrowattService} from "./GrowattService";
import any = jasmine.any;

describe('Fetch (from real api) the quantity of Co2 not burned', () => {
 const user = process.env.GROWATT_USER || 'root'
 const password = process.env.GROWATT_PASS || 'charmander'

 const growattService = new GrowattService(new GrowattApi(user, password));

 test('invalid user and password', async () => {
  let growattServiceFail = new GrowattService(new GrowattApi('fail', 'fail'));
  expect(await growattServiceFail.co2Summary()).toThrow('Username Password Error')
 });

 test('should give the co2 not used as a kg number', async () => {
  expect(await growattService.co2Summary()).toEqual(any(Number))
 });

 test('should give the coal not burned as a kg number', async () => {
  expect(await growattService.coalSummary()).toEqual(any(Number))
 });

 test('should give the total amount of energy generated', async () => {
  expect(await growattService.energySummary()).toEqual(any(Number))
 });

 test('should give the total of saved trees', async () => {
  expect(await growattService.savedTrees()).toEqual(any(Number))
 });

 test('should give the amount of generated energy for today', async () => {
  expect(await growattService.generatedEnergyToday()).toEqual(any(Number))
 });

 test('should give the amount of generated power', async () => {
  expect(await growattService.generatedPower()).toEqual(any(Number))
 });
});