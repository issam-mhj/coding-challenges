<!-- **
 * 🏆 Challenge: How good are you really? (8kyu)
 *
 * 📝 Description:
There was a test in your class and you passed it. Congratulations!

But you're an ambitious person. You want to know if you're better than the average student in your class.

You receive an array with your peers' test scores. Now calculate the average and compare your score!

Return true if you're better, else false!

Note:
Your points are not included in the array of your class's points. Do not forget them when calculating the average score!

* -->

<?php
function betterThanAverage(array $classPoints, int $yourPoints): bool
{
    $sum = 0;
    for ($i = 0; $i < count($classPoints); $i++) {
        $sum += $classPoints[$i];
    }
    $sum += $yourPoints;
    return ($sum / count($classPoints)) <= $yourPoints;
}
?>

<!--  Test cases -->

use PHPUnit\Framework\TestCase;

class Test extends TestCase {

private function doTest(array $classPoints, int $yourPoints, bool $expected) {
$this->assertEquals($expected, betterThanAverage($classPoints, $yourPoints), "betterThanAverage(" . json_encode($classPoints) . ", $yourPoints) returned an incorrect value.");
}

public function testSampleTests() {
$this->doTest([2, 3], 5, true);
$this->doTest([100, 40, 34, 57, 29, 72, 57, 88], 75, true);
$this->doTest([12, 23, 34, 45, 56, 67, 78, 89, 90], 69, true);
$this->doTest([41, 75, 72, 56, 80, 82, 81, 33], 50, false);
$this->doTest([29, 55, 74, 60, 11, 90, 67, 28], 21, false);
}
}