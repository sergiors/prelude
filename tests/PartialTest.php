<?php

namespace Prelude\Tests;

use function Prelude\partial;

class PartialTest extends \PHPUnit_Framework_TestCase
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

        $this->assertInstanceOf(\Closure::class, partial($four));
        $this->assertInstanceOf(\Closure::class, partial($four)(1, 2));
        $this->assertInstanceOf(\Closure::class, partial($four)(1, 2));
        $this->assertEquals(10, partial($four)(1)(2)(3, 4));
        $this->assertEquals(10, $result);
    }
}
