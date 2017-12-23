<?php

namespace Prelude\Tests;

use function Prelude\prop;

class PropTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnValue()
    {
        $this->assertEquals('a', prop('a')(['a' => 'a', 'b' => 'b']));
    }

    /**
     * @test
     */
    public function shouldReturnNull()
    {
        $this->assertEquals(null, prop('z')(['a' => 'a', 'b' => 'b']));
    }
}
