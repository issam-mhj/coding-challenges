/**
 * 🏆 Challenge: Reversed Words (8kyu)
 *
 * 📝 Description:
Complete the solution so that it reverses all of the words within the string passed in.

Words are separated by exactly one space and there are no leading or trailing spaces.

Example(Input --> Output):

"The greatest victory is that which requires no battle" --> "battle no requires which that is victory greatest The"
*/

function reverseWords(str) {
  let revStr = "";
  let temp = "";
  for (let i = str.length - 1; i >= 0; i--) {
    if (str[i] == " ") {
      for (let i = temp.length - 1; i >= 0; i--) {
        revStr += temp[i];
      }
      revStr += " ";
      temp = "";
    } else {
      temp += str[i];
    }
  }
  for (let i = temp.length - 1; i >= 0; i--) {
    revStr += temp[i];
  }
  return revStr;
}

// Test cases
const { assert } = require("chai");

describe("reverseWords", function () {
  it("should work for some examples", function () {
    assert.strictEqual(reverseWords("hello world!"), "world! hello");
    assert.strictEqual(
      reverseWords("yoda doesn't speak like this"),
      "this like speak doesn't yoda"
    );
    assert.strictEqual(reverseWords("foobar"), "foobar");
    assert.strictEqual(reverseWords("kata editor"), "editor kata");
    assert.strictEqual(
      reverseWords("row row row your boat"),
      "boat your row row row"
    );
    assert.strictEqual(reverseWords(""), "");
  });
});
