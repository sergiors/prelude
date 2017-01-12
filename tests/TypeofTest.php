<?php

namespace Prelude\Tests;

use function Prelude\typeof;

class TypeofTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnSameType()
    {
        $user = new \stdClass();
        $this->assertTrue(typeof(\stdClass::class)($user));

        $stdType = typeof(\stdClass::class);
        $this->assertTrue($stdType($user));
    }
}
