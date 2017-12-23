<?php

namespace Prelude\Tests;

use function Prelude\{not, equals};

class NotTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function test()
    {
        $this->assertTrue(
            not(equals(1))(2)
        );
        $this->assertFalse(
            not(equals(true))(true)
        );
    }
}
