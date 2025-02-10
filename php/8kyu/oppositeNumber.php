<!-- **
 * 🏆 Challenge: Opposite number (8kyu)
 *
 * 📝 Description:
Very simple, given a number (integer / decimal / both depending on the language), find its opposite (additive inverse).

Examples:

1: -1
14: -14
-34: 34
 * -->

<?php

function opposite(int $n): int
{
    return -$n;
}

?>

<!-- Test cases -->


use PHPUnit\Framework\TestCase;

class OppositeTest extends TestCase
{

    private function doTest(int $n, int $expected)
    {
        $this->assertSame($expected, opposite($n), "opposite($n) returned an incorrect answer.");
    }

    public function testThatOppositeWorksForExamplesProvidedInDescription()
    {
        $this->doTest(1, -1);
        $this->doTest(14, -14);
        $this->doTest(-34, 34);
    }
}
