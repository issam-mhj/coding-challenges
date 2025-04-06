/**
 * 🏆 Challenge: Convert a string to an array (8kyu)
 *
 * 📝 Description:
Write a function to split a string and convert it into an array of words.

Examples (Input ==> Output):
"Robin Singh" ==> ["Robin", "Singh"]

"I love arrays they are my favorite" ==> ["I", "love", "arrays", "they", "are", "my", "favorite"]

 */

function stringToArray(string) {
  let arr = [];
  let str = "";
  let count = 0;
  for (let i = 0; i < string.length; i++) {
    if (string[i] != " ") {
      str += string[i];
    }
    if (string[i] == " " || i == string.length - 1) {
      arr[count++] = str;
      str = "";
    }
  }
  return arr;
}

// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("Basic tests", () => {
  it("Testing for fixed tests", () => {
    assert.deepEqual(stringToArray("Robin Singh"), ["Robin", "Singh"]);
    assert.deepEqual(stringToArray("I love arrays they are my favorite"), [
      "I",
      "love",
      "arrays",
      "they",
      "are",
      "my",
      "favorite",
    ]);
  });
});
