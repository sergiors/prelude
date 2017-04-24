<?php

namespace Prelude\Tests;

use function Prelude\pipe;

class PipeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldRunFunctionHasManyAriry()
    {
        $fn = pipe(function ($x, $y) {
            return $x * $y;
        }, function ($x) {
            return $x / 2;
        });

        $this->assertEquals($fn(10, 10), 50);
    }

    /**
     * @test
     */
    public function shouldPipedResult()
    {
        $fn = pipe(function ($x) {
            return "foo($x)";
        }, function ($x) {
            return "bar($x)";
        }, function ($x) {
            return "baz($x)";
        });
        
        $this->assertSame($fn('x'), 'baz(bar(foo(x)))');
    }

    /**
     * @test
     */
    public function whenRestParamsIsArray()
    {
        $c = ['foo' => 10];
        $p = function (int $x, array $c) {
            return $x + $c['foo'];
        };
        $f = pipe($p, $p, $p);

        $this->assertEquals(40, $f(10, $c));
    }
}
