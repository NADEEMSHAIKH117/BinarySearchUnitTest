<?php

namespace App;

/**
 * Author -> Nadeem Shaikh
 * PHP Version -> 8.1.1
 */
class BinarySearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array, lower index, higher index and element to search as parameter
     * returns the index of element, if present
     * else returns false
     */
    function search($searchArray, $lower, $higher, $x)
    {
        if ($higher >= $lower) {
            $mid = ceil($lower + ($higher - $lower) / 2);

            if ($searchArray[$mid] == $x) {
                return $mid;
            } elseif ($searchArray[$mid] > $x) {
                return $this->search($searchArray, $lower, $mid - 1, $x);
            } else {
                return $this->search($searchArray, $mid + 1, $higher, $x);
            }
        } else {
            return false;
        }
    }
}