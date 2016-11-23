<?php

namespace Sergiors\Functional\Tests;

use function Prelude\apply;

class ApplyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnAClosure()
    {
        $this->assertInstanceOf(\Closure::class, apply('max'));
    }

    /**
     * @test
     */
    public function shouldReturnANumber()
    {
        $this->assertEquals(42, apply('max', [1, 2, 3, -99, 42, 6, 7]));
    }
}
