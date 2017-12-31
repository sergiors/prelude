<?php

namespace Prelude\Tests;

use const Prelude\isScalar;
use function Prelude\all;

class AllTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $even = function ($n) { return $n % 2 === 0; };

        $this->assertTrue(all($even)([2, 4, 6, 8, 10, 12]));
        $this->assertTrue(all(isScalar)([1, 2, 3, 4]));
        $this->assertFalse(all(isScalar)([1, 2, [], 4]));
    }
}
