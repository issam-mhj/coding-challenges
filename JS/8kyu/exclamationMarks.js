/**
 * 🏆 Challenge: Exclamation marks series #11: Replace all vowel to exclamation mark in the sentence (8kyu)
 *
 * 📝 Description:
Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.

Examples
"Hi!" --> "H!!"
"!Hi! Hi!" --> "!H!! H!!"
"aeiou" --> "!!!!!"
"ABCDE" --> "!BCD!"


 */

function replace(s) {
  let str = "";
  for (let i = 0; i < s.length; i++) {
    if (
      s[i] == "a" ||
      s[i] == "A" ||
      s[i] == "e" ||
      s[i] == "E" ||
      s[i] == "i" ||
      s[i] == "I" ||
      s[i] == "o" ||
      s[i] == "O" ||
      s[i] == "u" ||
      s[i] == "U"
    ) {
      str += "!";
    } else {
      str += s[i];
    }
  }
  return str;
}
// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("Basic Tests", function () {
  it("It should work for sample tests", function () {
    doTest("Hi!", "H!!");
    doTest("!Hi! Hi!", "!H!! H!!");
    doTest("aeiou", "!!!!!");
    doTest("ABCDE", "!BCD!");
  });

  const { assert } = require("chai");

  function doTest(input, expected) {
    const message = `for s = ${JSON.stringify(input)}\n`;
    const actual = replace(input);
    assert.strictEqual(actual, expected, message);
  }
});
