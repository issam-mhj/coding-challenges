<!-- **
 * 🏆 Challenge: Grasshopper - Messi goals function (8kyu)
 *
 * 📝 Description:
Messi is a soccer player with goals in three leagues:

LaLiga
Copa del Rey
Champions
Complete the function to return his total number of goals in all three leagues.

Example:

5, 10, 2  -> 17

-->

<?php

function goals(int $laLigaGoals, int $copaDelReyGoals, int $championsLeagueGoals): int
{
    return $laLigaGoals + $copaDelReyGoals + $championsLeagueGoals;
}
?>
// Test cases

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

private function doTest(int $la, int $co, int $ch, int $expected)
{
$this->assertSame($expected, goals($la, $co, $ch), "goals($la, $co, $ch) returned an incorrect answer.");
}

public function testSample()
{
$this->doTest(0, 0, 0, 0);
$this->doTest(43, 10, 5, 58);
}
}