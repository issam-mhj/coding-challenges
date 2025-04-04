<!-- **
 * 🏆 Challenge: Get the mean of an array (8kyu)
 *
 * 📝 Description:
It's the academic year's end, fateful moment of your school report. The averages must be calculated. All the students come to you and entreat you to calculate their average for them. Easy ! You just need to write a script.

Return the average of the given array rounded down to its nearest integer.

The array will never be empty.
-->

<?php

function get_average($a)
{
    return intval(array_sum($a) / count($a));
}
?>
// Test cases

class GetAverageTest extends TestCase {
public function testExamples() {
$this->assertSame(2, get_average([2, 2, 2, 2]));
$this->assertSame(3, get_average([1, 2, 3, 4, 5]));
$this->assertSame(1, get_average([1, 1, 1, 1, 1, 1, 1, 2]));
}
}