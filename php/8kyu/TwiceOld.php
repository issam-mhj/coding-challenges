<!-- **
 * 🏆 Challenge: Twice as old (8kyu)
 *
 * 📝 Description:
Your function takes two arguments:

current father's age (years)
current age of his son (years)
Сalculate how many years ago the father was twice as old as his son (or in how many years he will be twice as old). The answer is always greater or equal to 0, no matter if it was in the past or it is in the future.


 * -->

<?php
function twice_as_old($dad_years_old, $son_years_old)
{
    $years = $dad_years_old - $son_years_old * 2;
    return $years >= 0 ? $years : $years * -1;
}
?>
<!--  Test cases -->
class Test extends TestCase
{
public function testBasicTests() {
$this->assertSame(22, twice_as_old(36,7));
$this->assertSame(5, twice_as_old(55,30));
$this->assertSame(0, twice_as_old(42,21));
$this->assertSame(20, twice_as_old(22,1));
$this->assertSame(29, twice_as_old(29,0));
}
}