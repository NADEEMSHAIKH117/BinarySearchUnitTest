<?php

use PHPUnit\Framework\TestCase;
use App\BinarySearch;


/**
 * Author -> Nadeem shaikh
 * PHP Version -> 8.1.1
 */
class BinarySearchTest extends TestCase
{
    public $binarySearchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

    public function testGivenDataFoundShouldReturnTrue()
    {
        $binarySearch = new BinarySearch();
        $lower = 0;
        $higher = count($this->binarySearchArray) - 1;
        $result = $binarySearch->search($this->binarySearchArray, $lower, $higher, 18);
        $this->assertEquals(8, $result);
    }
    public function testGivenDataNotFoundShouldReturnFalse()
    {
        $binarySearch = new BinarySearch();
        $lower = 0;
        $higher = count($this->binarySearchArray) - 1;
        $result = $binarySearch->search($this->binarySearchArray, $lower, $higher, 60);
        $this->assertEquals(false, $result);
    }
}