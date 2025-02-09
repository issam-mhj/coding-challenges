/**
 * 🏆 Challenge: Do I get a bonus? (8kyu)
 *
 * 📝 Description:
It's bonus time in the big city! The fatcats are rubbing their paws in anticipation... but who is going to make the most money?

Build a function that takes in two arguments (salary, bonus). Salary will be an integer, and bonus a boolean.

If bonus is true, the salary should be multiplied by 10. If bonus is false, the fatcat did not make enough money and must receive only his stated salary.

Return the total figure the individual will receive as a string prefixed with "£" (= "\u00A3", JS, Go, Java, Scala, and Julia), "$" (C#, C++, Dart, Ruby, Clojure, Elixir, PHP, Python, Haskell, and Lua) or "¥" (Rust).



 */

function bonusTime(salary, bonus) {
  let sal = "£";
  return bonus ? (sal += salary * 10) : (sal += salary);
}
// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("Basic tests", () => {
  it("Testing for fixed tests", () => {
    assert.strictEqual(bonusTime(10000, true), "£100000");
    assert.strictEqual(bonusTime(25000, true), "£250000");
    assert.strictEqual(bonusTime(10000, false), "£10000");
    assert.strictEqual(bonusTime(60000, false), "£60000");
    assert.strictEqual(bonusTime(2, true), "£20");
    assert.strictEqual(bonusTime(78, false), "£78");
    assert.strictEqual(bonusTime(67890, true), "£678900");
  });
});
