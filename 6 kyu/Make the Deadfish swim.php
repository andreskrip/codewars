<?php
/**
 * https://www.codewars.com/kata/51e0007c1f9378fa810002a9
 *
 * Write a simple parser that will parse and run Deadfish.
 *
 * Deadfish has 4 commands, each 1 character long:
 *
 * i increments the value (initially 0)
 * d decrements the value
 * s squares the value
 * o outputs the value into the return array
 *
 * Invalid characters should be ignored.
 *
 * parse("iiisdoso") => [ 8, 64 ]
 */
function parse($data)
{
    $value = 0;
    $result = [];
    $data = str_split($data);
    foreach ($data as $command) {
        if ($command === 'i') {
            $value++;
        }
        if ($command === 'd') {
            $value--;
        }
        if ($command === 's') {
            $value = $value ** 2;
        }
        if ($command === 'o') {
            $result[] = $value;
        }
    }
    return $result;
}
