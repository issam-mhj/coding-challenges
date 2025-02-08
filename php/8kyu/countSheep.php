<!-- **
 * 🏆 Challenge: If you can't sleep, just count sheep!! (8kyu)
 *
 * 📝 Description:
Task:
Given a non-negative integer, 3 for example, return a string with a murmur: 
"1 sheep...2 sheep...3 sheep...".Input will always be valid, i.e. no negative integers.

 * -->

<?php
function countsheep($num)
{
    $string = "";
    for ($i = 1; $i <= $num; $i++) {
        $string .= $i . " sheep...";
    }
    return $string;
}
?>
// Test cases
class MyTest extends TestCase
{
public function test_static_operations()
{
$this->assertSame('', countsheep(0));
$this->assertSame('1 sheep...', countsheep(1));
$this->assertSame('1 sheep...2 sheep...', countsheep(2));
$this->assertSame('1 sheep...2 sheep...3 sheep...', countsheep(3));
}
}