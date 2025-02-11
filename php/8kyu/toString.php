<!-- **
* 🏆 Challenge: Convert a Number to a String! (8kyu)
*
* 📝 Description:
Task:
We need a function that can transform a number (integer) into a string.

What ways of achieving this do you know?

Examples (input -> output):
123 -> "123"
999 -> "999"
-100 -> "-100"
* -->

<?php

function numberToString(int $num): string
{
    return "" . $num;
}
?>

<!-- // Test cases -->

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
private function doTest(int $number, string $expected)
{
$this->assertSame($expected, numberToString($number), "numberToString($number) returned an incorrect answer.");
}

public function testSampleTests()
{
$this->doTest(67, '67');
}
}