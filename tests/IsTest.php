<?php

namespace Prelude\Tests;

use function Prelude\is;

class IsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $isStdClass = is(\stdClass::class);

        $this->assertTrue($isStdClass(new \stdClass()));
    }
}
