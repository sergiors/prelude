<?php

namespace Prelude\Tests;

use function Prelude\find;

class FindTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shoudlReturnFirstValue()
    {
        $odd = function ($x) {
            return $x & 1;
        };

        $even = function ($x) {
            return !($x & 1);
        };

        $this->assertEquals(3, find($odd, [2, 3, 4, 5, 6, 7, 8]));
        $this->assertEquals(4, find($even, [5, 7, 4, 5, 6, 7, 8]));
    }
}
