<?php
/**
 * https://www.codewars.com/kata/51f2b4448cadf20ed0000386
 *
 * Complete the function/method so that it returns the url with anything after the anchor (#) removed.
 *
 * Examples:
 * removeUrlAnchor('www.codewars.com#about') // returns 'www.codewars.com'
 * removeUrlAnchor('www.codewars.com?page=1') // returns 'www.codewars.com?page=1'
 */

function replaceAll($string): string
{
    // create regex for searching matches
    $pattern = '/(.*)#/';

    // check string by regex
    preg_match($pattern, $string, $matches);

    // if matches are found return capturing group without anchor
    if (!empty($matches)) {
        return $matches[1];
    }
    // if matches are not found simply return source string
    return $string;
}