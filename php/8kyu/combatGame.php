<!-- **
 * 🏆 Challenge: Grasshopper - Terminal game combat function (8kyu)
 *
 * 📝 Description:
Create a combat function that takes the player's current health and the amount of damage received, and returns the player's new health. Health can't be less than 0.
 * -->

<?php
function combat($health, $damage)
{
    return $damage < $health ? $health - $damage : 0;
}
?>
<!--  Test cases -->

class MyTest extends TestCase
{
public function testSample() {
$this->assertSame(95, combat(100, 5));
$this->assertSame(84, combat(92, 8));
$this->assertSame(0, combat(20, 30));
}
}