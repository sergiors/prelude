<?php

namespace Prelude\Tests;

use function Prelude\split;

class SplitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnSplited()
    {
        $splited = split('The quick brown fox jumped over the lazy dog')(' ');

        $this->assertEquals(
            ['The', 'quick', 'brown', 'fox', 'jumped', 'over', 'the', 'lazy', 'dog'],
            $splited
        );
        $this->assertCount(9, $splited);
    }
}
