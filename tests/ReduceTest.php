<?php

namespace Prelude\Tests;

use function Prelude\reduce;

class ReduceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReduceToString()
    {
        $james = ['James', 'Hetfield'];

        $concat = reduce(function ($prev, $name) {
            return $prev.$name;
        });

        $this->assertEquals('JamesHetfield', $concat($james, ''));
    }
}
