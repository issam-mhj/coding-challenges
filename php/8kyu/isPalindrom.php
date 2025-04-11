<!-- **
 * 🏆 Challenge: Is it a palindrome? (8kyu)
 *
 * 📝 Description:
Write a function that checks if a given string (case insensitive) is a palindrome.

A palindrome is a word, number, phrase, or other sequence of symbols that reads the same backwards as forwards, such as madam or racecar.
-->

<?php

function isPalindrome(string $str): bool
{
    $x = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $x .= $str[$i];
    }
    return strtoupper($x) == strtoupper($str);
}
?>
// Test cases
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase {
public function testBasicTests() {
$this->assertTrue(isPalindrome("a"));
$this->assertTrue(isPalindrome("aba"));
$this->assertTrue(isPalindrome("Abba"));
$this->assertFalse(isPalindrome("hello"));
$this->assertTrue(isPalindrome("Bob"));
$this->assertTrue(isPalindrome("Madam"));
$this->assertTrue(isPalindrome("AbBa"));
$this->assertTrue(isPalindrome(""));
}
}