<?php

namespace Prelude\Tests;

use function Prelude\init;

class InitTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $this->assertEquals([1, 2], init([1, 2, 3]));
        $this->assertEquals(['a' => 'a'], init(['a' => 'a', 'b' => 'b']));
        $this->assertEquals([], init([]));
    }
}
