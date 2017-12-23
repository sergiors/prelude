<?php

namespace Prelude\Tests;

use function Prelude\replace;

class ReplaceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReplacedArray()
    {
        $base = ['orange', 'banana', 'apple', 'raspberry'];
        $replacements = [0 => 'pineapple', 4 => 'cherry'];
        $basket = replace($base);

        $this->assertEquals(
            ['pineapple', 'banana', 'apple', 'raspberry', 'cherry'],
            $basket($replacements)
        );
    }
}
