<?php

namespace Prelude\Tests;

use function Prelude\prepend;

class PrependTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnPrepend()
    {
        $this->assertEquals(prepend('fee', ['fi', 'fo', 'fum']), ['fee', 'fi', 'fo', 'fum']);
    }
}
