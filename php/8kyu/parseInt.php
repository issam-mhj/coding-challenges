<!-- **
 * 🏆 Challenge: Parse nice int from char problem (8kyu)
 *
 * 📝 Description:
You ask a small girl,"How old are you?" She always says, "x years old", where x is a random number between 0 and 9.

Write a program that returns the girl's age (0-9) as an integer.

Assume the test input string is always a valid string. For example, the test input may be "1 year old" or "5 years old". The first character in the string is always a number.
 * -->

<?php
function getAge($response)
{
    return intval($response);
}
?>
<!--  Test cases -->


class MyTest extends TestCase
{
// test function names should start with "test"
public function testThatSomethingShouldHappen()
{
$this->assertSame(3, getAge("3 years old"));
}
}