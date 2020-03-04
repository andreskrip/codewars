<?php
/**
 * https://www.codewars.com/kata/515e271a311df0350d00000f
 *
 * Complete the square sum function so that it squares each number passed into it and then sums the results together.
 * For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.
 */

function square_sum($numbers): int
{
    // create empty var for result value
    $result = 0;

    // square each number of array and sum to the result var
    foreach ($numbers as $number) {
        $sqrNumber = $number ** 2;
        $result += $sqrNumber;
    }
    return $result;
}