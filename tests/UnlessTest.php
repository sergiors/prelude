<?php

namespace Prelude\Tests;

use function Prelude\unless;
use const Prelude\isArray;

class UnlessTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnSameValue()
    {
        $plus = function ($x) {
            return $x + 1;
        };
        // never run $plus
        $this->assertEquals([1, 2, 3], unless(isArray)($plus)([1, 2, 3]));
    }

    /**
     * @test
     */
    public function shouldReturnValuePassThroughPlus()
    {
        $plus = function ($x) {
            return $x + 1;
        };
        $this->assertEquals(2, unless(isArray)($plus)(1));
    }
}
