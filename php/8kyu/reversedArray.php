<!-- **
 * 🏆 Challenge: Convert number to reversed array of digits (8kyu)
 *
 * 📝 Description:
Given a random non-negative number, you have to return the digits of this number within an array in reverse order.

Example (Input => Output):
35231 => [1,3,2,5,3]
0     => [0]
 * -->

<?php

function digitize(int $n): array
{
    $numbers = [];
    $count = 0;
    if ($n == 0) {
        return [0];
    }
    for ($i = 0; $n > 0; $i++) {
        if ($n == 0) {
            break;
        }
        $numbers[$count] = $n % 10 | 0;
        $n = $n / 10 | 0;
        $count++;
    }
    return $numbers;
}

?>

<!-- // Test cases -->
use PHPUnit\Framework\TestCase;

class DigitizeTest extends TestCase
{
private function doTest(int $n, array $expected)
{
$this->assertSame(
$expected,
digitize($n),
"digitize($n) should return " . json_encode($expected)
);
}

public function testSample()
{
$this->doTest(35231, [1, 3, 2, 5, 3]);
$this->doTest(0, [0]);
}
}