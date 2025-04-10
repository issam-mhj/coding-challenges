/**
 * 🏆 Challenge: Convert number to reversed array of digits (8kyu)
 *
 * 📝 Description:
Given a random non-negative number, you have to return the digits of this number within an array in reverse order.

Example (Input => Output):
35231 => [1,3,2,5,3]
0     => [0]

 */

function digitize(n) {
  let numbers = [];
  let count = 0;
  if (n == 0) {
    return [0];
  }
  for (let i = 0; n > 0; i++) {
    if (parseInt(n) == 0) {
      break;
    }
    numbers[count] = parseInt(n % 10);
    n = n / 10;
    count++;
  }
  return numbers
}
// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("Basic tests", () => {
  it("Testing for fixed tests", () => {
    assert.deepEqual(digitize(35231), [1, 3, 2, 5, 3]);
    assert.deepEqual(digitize(0), [0]);
  });
});
