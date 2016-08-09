<?php

namespace Prelude\Tests;

use function Prelude\maybe;

class MaybeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sholdReturnJustValue()
    {
        $just = maybe(1);

        $this->assertEquals(1, $just->fromMaybe(0));
        $this->assertEquals(1, $just->fromJust());
        $this->assertFalse($just->isNothing());
        $this->assertTrue($just->isJust());
        $this->assertEquals('it`s just', $just->maybe('was nothing', function () {
            return 'it`s just';
        }));
    }

    /**
     * @test
     */
    public function shouldReturnMaybeValue()
    {
        $nothing = maybe(null);

        $this->assertEquals(0, $nothing->fromMaybe(0));
        $this->assertTrue($nothing->isNothing());
        $this->assertFalse($nothing->isJust());
        $this->assertEquals('was nothing', $nothing->maybe('was nothing', function () {
            return;
        }));
    }

    /**
     * @test
     * @expectedException \RuntimeException
     */
    public function shouldReturnRuntimeException()
    {
        $nothing = maybe(null);
        $nothing->fromJust();
    }
}
