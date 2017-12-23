<?php

namespace Prelude\Tests;

use function Prelude\last;

class LastTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function test()
    {
        $this->assertEquals(3, last([1, 2, 3]));
        $this->assertEquals(3, last(['a' => 1, 'b' => 2, 'c' => 3]));
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function shouldThrowInvalidArgumentException()
    {
        last([]);
    }
}
