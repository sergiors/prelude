<?php

namespace Prelude\Tests;

use function Prelude\filter;
use function Prelude\equals;

class FilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnJustTrueValues()
    {
        $names = ['James' => true, 'Kirk' => false];

        $istrue = filter(equals(true));

        $this->assertEquals(['James' => true], $istrue($names));
    }
}
