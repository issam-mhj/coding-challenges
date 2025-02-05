<!-- 
 * 🏆 Challenge: Switch it Up! (8kyu)
 *
 * 📝 Description:
 * Given a number between 0-9, return it in words.
 * Example:
 *    switchItUp(1)  ➝ "One"
 *    switchItUp(5)  ➝ "Five"
 *
-->
<?php

function switch_it_up($number)
{
    switch ($number) {
        case 0:
            return "Zero";
            break;
        case 1:
            return "One";
            break;
        case 2:
            return "Two";
            break;
        case 3:
            return "Three";
            break;
        case 4:
            return "Four";
            break;
        case 5:
            return "Five";
            break;
        case 6:
            return "Six";
            break;
        case 7:
            return "Seven";
            break;
        case 8:
            return "Eight";
            break;
        case 9:
            return "Nine";
            break;
        default:
            return "Invalid Number";
    }
}
?>

// Test cases
class SwitchItUpTest extends TestCase
{
public function test_static_operations()
{
$this->assertSame("One", switch_it_up(1));
$this->assertSame("Three", switch_it_up(3));
$this->assertSame("Five", switch_it_up(5));
}
}