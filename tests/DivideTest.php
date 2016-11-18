<?php

namespace Prelude\Tests;

use function Prelude\divide;

class DivideTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnDivided()
    {
        $this->assertEquals(1, divide(10, 10));
        $this->assertEquals(3.5, divide(7, 2));
    }
}
