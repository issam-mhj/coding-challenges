/**
 * 🏆 Challenge: Grasshopper - Messi goals function (8kyu)
 *
 * 📝 Description:
Messi is a soccer player with goals in three leagues:

LaLiga
Copa del Rey
Champions
Complete the function to return his total number of goals in all three leagues.

Example:

5, 10, 2  -->  17

 */

function goals(laLigaGoals, copaDelReyGoals, championsLeagueGoals) {
  return laLigaGoals + copaDelReyGoals + championsLeagueGoals;
}

// Test cases
const Test = require("@codewars/test-compat");

describe("Tests", () => {
  it("test", () => {
    Test.assertEquals(goals(0, 0, 0), 0);
    Test.assertEquals(goals(43, 10, 5), 58);
  });
});
