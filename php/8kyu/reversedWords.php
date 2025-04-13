<!-- **
 * 🏆 Challenge: Reversed Words (8kyu)
 *
 * 📝 Description:
Complete the solution so that it reverses all of the words within the string passed in.

Words are separated by exactly one space and there are no leading or trailing spaces.

Example(Input -> Output):

"The greatest victory is that which requires no battle" -> "battle no requires which that is victory greatest The"
 * -->

<?php
function reverseWords($str)
{
    $revStr = "";
    $temp = "";
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        if ($str[$i] == " ") {
            $tempLength = strlen($temp);
            for ($j = $tempLength - 1; $j >= 0; $j--) {
                $revStr .= $temp[$j];
            }
            $revStr .= " ";
            $temp = "";
        } else {
            $temp .= $str[$i];
        }
    }

    $tempLength = strlen($temp);
    for ($j = $tempLength - 1; $j >= 0; $j--) {
        $revStr .= $temp[$j];
    }

    return $revStr;
}
?>
<!-- // Test cases -->

class MyTest extends TestCase
{
public function testFixedTests() {
$this->assertSame("world! hello", reverseWords("hello world!"));
$this->assertSame("this like speak doesn't yoda", reverseWords("yoda doesn't speak like this"));
$this->assertSame("foobar", reverseWords("foobar"));
$this->assertSame("editor kata", reverseWords("kata editor"));
$this->assertSame("boat your row row row", reverseWords("row row row your boat"));
}
}