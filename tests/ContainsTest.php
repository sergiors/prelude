<?php

namespace Prelude\Tests;

use function Prelude\Contains;

class ContainsText extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $ls = ['name' => 'James'];
        $this->assertTrue(contains('James')($ls));
        $this->assertFalse(contains('Kirk')($ls));

        $nums = [10, 20, 30];
        $this->assertTrue(contains(10)($nums));
    }
}
