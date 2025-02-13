<!-- **
 * 🏆 Challenge: L1: Set Alarm (8kyu)
 *
 * 📝 Description:
Write a function named setAlarm/set_alarm/set-alarm/setalarm (depending on language) which receives two parameters. The first parameter, employed, is true whenever you are employed and the second parameter, vacation is true whenever you are on vacation.

The function should return true if you are employed and not on vacation (because these are the circumstances under which you need to set an alarm). It should return false otherwise. Examples:

employed | vacation 
true     | true     => false
true     | false    => true
false    | true     => false
false    | false    => false
 * -->

<?php
function setAlarm(bool $employed, bool $vacation): bool
{
    return $employed && !$vacation;
}
?>
<!-- // Test cases -->

class MyTest extends TestCase {
public function testTests() {
$this->assertSame(false, setAlarm(true, true));
$this->assertSame(false, setAlarm(false, true));
$this->assertSame(true, setAlarm(true, false));
$this->assertSame(false, setAlarm(false, false));
}
}