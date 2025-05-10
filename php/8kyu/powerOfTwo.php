<!-- **
 * 🏆 Challenge: Powers of 2 (8kyu)
 *
 * 📝 Description:
Complete the function that takes a non-negative integer n as input, and returns a list of all the powers of 2 with the exponent ranging from 0 to n ( inclusive ).

Examples
n = 0  ==> [1]        # [2^0]
n = 1  ==> [1, 2]     # [2^0, 2^1]
n = 2  ==> [1, 2, 4]  # [2^0, 2^1, 2^2]
 * -->

<?php

function powersOfTwo(int $n): array
{
    $num = [1];
    if ($n == 0) {
        return $num;
    }
    for ($i = 0; $i < $n; $i++) {
        array_push($num, $num[count($num) - 1] * 2);
    }
    return $num;
}

?>

<!-- // Test cases -->

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
private function doTest(int $n, array $expected)
{
$this->assertSame($expected, powersOfTwo($n), "powersOfTwo($n) returned an incorrect answer.");
}

public function testSample()
{
$this->doTest(0, [1]);
$this->doTest(1, [1, 2]);
$this->doTest(4, [1, 2, 4, 8, 16]);
}
}