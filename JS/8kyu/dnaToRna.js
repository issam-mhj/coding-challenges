/**
 * 🏆 Challenge: DNA to RNA Conversion (8kyu)
 *
 * 📝 Description:
Deoxyribonucleic acid, DNA is the primary information storage molecule in biological systems. It is composed of four nucleic acid bases Guanine ('G'), Cytosine ('C'), Adenine ('A'), and Thymine ('T').

Ribonucleic acid, RNA, is the primary messenger molecule in cells. RNA differs slightly from DNA its chemical structure and contains no Thymine. In RNA Thymine is replaced by another nucleic acid Uracil ('U').

Create a function which translates a given DNA string into RNA.

For example:

"GCAT"  =>  "GCAU"
The input string can be of arbitrary length - in particular, it may be empty. All input is guaranteed to be valid, i.e. each input string will only ever consist of 'G', 'C', 'A' and/or 'T'.



 */
function DNAtoRNA(dna) {
  let str = "";
  for (let i = 0; i < dna.length; i++) {
    if (dna[i] == "T") {
      str += "U";
    } else {
      str += dna[i];
    }
  }
  return str;
}
// Test cases
const chai = require("chai");
const assert = chai.assert;
chai.config.truncateThreshold = 0;

describe("Basic tests", () => {
  it("Testing for fixed tests", () => {
    assert.strictEqual(DNAtoRNA("TTTT"), "UUUU");
    assert.strictEqual(DNAtoRNA("GCAT"), "GCAU");
    assert.strictEqual(DNAtoRNA("GACCGCCGCC"), "GACCGCCGCC");
  });
});
