<?php

namespace Prelude\Tests;

use function Prelude\{none, not, equals};

class NoneTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $isEven = function (int $n) { return $n % 2 === 0; };
        $isOdd = function (int $n) { return $n % 2 === 1; };

        $this->assertTrue(
            none($isEven)([1, 3, 5, 7, 9, 11])
        );

        $this->assertFalse(
            none($isEven)([1, 3, 5, 7, 8, 11])
        );

        $this->assertTrue(
            none($isOdd)([2, 4, 6, 8])
        );
    }
}
