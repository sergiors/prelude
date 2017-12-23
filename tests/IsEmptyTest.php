<?php

namespace Prelude\Tests;

use function Prelude\isEmpty;

class IsEmptyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $this->assertTrue(isEmpty(''));
        $this->assertTrue(isEmpty(0));
        $this->assertTrue(isEmpty(0.0));
        $this->assertTrue(isEmpty('0'));
        $this->assertTrue(isEmpty([]));
        $this->assertTrue(isEmpty(null));
        $this->assertTrue(isEmpty(false));
    }
}
