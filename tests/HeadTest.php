<?php

namespace Prelude\Tests;

use function Prelude\head;

class HeadTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnTheFirstArgument()
    {
        $this->assertEquals(1, head([1, 2, 3]));
        $this->assertEquals(1, head(['a' => 1, 'b' => 2, 'c' => 3]));
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function shouldThrowInvalidArgumentException()
    {
        head([]);
    }
}
