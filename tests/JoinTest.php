<?php

namespace Prelude\Tests;

use function Prelude\join;

class JoinTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnJoined()
    {
        $this->assertEquals('JamesKirkHank', join(['James', 'Kirk', 'Hank'])(''));
    }
}
