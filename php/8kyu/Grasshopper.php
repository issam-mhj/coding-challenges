<!-- 
 * 🏆 Challenge: Grasshopper - Terminal game move function (8kyu)
 *
 * 📝 Description:
In this game, the hero moves from left to right. The player rolls the dice and moves the number of spaces indicated by the dice two times.

Create a function for the terminal game that takes the current position of the hero and the roll (1-6) and return the new position.

Example:
move(3, 6) should equal 15 -->



<?php

function move(int $pos, int $roll): int
{
    return $roll * 2 + $pos;
}

?>


// Test cases
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
private function doTest(int $pos, int $roll, int $expected)
{
$this->assertSame(
$expected,
move($pos, $roll),
"move($pos, $roll) returned an incorrect result."
);
}

public function testSampleTests()
{
$this->doTest(0, 4, 8);
$this->doTest(3, 6, 15);
$this->doTest(2, 5, 12);
}
}