<?php

namespace Prelude\Tests;

use function Prelude\ifElse;
use function Prelude\get;
use function Prelude\has;
use function Prelude\always;

class IfElseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnUpperName()
    {
        $ns = ['name' => 'James Tiberius Kirk'];
        $upper = function (array $xss) {
            return strtoupper(get($xss, 'name'));
        };

        $expected = ifElse(has('name'), $upper, always(false));
        $this->assertEquals('JAMES TIBERIUS KIRK', $expected($ns));
    }
}
