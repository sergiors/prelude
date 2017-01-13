<?php

namespace Prelude\Tests;

use function Prelude\join;

class JoinTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnJoined()
    {
        $this->assertEquals('JamesKirkHank', join(['James', 'Kirk', 'Hank'])(''));
    }
}
