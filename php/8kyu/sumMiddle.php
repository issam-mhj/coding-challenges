<!-- **
 * 🏆 Challenge: Sum without highest and lowest number (8kyu)
 *
 * 📝 Description:
Sum all the numbers of a given array ( cq. list ), except the highest and the lowest element ( by value, not by index! ).

The highest or lowest element respectively is a single element at each edge, even if there are more than one with the same value.

Mind the input validation.

Example
{ 6, 2, 1, 8, 10 } => 16
{ 1, 1, 11, 2, 3 } => 6
Input validation
If an empty value ( null, None, Nothing, nil etc. ) is given instead of an array, or the given array is an empty list or a list with only 1 element, return 0.
 * -->

<?php
function sumArray($array)
{
    $sum = 0;
    if (!$array) {
        return 0;
    }
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($y = $i; $y < count($array); $y++) {
            if ($array[$i] <= $array[$y]) {
                $temp = $array[$i];
                $array[$i] = $array[$y];
                $array[$y] = $temp;
            }
        }
    }
    for ($i = 1; $i < count($array) - 1; $i++) {
        $sum += $array[$i];
    }
    return $sum;
}
?>
<!--  Test cases -->

class MyTest extends TestCase
{
public function testExample()
{
$this->assertSame(16, sumArray([6, 2, 1, 8, 10]));
}
}