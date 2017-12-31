<?php

namespace Prelude\Tests;

use function Prelude\memoize;

class MemoizeTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $count = 0;
        $inc = memoize(function ($n) use (&$count) {
            $count += 1;
            return $n + 1;
        });

        $this->assertEquals($inc(-1), 0);
        $this->assertEquals($inc(-1), 0);
        $this->assertEquals($inc(-1), 0);
        $this->assertEquals($count, 1);
    }
}
