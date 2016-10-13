<?php

namespace Prelude\Tests;

use function Prelude\head;

class HeadTest extends \PHPUnit_Framework_TestCase
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
     * @expectedException \Prelude\InvalidArgument
     */
    public function shouldThrowInvalidArgumentException()
    {
        head([]);
    }
}
