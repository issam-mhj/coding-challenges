<!-- **
 * 🏆 Challenge: Count the Monkeys! (8kyu)
 *
 * 📝 Description:
You take your son to the forest to see the monkeys. You know that there are a certain number there (n), but your son is too young to just appreciate the full number,
he has to start counting them from 1.

As a good parent, you will sit and count with him. Given the number (n), populate an array with all numbers up to and including that number, but excluding zero.

Example:
P.S. Each array includes only integer numbers. Output is a number too.

 * -->

<?php
function monkeyCount($n)
{
    $numOfMonkeys = [];
    for ($i = 1; $i <= $n; $i++) {
        $num[$i - 1] = $i;
    }
    return $num;
}
?>

// Test cases
class MyTest extends TestCase
{
public function testBasicTests() {
$this->assertSame([1, 2, 3, 4, 5], monkeyCount(5));
$this->assertSame([1, 2, 3], monkeyCount(3));
$this->assertSame([1, 2, 3, 4, 5, 6, 7, 8, 9], monkeyCount(9));
$this->assertSame([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], monkeyCount(10));
$this->assertSame([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20], monkeyCount(20));
}
}