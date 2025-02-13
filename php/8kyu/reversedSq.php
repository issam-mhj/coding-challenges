<!-- **
 * 🏆 Challenge: Reversed sequence (8kyu)
 *
 * 📝 Description:
Task:
Build a function that returns an array of integers from n to 1 where n>0.

Example : n=5 -> [5,4,3,2,1]


 * -->

<?php

function reverseSeq(int $n): array
{
    $nm = [];
    $ind = 0;
    for ($i = $n; $i > 0; $i--) {
        $nm[$ind] = $i;
        $ind++;
    }
    return $nm;
};
?>

<!-- // Test cases -->

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
private function doTest(int $n, array $expected)
{
$this->assertSame($expected, reverseSeq($n), "reverseSeq($n) returned an incorrect value.");
}

public function testSampleTests()
{
$this->doTest(1, [1]);
$this->doTest(5, [5, 4, 3, 2, 1]);
}
}