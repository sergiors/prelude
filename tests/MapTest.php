<?php

namespace Prelude\Tests;

use function Prelude\map;

class MapTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldMappedNamesToUpperCase()
    {
        $names = ['James', 'Kirk'];

        $upper = map('strtoupper');

        $this->assertEquals(['JAMES', 'KIRK'], $upper($names));
    }
}
