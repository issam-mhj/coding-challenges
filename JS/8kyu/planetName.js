/**
 * 🏆 Get Planet Name By ID (8kyu) <<Debugging>>
 *
 * 📝 Description:
The function is not returning the correct values. Can you figure out why?

Example (Input --> Output ):

3 --> "Earth"


 */

// old function
function getPlanetName(id) {
  var name;
  switch (id) {
    case 1:
      name = "Mercury";
    case 2:
      name = "Venus";
    case 3:
      name = "Earth";
    case 4:
      name = "Mars";
    case 5:
      name = "Jupiter";
    case 6:
      name = "Saturn";
    case 7:
      name = "Uranus";
    case 8:
      name = "Neptune";
  }

  return name;
}
// correct one

function getPlanetName(id) {
  var name;
  switch (id) {
    case 1:
      name = "Mercury";
      break;
    case 2:
      name = "Venus";
      break;
    case 3:
      name = "Earth";
      break;
    case 4:
      name = "Mars";
      break;
    case 5:
      name = "Jupiter";
      break;
    case 6:
      name = "Saturn";
      break;
    case 7:
      name = "Uranus";
      break;
    case 8:
      name = "Neptune";
      break;
  }

  return name;
}

// Test cases
const { assert, config } = require("chai");

describe("Get Planet Name By ID", function () {
  it("Sample Tests", function () {
    assert.equal(getPlanetName(2), "Venus");
    assert.equal(getPlanetName(5), "Jupiter");
    assert.equal(getPlanetName(3), "Earth");
  });
});
