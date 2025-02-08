<!-- **
* 🏆 Challenge: The Feast of Many Beasts (8kyu)
*
* 📝 Description:
Task:
All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as the animal's name.
For example, the great blue heron is bringing garlic naan and the chickadee is bringing chocolate cake.

Write a function feast that takes the animal's name and dish as arguments and returns true or false to indicate whether the beast is allowed to bring the dish
to the feast.

Assume that beast and dish are always lowercase strings, and that each has at least two letters. beast and dish may contain hyphens and spaces,
but these will not appear at the beginning or end of the string. They will not contain numerals.
* -->
<?php
function feast($beast, $dish)
{
    return $beast[0] == $dish[0] && $beast[strlen($beast) - 1] == $dish[strlen($dish) - 1];
}
?>

<!-- Test cases -->

class SampleTest extends TestCase
{
public function testBasic() {
$this->assertSame(true, feast("great blue heron", "garlic naan"));
$this->assertSame(true, feast("chickadee", "chocolate cake"));
$this->assertSame(false, feast("brown bear", "bear claw"));
}
}