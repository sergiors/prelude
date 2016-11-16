<?php

namespace Prelude\Tests;

use function Prelude\successor;

class SuccessorTest extends \PHPUnit_Framework_TestCase
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
        $successor = successor($inc, $inc, $inc, $inc, $inc);

        $this->assertEquals(4, $successor(1));
    }

    /**
     * @test
     */
    public function shouldReturnConcatString()
    {
        $successor = successor(function ($x, $next) {
            return $next("bar($x)");
        }, function ($x) {
            return "foo($x)";
        }, function ($x) {
            return "buzz($x)";
        });

        $this->assertEquals('foo(bar(fizz))', $successor('fizz'));
    }
}
