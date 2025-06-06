/**
 * 🏆 Challenge: Grasshopper - Terminal game move function (8kyu)
 *
 * 📝 Description:
In this game, the hero moves from left to right. The player rolls the dice and moves the number of spaces indicated by the dice two times.

Create a function for the terminal game that takes the current position of the hero and the roll (1-6) and return the new position.

Example:
move(3, 6) should equal 15

 */

function move(position, roll) {
  return roll * 2 + position;
}

// Test cases
const Test = require("@codewars/test-compat");

describe("move function", () => {
  it("basic tests", () => {
    Test.assertEquals(move(0, 4), 8);
    Test.assertEquals(move(3, 6), 15);
    Test.assertEquals(move(2, 5), 12);
  });
});
