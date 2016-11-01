<?php

namespace Sergiors\Functional\Tests;

use function Prelude\multiply;

class MultiplyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnMultiplied()
    {
        $this->assertEquals(100, multiply(10, 10));
        $this->assertEquals(192, multiply(32, 6));
    }
}
