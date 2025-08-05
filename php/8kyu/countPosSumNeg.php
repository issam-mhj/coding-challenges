<!-- **
 * 🏆 Challenge: Count of positives / sum of negatives (8kyu)
 *
 * 📝 Description:
Task:
Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.

If the input is an empty array or is null, return an empty array.

Example
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
 * -->

<?php
function countPositivesSumNegatives($input)
{
    $sum = array(0, 0);
    for ($i = 0; $i < count($input); $i++) {
        if ($input[$i] > 0) {
            $sum[0]++;
        } elseif ($input[$i] < 0) {
            $sum[1] += $input[$i];
        }
    }
    return $sum;
}
?>
<!-- Test cases -->
class CountPositivesSumNegativesTest extends TestCase
{
public function testExample() {
$this->assertSame([10, -65], countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));
$this->assertSame([8, -50], countPositivesSumNegatives([0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14]));
}
}