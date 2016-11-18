<?php

namespace Prelude\Tests;

use function Prelude\cond;
use function Prelude\equals;
use function Prelude\always;

class CondTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnMatchedCond()
    {
        $fn = cond([
            [equals(0), always('water freezes at 0°C')],
            [equals(100), always('water boils at 100°C')],
            [always(true), function ($temp) {
                return 'nothing special happens at '.$temp.'°C';
            }]
        ]);

        $this->assertEquals('water freezes at 0°C', $fn(0));
        $this->assertEquals('nothing special happens at 50°C', $fn(50));
        $this->assertEquals('water boils at 100°C', $fn(100));
    }

    /**
     * @test
     * @expectedException \Prelude\InvalidArgument
     */
    public function shouldThrowInvalidArgumentWhenAnyMatch()
    {
        $fn = cond([
            [equals([]), always(true)]
        ]);

        $fn(true);
    }
}
