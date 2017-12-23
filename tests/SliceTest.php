<?php

namespace Prelude\Tests;

use function Prelude\slice;

class SliceTest extends \PHPUnit\Framework\TestCase
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
