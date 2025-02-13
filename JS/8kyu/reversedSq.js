/**
 * 🏆 Challenge: Reversed sequence (8kyu)
 *
 * 📝 Description:
Task:
Build a function that returns an array of integers from n to 1 where n>0.

Example : n=5 --> [5,4,3,2,1]


 */

const reverseSeq = (n) => {
  let nm = [];
  let ind = 0;
  for (let i = n; i > 0; i--) {
    nm[ind] = i;
    ind++;
  }
  return nm;
};

// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("reverseSeq", function () {
  it("Sample Test", function () {
    assert.deepEqual(reverseSeq(5), [5, 4, 3, 2, 1]);
  });
});
