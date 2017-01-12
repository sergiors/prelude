<?php

namespace Prelude\Tests;

use function Prelude\equals;

class EqualsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnSame()
    {
        $this->assertTrue(equals(true)(true));
        $this->assertTrue(equals(1)(1));
        $this->assertFalse(equals("1")(1));
        $this->assertFalse(equals("true")(true));

        $isTrue = equals(true);
        $this->assertTrue($isTrue(true));
        $this->assertFalse($isTrue(false));
    }
}
