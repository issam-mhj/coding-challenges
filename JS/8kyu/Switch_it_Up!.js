/**
 * 🏆 Challenge: Switch it Up! (8kyu)
 *
 * 📝 Description:
 * Given a number between 0-9, return it in words.
 * Example:
 *    switchItUp(1)  ➝ "One"
 *    switchItUp(5)  ➝ "Five"
 */

function switchItUp(number) {
  switch (number) {
    case 0:
      return "Zero";
    case 1:
      return "One";
    case 2:
      return "Two";
    case 3:
      return "Three";
    case 4:
      return "Four";
    case 5:
      return "Five";
    case 6:
      return "Six";
    case 7:
      return "Seven";
    case 8:
      return "Eight";
    case 9:
      return "Nine";
    default:
      return "Invalid Number";
  }
}

// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("Basic Tests", () => {
  it("Testing for fixed tests", () => {
    assert.strictEqual(switchItUp(1), "One");
    assert.strictEqual(switchItUp(3), "Three");
    assert.strictEqual(switchItUp(5), "Five");
  });
});
