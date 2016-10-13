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
     */
    public function shouldReturnBindedFromJust()
    {
        $jimi = maybe(['first_name' => 'Jimi']);
        $hendrix = $jimi->bind(function ($x) {
            $x['last_name'] = 'Hendrix';
            return $x;
        });
        $this->assertEquals(['first_name' => 'Jimi'], $jimi->fromJust());
        $this->assertEquals(['first_name' => 'Jimi', 'last_name' => 'Hendrix'], $hendrix->fromJust());
    }

    /**
     * @test
     */
    public function shouldReturnBindedFromNothing()
    {
        $nothing = maybe(null);
        $tryBind = $nothing->bind(function ($x) {
            return 1;
        });
        $this->assertEquals($tryBind, $nothing);
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
