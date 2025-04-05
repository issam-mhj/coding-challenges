<!-- 
 * 🏆 Challenge: Fake Binary (8kyu)
 *
 * 📝 Description:
Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

Note: input will never be an empty string -->



<?php

function fake_bin(string $s): string
{
    $y = "";
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] >= 5) {
            $y .= "1";
        } else {
            $y .= "0";
        }
    }
    return $y;
}
?>


// Test cases

use PHPUnit\Framework\TestCase;

class FakeBinTest extends TestCase
{
private function doTest(string $s, string $expected)
{
$this->assertSame($expected, fake_bin($s), "fake_bin('$s') returned an incorrect value.");
}

public function testExamples()
{
$this->doTest('45385593107843568', '01011110001100111');
$this->doTest('509321967506747', '101000111101101');
$this->doTest('366058562030849490134388085', '011011110000101010000011011');
}
}