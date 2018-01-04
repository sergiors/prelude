<?php

namespace Prelude\Tests;

use const Prelude\id;
use function Prelude\cond;
use function Prelude\equals;
use function Prelude\always;

class CondTest extends \PHPUnit\Framework\TestCase
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
     * @expectedException \Prelude\Exception\CondClauseException
     */
    public function shouldThrowCondClauseExceptionWhenNothingMatch()
    {
        $fn = cond([
            [equals([]), always(true)]
        ]);

        $fn(true);
    }
}
