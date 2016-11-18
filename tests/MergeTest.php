<?php

namespace Prelude\Tests;

use function Prelude\merge;

class MergeTest extends \PHPUnit_Framework_TestCase
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
