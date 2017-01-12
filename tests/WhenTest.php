<?php

namespace Prelude\Tests;

use function Prelude\when;
use function Prelude\pipe;

class WhenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnTruncate()
    {
        $append = function ($x) {
            return function ($y) use ($x) {
                return $y.$x;
            };
        };
        $chunk = function ($str) {
            return substr($str, 0, 10);
        };
        $pred = function ($str) {
            return strlen($str) > 10;
        };
        $truncate = when($pred)(pipe($chunk, $append('…')));

        $this->assertEquals('12345', $truncate('12345'));
        $this->assertEquals('0123456789…', $truncate('0123456789ABC'));
    }
}
