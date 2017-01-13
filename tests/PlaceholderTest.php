<?php

namespace Prelude\Tests;

use const Prelude\_;
use function Prelude\placeholder;

class PlaceholderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldWaitByPlaceholder()
    {
        $slice = placeholder('array_slice')(_, 2);
        $this->assertEquals([30, 40, 50], $slice([10, 20, 30, 40, 50]));

        $substr = placeholder('substr')(_, 2, _);
        $this->assertSame('cde', $substr('abcdef', -1));
        $this->assertSame('c', $substr('abcdef', 1));
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     */
    public function shouldThrowInvalidArgumentException()
    {
        placeholder('substr')('abcdef')(2);
    }
}
