/**
 * 🏆 Challenge: Sort and Star (8kyu)
 *
 * 📝 Description:
Task:
You will be given a list of strings. You must sort it alphabetically (case-sensitive, and based on the ASCII values of the chars) and then return the first value.

The returned value must be a string, and have "***" between each of its letters.

You should not remove or add elements from/to the array.
 */

function twoSort(s) {
  let str = s[0];
  let string = "";
  for (let i = 0; i < s.length; i++) {
    if (s[i][0] < str[0]) {
      str = s[i];
    } else if (s[i][0] == str[0]) {
      if (s[i][1] < str[1]) {
        str = s[i];
      }
    }
  }
  for (let i = 0; i < str.length; i++) {
    if (i != str.length - 1) string += str[i] + "***";
    else string += str[i];
  }
  return string;
}

// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("Basic tests", () => {
  it("Testing for fixed tests", () => {
    assert.strictEqual(
      twoSort([
        "bitcoin",
        "take",
        "over",
        "the",
        "world",
        "maybe",
        "who",
        "knows",
        "perhaps",
      ]),
      "b***i***t***c***o***i***n"
    );
    assert.strictEqual(
      twoSort([
        "turns",
        "out",
        "random",
        "test",
        "cases",
        "are",
        "easier",
        "than",
        "writing",
        "out",
        "basic",
        "ones",
      ]),
      "a***r***e"
    );
  });
});
