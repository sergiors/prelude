<?php

namespace Prelude\Tests;

use function Prelude\gte;

class GteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $this->assertTrue(gte(10, 10));
        $this->assertTrue(gte(10, 9));
    }

    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertFalse(gte(10, 11));
    }
}
