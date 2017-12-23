<?php

namespace Prelude\Tests;

use function Prelude\pipe;

class PipeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldRunFunctionHasManyAriry()
    {
        $fn = pipe(
            function ($x, $y) { return $x * $y; },
            function ($x) { return $x / 3; }
        );

        $this->assertEquals($fn(10, 15), 50);
    }

    /**
     * @tests
     */
    public function shouldPipedResult()
    {
        $fn = pipe(
            function ($x) { return "foo($x)"; },
            function ($x) { return "bar($x)"; },
            function ($x) { return "baz($x)"; }
        );
        
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

        $sum = function (int $x) use ($c) {
            return $x + $c['foo'];
        };

        $f = pipe($p, $sum, $sum);

        $this->assertEquals(40, $f(10, $c));
    }

    /**
     * @test
     */
    public function firstParamIsArray()
    {
        $p = pipe(
            'array_sum',
            function (int $x) {
                return $x * 2;
            }
        );

        $this->assertEquals(12, $p([1, 2, 3]));
    }

    /**
     * @test
     */
    public function shouldSum()
    {
        $sum = function ($x = null) {
            return $x
                ? $x + 10
                : 10;
        };
        $f = pipe($sum, $sum, $sum);

        $this->assertEquals(30, $f());
    }
}
