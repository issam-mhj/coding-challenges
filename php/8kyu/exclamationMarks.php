<!-- 
 * 🏆 Challenge: Exclamation marks series #11: Replace all vowel to exclamation mark in the sentence (8kyu)
 *
 * 📝 Description:
Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.

Examples
"Hi!" -> "H!!"
"!Hi! Hi!" -> "!H!! H!!"
"aeiou" -> "!!!!!"
"ABCDE" -> "!BCD!"
-->



<?php

function replace(string $s): string
{
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    return str_replace($vowels, "!", $s);
}
?>


// Test cases

class ReplaceTest extends TestCase {
public function testExamples() {
$this->assertSame("H!!", replace("Hi!"));
$this->assertSame("!H!! H!!", replace("!Hi! Hi!"));
$this->assertSame("!!!!!", replace("aeiou"));
$this->assertSame("!BCD!", replace("ABCDE"));
}
}