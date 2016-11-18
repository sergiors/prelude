<?php

namespace Prelude\Tests;

use Prelude\Raise;

class RaiseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException \Prelude\Runtime
     */
    public function shouldThrowRuntime()
    {
        Raise::runtime();
    }

    /**
     * @test
     * @expectedException \Prelude\InvalidArgument
     */
    public function shouldThrowInvalidArgument()
    {
        Raise::invalid();
    }
}
