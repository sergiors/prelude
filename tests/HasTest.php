<?php

namespace Prelude\Tests;

use function Prelude\has;

class HasTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnTrue()
    {
        $hendrix = [
            'username' => 'Hendrix',
            'telephone' => '',
            'year_old' => false,
        ];

        $this->assertTrue(has('username')($hendrix));
        $this->assertTrue(has('telephone')($hendrix));
        $this->assertTrue(has('year_old')($hendrix));
    }

    /**
     * @test
     */
    public function shouldReturnFalse()
    {
        $this->assertFalse(has('telephone')([]));
        $this->assertFalse(has('telephone')(['telephone' => null]));
    }
}
