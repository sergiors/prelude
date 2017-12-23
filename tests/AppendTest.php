<?php

namespace Sergiors\Functional\Tests;

use function Prelude\append;

class AppendTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnAppened()
    {
        $this->assertEquals(append('tests')(['write', 'more']), ['write', 'more', 'tests']);

        $append = append(['tests']);
        $this->assertEquals($append(['write', 'more']), ['write', 'more', ['tests']]);
    }
}
