<!-- **
 * 🏆 Challenge: Count by X (8kyu)
 *
 * 📝 Description:
Create a function with two arguments that will return an array of the first n multiples of x.

Assume both the given number and the number of times to count will be positive numbers greater than 0.

Return the results as an array or list ( depending on language ).
Example:
x = 1, n = 10 -> [1,2,3,4,5,6,7,8,9,10]
x = 2, n = 5  -> [2,4,6,8,10]
 * -->

<?php
function countBy($x, $n)
{
    $z = [];
    for ($i = 1; $i <= $n; $i++) $z[$i - 1] = $x * $i;
    return $z;
}
?>
<!-- Test cases -->
class MyTest extends TestCase
{
public function testExample()
{
$this->assertSame([1, 2, 3, 4, 5], countBy(1, 5), "Array does not match");
$this->assertSame([2, 4, 6, 8, 10], countBy(2, 5), "Array does not match");
}
}