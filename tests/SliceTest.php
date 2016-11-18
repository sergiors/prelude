<?php

namespace Prelude\Tests;

use function Prelude\slice;

class SliceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnSliced()
    {
        $names = slice(['Jack', 'James', 'Kirk']);
        $this->assertEquals(['James', 'Kirk'], $names(1));
    }
}
