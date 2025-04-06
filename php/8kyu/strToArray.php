<!-- **
 * 🏆 Challenge: Convert a string to an array (8kyu)
 *
 * 📝 Description:
Write a function to split a string and convert it into an array of words.

Examples (Input ==> Output):
"Robin Singh" ==> ["Robin", "Singh"]

"I love arrays they are my favorite" ==> ["I", "love", "arrays", "they", "are", "my", "favorite"]

 * -->

<?php
function string_to_array($s)
{
    return explode(" ", $s);
}
?>
<!--  Test cases -->

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
public function test_basic()
{
$this->assertEquals(["I", "was", "walking", "my", "dog", "1", "day"], string_to_array("I was walking my dog 1 day"));
$this->assertEquals(["then", "it", "hit", "me,"], string_to_array("then it hit me,"));
$this->assertEquals(["I", "looked", "up", "but", "I", "saw", "nothing"], string_to_array("I looked up but I saw nothing"));
$this->assertEquals(["I", "looked", "back", "and", "there", "it", "was", ":"], string_to_array("I looked back and there it was :"));
$this->assertEquals(["The", "squirrel", "that", "hit", "me", "with", "the", "coconut", "!"], string_to_array("The squirrel that hit me with the coconut !"));
$this->assertEquals([""], string_to_array(""));
}
}