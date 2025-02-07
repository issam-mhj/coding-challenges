/**
 * 🏆 Challenge: Sum of differences in array(8kyu)
 *
 * 📝 Description:
Your task is to sum the differences between consecutive pairs in the array in descending order.

Example
[2, 1, 10]  -->  9
In descending order: [10, 2, 1]

Sum: (10 - 2) + (2 - 1) = 8 + 1 = 9

If the array is empty or the array has only one element the result should be 0
 */

function sumOfDifferences(arr) {
  let result = 0;
  if (arr.length <= 1) return 0;
  for (let i = 0; i < arr.length - 1; i++) {
    for (let y = i; y < arr.length; y++) {
      if (arr[y] > arr[i]) {
        let temp = arr[i];
        arr[i] = arr[y];
        arr[y] = temp;
      }
    }
  }
  for (let i = 0; i < arr.length - 1; i++) {
    result += arr[i] - arr[i + 1];
  }
  return result;
}

// Test cases
const { assert } = require("chai");

describe("Sample tests", () => {
  it("sumOfDifferences([1, 2, 10]", function () {
    assert.strictEqual(sumOfDifferences([1, 2, 10]), 9);
  });

  it("sumOfDifferences([-3, -2, -1])", function () {
    assert.strictEqual(sumOfDifferences([-3, -2, -1]), 2);
  });
});
