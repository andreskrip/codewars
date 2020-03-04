<?php
/*
* Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of cells and carries the "instructions" for the development and functioning of living organisms.
* If you want to know more http://en.wikipedia.org/wiki/DNA
* In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". You have function with one side of the DNA (string, except for Haskell); you need to get the other complementary side. DNA strand is never empty or there is no DNA at all (again, except for Haskell).
* More similar exercise are found here http://rosalind.info/problems/list-view/ (source)
* DNA_strand("ATTGC") // returns "TAACG"
* DNA_strand("GTAT") // returns "CATA"
*/

function DNA_strand($dna)
{
    // transform the string into array
    $fragmentDna = str_split($dna);
    //create the empty string where will be kept the result DNA
    $resultDna = '';

    //check each symbol and create a complement symbol
    foreach ($fragmentDna as $symbol) {
        switch ($symbol) {
            case 'A':
                $newSymbol = 'T';
                break;
            case 'T':
                $newSymbol = 'A';
                break;
            case 'C':
                $newSymbol = 'G';
                break;
            case 'G':
                $newSymbol = 'C';
                break;
        }

        //add to result string complement symbol
        $resultDna .= $newSymbol;
    }
    return $resultDna;
}
