<?php

namespace Prelude\Tests;

use function Prelude\not;

class NotTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $this->assertTrue(not(false));
    }
    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertFalse(not(true));
    }
}
