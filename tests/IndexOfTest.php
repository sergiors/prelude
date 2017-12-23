<?php

namespace Prelude\Tests;

use function Prelude\indexOf;

class IndexOfTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnTheIndex()
    {
        $users = ['James', 'Sully', 'Kirk'];
        $this->assertEquals(0, indexOf('James')($users));
        $this->assertEquals(1, indexOf('Sully')($users));
    }

    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertEquals(-1, indexOf('Jimmi')([]));
    }
}
