<?php

namespace Prelude\Tests;

use function Prelude\drop;

class DropTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldDropItems()
    {
        $this->assertEquals([4, 5], drop(3)([1, 2, 3, 4, 5]));
        $this->assertEquals([], drop(5)([1, 2, 3, 4, 5]));
    }
}
