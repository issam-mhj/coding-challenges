<!-- 
 * 🏆 Challenge: Grasshopper - Summation (8kyu)
 *
 * 📝 Description:
Summation
Write a program that finds the summation of every number from 1 to num (both inclusive). The number will always be a positive integer greater than 0. Your function only needs to return the result, what is shown between parentheses in the example below is how you reach that result and it's not part of it, see the sample tests.

For example (Input -> Output):

2 -> 3 (1 + 2)
8 -> 36 (1 + 2 + 3 + 4 + 5 + 6 + 7 + 8)
-->



<?php

function summation(int $n): int
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

?>


// Test cases
use PHPUnit\Framework\TestCase;

class SummationTest extends TestCase {
private function doTest(int $n, int $expected) {
$this->assertSame($expected, summation($n), "summation($n) returned an incorrect answer.");
}

public function testThatSummationWorksForExampleTests() {
$this->doTest(1, 1);
$this->doTest(2, 3);
$this->doTest(3, 6);
$this->doTest(4, 10);
$this->doTest(5, 15);
}
}