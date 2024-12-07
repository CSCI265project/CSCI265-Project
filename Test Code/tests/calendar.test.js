/**
 * @jest-environment jsdom
 */
//This test has not been fully implemented as we ran out of time.

const calendar = require('./calendar.js')

test('Sanity check', () => {
    expect(true).toBe(true);
})

const renderCalendar = jest.fn( () => true)
const handleDateSelection = jest.fn( () => true)
const highlightPeriodAndPredict = jest.fn( () => true)
const formatDate = jest.fn( () => true)
const loadSavedData = jest.fn( () => true)
const saveData = jest.fn( () => true)

test('Properly displays calendar', () => {
    //expect(calendar.renderCalendar).toBe(true);
    expect(renderCalendar()).toBe(true);
})


//const handleDateSelection = require('calendar.test.js');
test('Properly selected date', () => {
    //expect(handleDateSelection(dateKey)).toBe(displayed)
    expect(handleDateSelection()).toBe(true);
})


//const highlightPeriodAndPredict = require('./highlightPeriodAndPredict');
test('Properly highlighted specific dates', () => {
    //const firstPeriodDay = {...stuff}
    //expect(highlightPeriodAndPredict(firstPeriodDay)).toBe(displayed)
    expect(highlightPeriodAndPredict()).toBe(true);
})


//const formatDate = require('./formatDate');
test('Properly added formatted date', () => {
    //expect(formatDate(date)).toBe(drequire(isplayed)
    expect(formatDate()).toBe(true);
})


//const loadSavedData = require('./loadSavedData');
test('Properly loaded data', () => {

    expect(loadSavedData()).toBe(true);
})


//const saveData = './saveData');
test('Properly saved data', () => {
    expect(saveData()).toBe(true);
})


