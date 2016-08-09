<?php

namespace Prelude\Tests;

use function Prelude\get;

class GetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnIndex()
    {
        $this->assertEquals('a', get(['a' => 'a', 'b' => 'b'], 'a'));
    }

    /**
     * @test
     */
    public function shouldReturnNotfound()
    {
        $this->assertEquals('missing', get(['a' => 'a', 'b' => 'b'], 'c', 'missing'));
    }
}
