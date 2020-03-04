<?php
/**
 * Complete the solution so that it splits the string into pairs of two characters.
 * If the string contains an odd number of characters then it should replace the missing second character
 * of the final pair with an underscore ('_').
 *
 * Examples:
 * solution('abc') // should return ['ab', 'c_']
 * solution('abcdef') // should return ['ab', 'cd', 'ef']
 */

function solution($str)
{
    // return empty array if incoming array is empty
    if (empty($str)) {
        return [];
    }

    // transform string to array with length 2
    $result = str_split($str, 2);

    // check length of last element and add "_" if need
    if (strlen(end($result)) === 1) {
        $count = count($result);
        $result[$count - 1] .= '_';
    }

    return $result;
}
