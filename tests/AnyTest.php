<?php

namespace Prelude\Tests;

use function Prelude\any;

class AnyTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $isEven = function ($n) { return $n % 2 === 0; };
        $isOdd = function ($n) { return $n % 2 === 1; };

        $this->assertTrue(any($isEven)([1, 3, 4, 5, 7]));
        $this->assertFalse(any($isEven)([1, 3, 5, 7]));

        $this->assertTrue(any($isOdd)([1, 3, 5, 7]));
        $this->assertFalse(any($isOdd)([2, 4, 6]));

        $this->assertTrue(any('is_array')([2, []]));
        $this->assertFalse(any('is_array')(['s', 'x']));
    }
}
