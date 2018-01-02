<?php

namespace Prelude\Tests;

use function Prelude\props;

class PropsTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $this->assertEquals([1, 2], props(['x', 'y'])(['x' => 1, 'y' => 2]));
    }
}
