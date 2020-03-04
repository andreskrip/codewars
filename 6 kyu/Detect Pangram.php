<?php
/**
 * https://www.codewars.com/kata/545cedaa9943f7fe7b000048
 *
 * A pangram is a sentence that contains every single letter of the alphabet at least once.
 * For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram,
 * because it uses the letters A-Z at least once (case is irrelevant).
 *
 * Given a string, detect whether or not it is a pangram. Return True if it is, False if not.
 * Ignore numbers and punctuation.
 */

function detect_pangram($string)
{
    // delete all non-character symbols
    $onlyChar = preg_replace('~[^a-z]~i', '', $string);

    // use positive lookahead assertion to remove duplicate characters
    $onlyCharNotRepeat = preg_replace('~(.)(?=.*\1)~i', '', $onlyChar);

    // in english 26 characters
    if (strlen($onlyCharNotRepeat) === 26) {
        return true;
    }
    return false;
}
