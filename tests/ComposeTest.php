<?php

namespace Prelude\Tests;

use function Prelude\compose;

class ComposeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnJoined()
    {
        $compose = compose(
            function ($x) {
                return "foo($x)";
            },
            function ($x) {
                return "bar($x)";
            },
            function ($x) {
                return "baz($x)";
            }
        );
        $this->assertSame($compose('x'), 'foo(bar(baz(x)))');
    }
}
