<?php

namespace Prelude\Tests;

use function Prelude\partial;
use function Prelude\allPass;
use function Prelude\get;
use function Prelude\has;

class AllPassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldPass()
    {
        $placeholders = [
            'to' => 'xxx@xxx.com',
            'from' => 'xxx@xxx.com'
        ];

        $propEq = partial(function ($k, $v, array $xss) {
            return get($xss)($k) === $v;
        });

        $y = allPass([has('from'), has('to')]);
        $this->assertTrue($y($placeholders));

        $x = allPass([$propEq('rank', 'Q'), $propEq('suit', '♠︎')]);
        $this->assertTrue($x(['rank' => 'Q', 'suit' => '♠︎']));
        $this->assertFalse($x(['rank' => 'Q', 'suit' => '♣︎︎']));
    }
}
