<?php

namespace Prelude\Tests;

use function Prelude\partial;

class PartialTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnLambda()
    {
        $four = function ($a, $b, $c, $d) {
            return $a + $b + $c + $d;
        };

        $result = partial($four, 1, 2, 3, 4);

        $fn = partial($four);
        $fnRest = partial($four, 1);

        $this->assertInstanceOf(\Closure::class, partial($four));
        $this->assertInstanceOf(\Closure::class, $fn(1, 2));
        $this->assertEquals(10, $fnRest(2, 3, 4));
        $this->assertEquals(10, $result);
    }
}
