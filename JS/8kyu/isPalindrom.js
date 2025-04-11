/**
 * 🏆 Challenge: Is it a palindrome? (8kyu)
 *
 * 📝 Description:
Write a function that checks if a given string (case insensitive) is a palindrome.

A palindrome is a word, number, phrase, or other sequence of symbols that reads the same backwards as forwards, such as madam or racecar.
 */

function isPalindrome(x) {
  let str = "";
  for (let i = x.length - 1; i >= 0; i--) {
    str += x[i];
  }
  return str.toUpperCase() == x.toUpperCase();
}

// Test cases
const { assert } = require("chai");

describe("Fixed tests", function () {
  it("Testing for 'a'", () => assert.strictEqual(isPalindrome("a"), true));
  it("Testing for 'aba'", () => assert.strictEqual(isPalindrome("aba"), true));
  it("Testing for 'Abba'", () =>
    assert.strictEqual(isPalindrome("Abba"), true));
  it("Testing for 'hello'", () =>
    assert.strictEqual(isPalindrome("hello"), false));
  it("Testing for 'Bob'", () => assert.strictEqual(isPalindrome("Bob"), true));
  it("Testing for 'Madam'", () =>
    assert.strictEqual(isPalindrome("Madam"), true));
  it("Testing for 'AbBa'", () =>
    assert.strictEqual(isPalindrome("AbBa"), true));
  it("Testing for ''", () => assert.strictEqual(isPalindrome(""), true));
});
