<?php

namespace Prelude\Tests;

use function Prelude\lt;

class LtTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $this->assertTrue(lt(9)(10));
    }

    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertFalse(lt(10)(9));
    }
}
