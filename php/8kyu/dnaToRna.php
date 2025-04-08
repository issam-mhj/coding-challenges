<!-- **
 * 🏆 Challenge: DNA to RNA Conversion (8kyu)
 *
 * 📝 Description:
Deoxyribonucleic acid, DNA is the primary information storage molecule in biological systems. It is composed of four nucleic acid bases Guanine ('G'), Cytosine ('C'), Adenine ('A'), and Thymine ('T').

Ribonucleic acid, RNA, is the primary messenger molecule in cells. RNA differs slightly from DNA its chemical structure and contains no Thymine. In RNA Thymine is replaced by another nucleic acid Uracil ('U').

Create a function which translates a given DNA string into RNA.

For example:

"GCAT"  =>  "GCAU"
The input string can be of arbitrary length - in particular, it may be empty. All input is guaranteed to be valid, i.e. each input string will only ever consist of 'G', 'C', 'A' and/or 'T'.

 * -->
<?php

function bonusTime($salary, $bonus)
{
    return $bonus ? '$' . $salary * 10 : '$' . $salary;
}
?>

<!-- Test cases -->

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
private function doTest(string $s, string $expected)
{
$this->assertSame($expected, dnaToRna($s), "dnaToRna('$s') returned an incorrect value.");
}

public function testSampleTests()
{
$this->doTest("TTTT", "UUUU");
$this->doTest("GCAT", "GCAU");
$this->doTest("", "");
$this->doTest("T", "U");
$this->doTest("GACCGCCGCC", "GACCGCCGCC");
$this->doTest("GATTCCACCGACTTCCCAAGTACCGGAAGCGCGACCAACTCGCACAGC", "GAUUCCACCGACUUCCCAAGUACCGGAAGCGCGACCAACUCGCACAGC");
$this->doTest("CACGACATACGGAGCAGCGCACGGTTAGTACAGCTGTCGGTGAACTCCATGACA", "CACGACAUACGGAGCAGCGCACGGUUAGUACAGCUGUCGGUGAACUCCAUGACA");
$this->doTest("AACCCTGTCCACCAGTAACGTAGGCCGACGGGAAAAATAAACGATCTGTCAATG", "AACCCUGUCCACCAGUAACGUAGGCCGACGGGAAAAAUAAACGAUCUGUCAAUG");
}
}