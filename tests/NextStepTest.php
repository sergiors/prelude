<?php

namespace Prelude\Tests;

use function Prelude\nextStep;

class NextStepTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnFour()
    {
        $inc = function ($x, $next) {
            return 4 === $x
                ? $x
                : $next($x + 1);
        };
        $steps = nextStep($inc, $inc, $inc, $inc, $inc);

        $this->assertEquals(4, $steps(1));
    }

    /**
     * @test
     */
    public function shouldReturnConcatString()
    {
        $steps = nextStep(function ($x, $next) {
            return $next("bar($x)");
        }, function ($x) {
            return "foo($x)";
        }, function ($x) {
            return "buzz($x)";
        });

        $this->assertEquals('foo(bar(fizz))', $steps('fizz'));
    }

    /**
     * @test
     */
    public function shouldReturnJustFirstCallback()
    {
        $steps = nextStep(function ($x) {
            return $x * 2;
        }, function ($x) {
            return $x + 10;
        });

        $this->assertEquals(10, $steps(5));
    }
}
