<?php
/**
 * https://www.codewars.com/kata/56b5afb4ed1f6d5fb0000991
 * The input is a string str of digits. Cut the string into chunks
 * (a chunk here is a substring of the initial string) of size sz (ignore the last chunk if its size is less than sz).
 *
 * If a chunk represents an integer such as the sum of the cubes of its digits is divisible by 2, reverse that chunk;
 * otherwise rotate it to the left by one position.
 * Put together these modified chunks and return the result as a string.
 *
 * If:
 * sz is <= 0 or if str is empty return ""
 * sz is greater (>) than the length of str it is impossible to take a chunk of size sz hence return "".
 *
 * Examples:
 * revrot("123456987654", 6) --> "234561876549"
 * revrot("123456987653", 6) --> "234561356789"
 * revrot("66443875", 4) --> "44668753"
 * revrot("66443875", 8) --> "64438756"
 * revrot("664438769", 8) --> "67834466"
 * revrot("123456779", 8) --> "23456771"
 * revrot("", 8) --> ""
 * revrot("123456779", 0) --> ""
 * revrot("563000655734469485", 4) --> "0365065073456944"
 */
function revRot($s, $sz)
{
    // check main conditions
    if ($sz <= 0 || $sz > strlen($s)) {
        return '';
    }
    // transform string to array of chunks
    $newS = substr(chunk_split($s, $sz, ' '), '0', '-1');
    $newS = explode(' ', $newS);

    $result = '';

    // check each chunk for conditions
    foreach ($newS as $chunk) {
        if (strlen($chunk) < $sz) {
            break;
        }
        $sumOfCubes = 0;

        // split chunk to digits and count sum of cubes
        foreach (str_split($chunk) as $digit) {
            $digit = $digit ** 3;
            $sumOfCubes += $digit;
        }
        if ($sumOfCubes % 2 === 0) {
            $chunk = strrev($chunk);
        } else {
            $chunk .= substr($chunk, 0, 1);
            $chunk = substr($chunk, 1);
        }
        $result .= $chunk;
    }
    return $result;
}