<?php

namespace Prelude\Tests;

use function Prelude\gt;

class GtTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $this->assertTrue(gt(10)(9));
    }

    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertFalse(gt(10)(11));
    }
}
