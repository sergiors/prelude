<?php

namespace Prelude\Tests;

use function Prelude\find;
use function Prelude\equals;

class FindTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $isEven = function (int $n) { return $n % 2 === 0; };
        $isOdd = function (int $n) { return $n % 2 === 1; };

        $this->assertEquals(3, find($isOdd)([2, 3, 4, 5, 6, 7, 8]));
        $this->assertEquals(4, find($isEven)([5, 7, 4, 5, 6, 7, 8]));
        $this->assertEquals(10, find(equals(10))([5, 8, 10, 11]));
        $this->assertEquals(-1, find(equals(10))([]));
    }
}
