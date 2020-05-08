<?php
/**
 * https://www.codewars.com/kata/5254ca2719453dcc0b00027d
 *
 * In this kata you have to create all permutations of an input string and remove duplicates, if present.
 * This means, you have to shuffle all letters from the input in all possible orders.
 *
 * Examples:
 *
 * permutations('a'); // => ['a']
 * permutations('ab'); // => ['ab', 'ba']
 * permutations('aabb'); // => ['aabb', 'abab', 'abba', 'baab', 'baba', 'bbaa']
 *
 * The order of the permutations doesn't matter.
 */
function permutations(string $s): array
{
    $count = strlen($s);
    $combinations[] = $s;
    for ($i = 1; $i <= $count * (5 ** $count); $i++) { // VERY CRAZY SOLUTION :)
        $combinations[] = str_shuffle($s);
    }
    return array_unique($combinations);
}