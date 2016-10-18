<?php

namespace Prelude\Tests;

use function Prelude\toString;

class ToStringTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $this->assertTrue(is_string(toString(10)));
        $this->assertTrue(is_string(toString(1.0)));
    }
}
