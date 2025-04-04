<!-- **
 * 🏆 Challenge: Volume of a Cuboid (8kyu)
 *
 * 📝 Description:
Bob needs a fast way to calculate the volume of a rectangular cuboid with three values: the length, width and height of the cuboid.

Write a function to help Bob with this calculation.
 * -->

<?php
function get_volume_of_cuboid($length, $width, $height)
{
    return $length * $width * $height;
}

?>
<!--  Test cases -->

class VolumeOfACuboidTest extends TestCase {
public function testExamples() {
$this->assertEquals(4, get_volume_of_cuboid(1, 2, 2));
$this->assertEquals(60, get_volume_of_cuboid(6, 2, 5));
}
}