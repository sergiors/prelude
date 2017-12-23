<?php

namespace Prelude\Tests;

use function Prelude\multiply;

class MultiplyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnMultiplied()
    {
        $this->assertEquals(100, multiply(10)(10));
        $this->assertEquals(192, multiply(32)(6));
    }
}
