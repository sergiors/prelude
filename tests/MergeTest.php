<?php

namespace Prelude\Tests;

use function Prelude\merge;

class MergeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnMerged()
    {
        $names = merge(['Jack']);
        $this->assertEquals(['Jack', 'James'], $names(['James']));
    }
}
