<?php

/**
 * Wrap a string to the supplied length, using \n newlines.
 * Will break words only if longer than allowed line length.
 *
 * @param string $string
 * @param integer $length
 * @return string
 */
function wrap(string $string, int $length): string {
    // Return early
    if (mb_strlen($string) <= $length) {
        return $string;
    }
    
    $regex = '/.{0,' . $length . '}\s|.{0,' . $length . '}/imu';
    preg_match_all($regex, $string, $matches);

    $accumulator = '';
    foreach ($matches[0] as $match) {
        $accumulator .= trim($match) . '\n';
    }

    return $accumulator;
}