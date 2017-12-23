<?php

namespace Prelude\Tests;

use function Prelude\take;

class TakeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldTakeItems()
    {
        $this->assertEquals(['foo'], take(1)(['foo', 'bar', 'baz']));
        $this->assertEquals(['foo', 'bar'], take(2)(['foo', 'bar', 'baz']));
        $this->assertEquals(['foo', 'bar', 'baz'], take(4)(['foo', 'bar', 'baz']));
        $this->assertEquals([1, 2, 3], take(3)([1, 2, 3, 4, 5]));
    }
}
