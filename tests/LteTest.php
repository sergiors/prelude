<?php

namespace Prelude\Tests;

use function Prelude\lte;

class LteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $this->assertTrue(lte(9, 10));
        $this->assertTrue(lte(9, 9));
    }

    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertFalse(lte(10, 9));
    }
}
