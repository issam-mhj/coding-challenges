/**
 * 🏆 Challenge: Collatz Conjecture (3n+1) (8kyu)
 *
 * 📝 Description:

The Collatz conjecture (also known as 3n+1 conjecture) is a conjecture that applying the following algorithm to any number we will always eventually reach one:

[This is writen in pseudocode]
if(number is even) number = number / 2
if(number is odd) number = 3*number + 1
#Task

Your task is to make a function hotpo that takes a positive n as input and returns the number of times you need to perform this algorithm to get n = 1.

#Examples

hotpo(1) returns 0
(1 is already 1)

hotpo(5) returns 5
5 -> 16 -> 8 -> 4 -> 2 -> 1

hotpo(6) returns 8
6 -> 3 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1

hotpo(23) returns 15
23 -> 70 -> 35 -> 106 -> 53 -> 160 -> 80 -> 40 -> 20 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1
#References

Collatz conjecture wikipedia page: https://en.wikipedia.org/wiki/Collatz_conjecture
 */

var hotpo = function (n) {
  if (n == 0) return 0;
  let tot = 0;
  for (let i = 0; n > 1; i++) {
    tot++;
    if (n % 2 == 0) {
      n = n / 2;
    } else {
      n = 3 * n + 1;
    }
  }
  return tot;
};

// Test cases
const Test = require("@codewars/test-compat");

describe("Test", function () {
  it("Examples", function () {
    Test.assertEquals(hotpo(1), 0);
    Test.assertEquals(hotpo(5), 5);
    Test.assertEquals(hotpo(6), 8);
    Test.assertEquals(hotpo(23), 15);
  });
});
