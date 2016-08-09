<?php

namespace Prelude\Tests;

use function Prelude\flatten;

class FlattenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldFlattenedArray()
    {
        $this->assertEquals([1, 2], flatten([[1], 2]));
        $this->assertEquals([1, 2], flatten([[1], [[2]]]));
        $this->assertEquals([], flatten([]));
    }
}
