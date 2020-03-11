<?php
/**
 * https://www.codewars.com/kata/52449b062fb80683ec000024
 *
 * The marketing team is spending way too much time typing in hashtags.
 * Let's help them with our own Hashtag Generator!
 *
 * Here's the deal:
 *
 * It must start with a hashtag (#).
 * All words must have their first letter capitalized.
 * If the final result is longer than 140 chars it must return false.
 * If the input or the result is an empty string it must return false.
 *
 *
 */
function generateHashtag(string $str)
{
    // check string for emptiness
    if (empty($str) || empty(str_replace(' ', '', $str))) {
        return false;
    }

    // form the result string
    $result = '#' . str_replace(' ', '', ucwords($str));

    // check length of result string
    if (strlen($result) > 140) {
        return false;
    }

    return $result;
}