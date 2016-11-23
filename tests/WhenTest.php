<?php

namespace Prelude\Tests;

use const Prelude\_;
use function Prelude\when;
use function Prelude\pipe;
use function Prelude\placeholder;
use function Prelude\partial;

class WhenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTruncate()
    {
        $append = partial(function ($x, $y) {
            return $y.$x;
        });
        $pred = function ($str) {
            return strlen($str) > 10;
        };
        $truncate = when($pred, pipe(placeholder('substr', _, 0, 10), $append('…')));

        $this->assertEquals('12345', $truncate('12345'));
        $this->assertEquals('0123456789…', $truncate('0123456789ABC'));
    }
}
