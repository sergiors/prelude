<?php

namespace Prelude\Tests;

use function Prelude\tail;

class TailTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnArrayRest()
    {
        $this->assertEquals([2, 3], tail([1, 2, 3]));
        $this->assertEquals(['b' => 'b'], tail(['a' => 'a', 'b' => 'b']));
        $this->assertEquals([], tail([]));
    }
}
