<!-- **
 * 🏆 Challenge: Opposites Attract (8kyu)
 *
 * 📝 Description:
Timmy & Sarah think they are in love, but around where they live,
they will only know once they pick a flower each.
If one of the flowers has an even number of petals and the other has an odd number
of petals it means they are in love.

Write a function that will take the number of petals of each flower
and return true if they are in love and false if they aren't.
 * -->
<?php

function lovefunc(int $flower1, int $flower2): bool
{
    return ($flower1 + $flower2) % 2;
}
?>




// Test cases

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
private function doTest(int $a, int $b, bool $expected)
{
$this->assertSame($expected, lovefunc($a, $b), "lovefunc($a, $b) returned an incorrect value.");
}

public function testExample()
{
$this->doTest(1, 4, true);
$this->doTest(2, 2, false);
$this->doTest(0, 1, true);
$this->doTest(0, 0, false);
}
}